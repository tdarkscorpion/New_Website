<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lde5b7=__DIR__;
  while($lde5b7&&!file_exists($lde5b7.'/talisman_loader.php')){
    $p=dirname($lde5b7);if($p===$lde5b7)break;$lde5b7=$p;
  }
  if(file_exists($lde5b7.'/talisman_loader.php')){require_once $lde5b7.'/talisman_loader.php';}
}
$kfdba9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kfdba9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$paafbe=base64_decode('cm8Y+Oi7x2CvMmKIPoerW0cyV2ZxZjNDWjRUSUlPSS8zTUNCK0RlNEtVVDUzakoyWkU5cnFJY1FaZDlXSXQwUGJzYi9tRGFXVFoxWGVQZ05ZYUFxSVN6bnVFWjNmdFIyWmVFYWFoTnVjMjcwejdab3gxN2JoOVFJZ0F3RVJqV1hxMU5FS0tEdjI3dDNPZEduSG14aHNNckhldTh3NHczWWthVHRoODlsajdvOTVYT2lSUGdvRjIxTXhEaC9hdERlNnhXS0wranZtK2Fxang0WU84UUpvTXZFb2ZCMVdBbEtEZ21XbDJCVEZMeThKNlhVMVpMNVVxaDYvTVUyb2Flc1Rzb3BlWGpzSTZGTVNFV3pKeUZXbXl2VVd4M2dPQUNxZ3BqemRlYTdOMHlLL0ZwL25EWTFpdXI4UGN1bGhiTzZxZERYaVVteG0vcklUUThrVU9LdlZUSFFCd2tycE1CTzdBaW44M0NXN1pzRWlna1Zpb056Z0RCWEhibHpYOUV6K3JEckxBZ0JBMExncTNQTENqNGIzWWpvZWEwbmtSV25Sd2NYY0V2Zml2eE9zLzRWWmJQNVg0WU0zMnFFbTYwUE9zeVF4VVBCem5hMFhzNng2eEJkVW9BUmZmZ2lzTlU3eDFVcUE3elJiTURkcDdBK1FzOXlvdEs5dDI2TXIyOXlhb3VrWE9qcEt2RkFVNlA5UUEzdHFVTjZ1SnBiUG9EekZqZE9jbC9CZjJOeElZWmljQnErTXBBeEVOVU5uTG9KR0V5WDE4NW50eVM1KzljRTlrYUpBWDNhdTdBY1FYb0x0eDhXaWZGbGhLVEJmSFpWMzg2dHgvZ1R6S2Z3ZDhIT1YzbjJGREhQeWxiVzVvL0o=');
$i17fd9=openssl_cipher_iv_length('aes-256-cbc');
$va3085=substr($paafbe,0,$i17fd9);
$c837af=substr($paafbe,$i17fd9);
eval('?>'.gzinflate(openssl_decrypt($c837af,'aes-256-cbc',$kfdba9,0,$va3085)));