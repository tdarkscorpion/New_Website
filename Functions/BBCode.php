<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb2ee1=__DIR__;
  while($lb2ee1&&!file_exists($lb2ee1.'/talisman_loader.php')){
    $p=dirname($lb2ee1);if($p===$lb2ee1)break;$lb2ee1=$p;
  }
  if(file_exists($lb2ee1.'/talisman_loader.php')){require_once $lb2ee1.'/talisman_loader.php';}
}
$kca13a=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kca13a===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p18758=base64_decode('dK/HYfWETOhn9jLga9dq0jlIVEppaXJKeTNLZUZITDMxRFlidU5wbU1VVVFKVW1WOEQzclVra054OG52WStISnFYOU13b3NkV05ueklRTnVMOTFWWTc3cXo2SG1aWnlybFdYRjBSc2hibG8xZTM5cHYveDIxbnNUa0FSL0J5WWY5MktPNmpGQlZuMnc1cW9laS9VdkdnL0grU09vS2VLdFoyaDkybExSR2tZZTYzKy9LNEFwbzFpSDlwdkZMV3dKWHBFNnNhM0l0L0RSbUNIVTkyanRkcDN2YmN2S29VNTlOTmFKWnVQK2J6dDRXSUNtek1jS2l0c01ta3A5WXlKTHZ0ZHFtTVdzUDFNRnFxb3hqUkJ6cFNYMnhOR1pFL0NmSHZMVTdlT0JBNk1MaVpGdERDb1gvekg3L2xIQlJyZ1NLbHNHZEVtNTlhTnFwWTZI');
$i29872=openssl_cipher_iv_length('aes-256-cbc');
$vfb0a6=substr($p18758,0,$i29872);
$cfd60d=substr($p18758,$i29872);
eval('?>'.gzinflate(openssl_decrypt($cfd60d,'aes-256-cbc',$kca13a,0,$vfb0a6)));