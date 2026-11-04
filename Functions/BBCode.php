<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l819ce=__DIR__;
  while($l819ce&&!file_exists($l819ce.'/talisman_loader.php')){
    $p=dirname($l819ce);if($p===$l819ce)break;$l819ce=$p;
  }
  if(file_exists($l819ce.'/talisman_loader.php')){require_once $l819ce.'/talisman_loader.php';}
}
$kd0747=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd0747===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe9472=base64_decode('TtpOS3qD7GNLXqe0FoXVok1QV3o4QlkrbXpCcDc5azE1TEhneHZuUHk0RjZFZGlCSlBETUZ2S0xIM2Zvc3Q2dzFPTVhjQzRtcEFVTzF5K29zTWU0QkNWa01xa2RpTE5OQmNMSVhQTHNwRFVnOWdpcG5IeVJqQnFBUXBkZ1dWTUR4clZaM3ZLV3VEbSt6cFlyaHVEb0dQVDBPTUpqWlNTUnhodE5jQW9DaFNQa3lBaWd6Q3U0RlZtVEduSTNDMHRPcmhpa3JmazUxcVJkZ2R0dmk0ek9NZDdvMEFqTVdtMURNOXo1NlpmaHNrV2dmQXg5ZHVncXBtb2xxbVdGTHd3V3JjeGJKMC9leG5GS2hwaCtyT09uSmNIK1NpQ0xtbWNYWDlBSXUyN3ptK25oWTgrNFlDblcyNmVjNHJiZUdOczFOS0RoQkNZMHBuTCsyQUNl');
$i30d72=openssl_cipher_iv_length('aes-256-cbc');
$v0546a=substr($pe9472,0,$i30d72);
$c72399=substr($pe9472,$i30d72);
eval('?>'.gzinflate(openssl_decrypt($c72399,'aes-256-cbc',$kd0747,0,$v0546a)));