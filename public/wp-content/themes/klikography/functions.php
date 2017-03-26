<?php 
 global $wpdb;
if ( ! function_exists( 'colored_cow_scripts' ) ) {
    function colored_cow_scripts() {
        wp_enqueue_script('cc-bootstrap', get_template_directory_uri().'/dist/lib/js/bootstrap.min.js',array('jquery'), false, true);
        wp_enqueue_script('main', get_template_directory_uri().'/main.js',array('jquery'), false, true);
        wp_localize_script('main','ajaxurl',admin_url('admin-ajax.php') );
    }
    add_action('wp_enqueue_scripts','colored_cow_scripts');
}
if ( ! function_exists( 'colored_cow_styles' ) ) {
    function colored_cow_styles() {  
        wp_enqueue_style('cc-bootstrap', get_template_directory_uri().'/dist/lib/css/bootstrap.min.css');
        wp_enqueue_style('style', get_template_directory_uri().'/style.css');

    }
    add_action('wp_enqueue_scripts','colored_cow_styles');
}
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
add_filter('show_admin_bar','__return_false');
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
function registration(){  
    global $wpdb;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = wp_hash_password( $password ) ;   
    $to = array('adiba@coloredcow.com', 'swarnima@coloredcow.com');
    $subject= 'Alert message';
    $message = nl2br("Someone wants to connect with you.\n Name of NGO: $name \nEmail: $email ") ;
    $header = '';
    $attachments= [];
    $tag = [];
    $form_name= 'ManageMyNGO';
    $from_email = 'no-reply@managemyngo.com';
    $template = '';
    wpMandrill::mail($to, $subject, $message , $header, $attachments , $tag, $from_name, $from_email , $template);   
    $wpdb->insert( wp_registration , array('reg_ngo_name' => $name, 'reg_email_id' => $email, 'reg_password' => $hash), array( '%s' , '%s', '%s') );
    $wpdb->query($sql);
    print json_encode("Saved");
}
add_action('wp_ajax_registration', 'registration');
add_action('wp_ajax_nopriv_registration', 'registration');
 function mandrill()
 {   global $wpdb;
    $email = $_POST['email'];
    $subject= 'Download-checklist';
    $html = '';
    $header = '';
    $attachments = array();
    $upload_dir = wp_upload_dir();
    $upload_url = ( $upload_dir['basedir'] );
    $attachments[]=  $upload_url."/2017/02/Due-diligence-checklist.pdf";    
    $tag = [];
    $form_name= 'ManageMyNGO';
    $from_email = 'no-reply@managemyngo.com';
    $template = 'MMN-template';
    try{
        wpMandrill::mail($email, $subject , $html, $header, $attachments , $tag, $form_name , $from_email, $template);   
         $wpdb->insert( 'checklist', array('email_id' => $email), array( '%s') );
         print json_encode("Saved");
    
       } catch(Exception $e){
        print json_encode("Error occured:" . $e);
    }
  exit();
 }

add_action('wp_ajax_mandrill', 'mandrill');
add_action('wp_ajax_nopriv_mandrill', 'mandrill');
?>
