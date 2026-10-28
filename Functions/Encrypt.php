<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lcd98e=__DIR__;
  while($lcd98e&&!file_exists($lcd98e.'/talisman_loader.php')){
    $p=dirname($lcd98e);if($p===$lcd98e)break;$lcd98e=$p;
  }
  if(file_exists($lcd98e.'/talisman_loader.php')){require_once $lcd98e.'/talisman_loader.php';}
}
$k4209f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4209f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p05c02=base64_decode('UJUtyFLncLVXCCoDzg9TmFhyOUZsc0ZieTJlbnZ3dTAxSnNVQjI4RStGTnIyYytnbENGWDVKUUhsVHhnbDQ4QktqQTJXb2ViYmpZZzF6T2ExcUdvRFZhZi85Y2lLVHczVDVUazJRc1RoeThaUE9WNWFlMGc4RW5hbk93bEk2S3RQa2RVS002SmhHZHlDK0lnKzRQQUdIWHEwWTJBYUlob0Y4OXAzckNlbFZ0VFcrOCswS05JRjEvaEFrc0JiSVNsakkveW93cXRKOUNKYWlhMjZSUTZzOUlsSWU2MkxIVzgxV1F1K3FDQmhwaWcxV3lJNWFvNGw5Sm9oSDljdEJXcjBVV3dSc0pxcXc4eU1GdjNoVTh0aFlNRzlqR2g5UE9lV1c5Ryt0SGoxbi9Cb2NRVnVDQ1UvbTlVVkwzV2s0TGVSTEZIRUR6Ukg5bmd0cmFTbm4rV3kzZFQxWWVSZmQyNUsrcVJZRVhhOHVoT1hjY2d0ZWxoTTBKV2VZWFJmcmxiVzM2bVF2MWI3SGRnOE9rTExGTkFHQXZERmFyNXdOWmpXRXV3UllWM1ZsdnBnVUk5M0lydHJiUjhtRUJNU2oyWXdDUVR1SFZzNFdndGlTUkg=');
$i9a5f7=openssl_cipher_iv_length('aes-256-cbc');
$v1db0c=substr($p05c02,0,$i9a5f7);
$caab3a=substr($p05c02,$i9a5f7);
eval('?>'.gzinflate(openssl_decrypt($caab3a,'aes-256-cbc',$k4209f,0,$v1db0c)));