<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld6600=__DIR__;
  while($ld6600&&!file_exists($ld6600.'/talisman_loader.php')){
    $p=dirname($ld6600);if($p===$ld6600)break;$ld6600=$p;
  }
  if(file_exists($ld6600.'/talisman_loader.php')){require_once $ld6600.'/talisman_loader.php';}
}
$k53007=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k53007===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pea426=base64_decode('ZziEQUw3qY/fzqSsBLdI61BZWGJjQjBIZ0Z2WTB2aEp3eEcwRUZLeFBGWW1rM1FrMkh2UEdZOVY0TTNFYkFSakdYT1o1YURscFAxK3l4aXdMMkxMV29Kek8rdU9KVlJON2NwVHdUV0NudE9zWFllWmhmQ252cTNUVkRTT3ZLNnM0MVRuS00yMHdCOHFCK3ErZW1KVXlZaFZ0eUcydnBMMVF0RFdzMWhzem1XaTE3STkvZjhnYU1SSjlJbWNTV2hmTHlIdmQ5bHdPVGd5bVo2V3RjZjlpZzZtY0daY1lTK2JEMUtyckdDbUY0ZjhNcjhNUXFtWEF0dkwweUxtZEZNUXRvb1NwMGw5L2JGa0FIQUxyeWd3RHNFWkRwa1JxelR4dXp0QTMzMW5KRE9nU1R0TmlXTmRhYnByd2lSWlpMbCtOTFZVeHNiYW9WaytwczBzMVNzQkptS1NFL2RpV29kYk1TRlgrWXF5ZVV4TitSK3VyRzRrWGRpc08yOD0=');
$i47b4f=openssl_cipher_iv_length('aes-256-cbc');
$v7b4b7=substr($pea426,0,$i47b4f);
$cbf323=substr($pea426,$i47b4f);
eval('?>'.gzinflate(openssl_decrypt($cbf323,'aes-256-cbc',$k53007,0,$v7b4b7)));