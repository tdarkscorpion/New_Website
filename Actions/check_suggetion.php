<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf5cf0=__DIR__;
  while($lf5cf0&&!file_exists($lf5cf0.'/talisman_loader.php')){
    $p=dirname($lf5cf0);if($p===$lf5cf0)break;$lf5cf0=$p;
  }
  if(file_exists($lf5cf0.'/talisman_loader.php')){require_once $lf5cf0.'/talisman_loader.php';}
}
$k2d03f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2d03f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p2a614=base64_decode('6F3vobKhMcHo9Ml1PtfXdEJrZnJCVE5helNZNk1wUXRQQnlUNzNIL3MvZ04rY0tHMnJ1SVZEdFM0VlRnWDV2Z0k3RVBndGl0Nk0rNkJWSld2cnEweVNUeEZhbGw5cVhESmZCMlM1eFpPUGJ3enRMbDVhU2VnMW91RGZnUDRuYXBaN3N4cUZlOUZFbVpyeitPd1BsTmJsMXR3TkxDQnpaa0ZxeDQxMGlzdzNSNmdadmtNU3JNRnA1R2R0TGpDdk01dk9hb1lLb0gvaEFkRG9BTHN0bS8wMUdzOFpDL0J0WElKbW0vWkdmRWlsb0lMRDlYTCtpSVVHdVhRdEhWcWdYQ2lwVjdNTVRsbDdHU0U4d3FiUjIxK1d0ckRKVk5udmxiVXlzbnRibVdaZFcxVDZhbkUzYWxaT0xqWWdudXIraHBPMVNaU0hLSnJVaGZ2NXhTaHNFdzZBMllMMi90Q2FBc3ljc0tIREpMSmsyVU9weXM3Z1l0TWQ2U2hlRjVHUkpCUGhWSlRpbm50eTVQMHo2Y3lSZ2g4V1AyWEZyN0N2cHRMNE43eXRpTmprQkN5dWFMazEvZW1Kc2FFamh5REdsTzVidWJnYk5wckoxNjZPb3ZzOFZHSnl0U1RWVlVmd0FxQ01OYXIvRnA3RzMwS1RxcVVyR1RlVVUxbzArZ2hiZ3M4TTNESTArSnNjUkVjOS9JYzhaV05GZUk4TE82WUwvczZQek9CQzdUWXA2eUptTGRNTEdyWXdrZGtxTytWdnhNMWdqa1hkQVpiU2xGYllUK3dZZXNtc1B6T2FobHFiMHdFcHR6MW1mUXJ2c2d3Y082UEF1VkQxajZvZ1BaR2dhMUUvOTByNUY0UzlPVjVsVkg=');
$i09bf8=openssl_cipher_iv_length('aes-256-cbc');
$v05dc6=substr($p2a614,0,$i09bf8);
$ce387f=substr($p2a614,$i09bf8);
eval('?>'.gzinflate(openssl_decrypt($ce387f,'aes-256-cbc',$k2d03f,0,$v05dc6)));