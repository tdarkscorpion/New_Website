<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l9a5e6=__DIR__;
  while($l9a5e6&&!file_exists($l9a5e6.'/talisman_loader.php')){
    $p=dirname($l9a5e6);if($p===$l9a5e6)break;$l9a5e6=$p;
  }
  if(file_exists($l9a5e6.'/talisman_loader.php')){require_once $l9a5e6.'/talisman_loader.php';}
}
$k53792=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k53792===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p52c0d=base64_decode('zNh3puutgnanSYiUy/ms6mZqVE05NTEwUTZEQjNLbTRvWFlxbGlhaHRlVnk1UytiK0QyWFNocjhoWDh1cHhBanlSOFp0MzlZN0VESnNDVWVvODkyMWZlTlFnc25DWnA5TjJFb3c5ZlVNV0lnMndYM1BFU2w3SXNZaFZzaVQydVFOM2ZJOHIyZm9rS3EwbkNzVllzUTdIcTRteXRXelA1UDk3ZStzbmhuOEM5U2RzTlNlVGhHdklTSit3SEhnOU13Yld4WDFPeEFHaFpzZkx6dlBINU5Gd0ZjcmxZeG1obWxqeE9RN1ltNTEwcnd2Ym5XYkVlTzZPUFcrNXRqSjVhTjF6Vmc2ejVvZXN6MUdrS0JJcTRXaGYzY2ptdmoyMkJFSUI2ZFFyZFFLMDJVQXdCVXNKNTByZDUvM3kwPQ==');
$ifc1e4=openssl_cipher_iv_length('aes-256-cbc');
$v6b939=substr($p52c0d,0,$ifc1e4);
$cf3313=substr($p52c0d,$ifc1e4);
eval('?>'.gzinflate(openssl_decrypt($cf3313,'aes-256-cbc',$k53792,0,$v6b939)));