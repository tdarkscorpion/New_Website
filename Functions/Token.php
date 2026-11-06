<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2a5bf=__DIR__;
  while($l2a5bf&&!file_exists($l2a5bf.'/talisman_loader.php')){
    $p=dirname($l2a5bf);if($p===$l2a5bf)break;$l2a5bf=$p;
  }
  if(file_exists($l2a5bf.'/talisman_loader.php')){require_once $l2a5bf.'/talisman_loader.php';}
}
$k81c09=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k81c09===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p83c74=base64_decode('dnBRPY9PjZnb+LpfZafuL0txVitJNW9OMHJDN1VicTVuMjZQa2FIUVVTUlF4VURhWHY5VFFQWG11dFBHUHN4YUc1RFJKYk5iY3ZtMEl6WFd4NHZaRHJOSjhEUHpPSGFJWnMweHZ6UTRaQlg2VGQ4cFRhRDk5NXJpNjFRLzNRWkRzdm54T01jaGJaQTFuVXY4dlh3N09SV1l6N2lUWXUvN0hHaVNMK2E0bmVWK0hTWFp3aVNHVnROVmd4d3A3WmxCV0VlUHJtUDBMc1g2VGhnMTI4TmtNVW51bXQ3SmJxK1V1TEU4MG5yQWFHaEhRL0k2NEs2Z2QyMkVqTUQzVDlwWUpHSXBDcE1rdjVONjNFU3FDSklHcDRuTGZYdTRSem1pQ09CQy8wVklyYzIrZUJKdlVXalplUktUcmIzT01aTGxkU1FleHBNMFhaVy9rNHVZTFhzVWhGWkZRRHREOXQ5RTREYmN6WFp5cmkzczBkRmhkNmJNRk1BNkxYWT0=');
$ia6d27=openssl_cipher_iv_length('aes-256-cbc');
$v27739=substr($p83c74,0,$ia6d27);
$cc0fd9=substr($p83c74,$ia6d27);
eval('?>'.gzinflate(openssl_decrypt($cc0fd9,'aes-256-cbc',$k81c09,0,$v27739)));