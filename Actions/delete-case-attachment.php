<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0d1eb=__DIR__;
  while($l0d1eb&&!file_exists($l0d1eb.'/talisman_loader.php')){
    $p=dirname($l0d1eb);if($p===$l0d1eb)break;$l0d1eb=$p;
  }
  if(file_exists($l0d1eb.'/talisman_loader.php')){require_once $l0d1eb.'/talisman_loader.php';}
}
$k3171d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3171d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd7f0b=base64_decode('QNUVBuzyI3dnCdNxsis+ikZtSmxzOHFlWGRPS0hKZmRIT2hmcTVrdERXR1YweUxiWEs3dzdSVHdPL1NpQjlVRlNkZnJKWU5oS1U4ZUVjTVY0TEdJSG9WRzdnZFJwT0JydVNnRHB4WVRDSFBuOVRTcVBYRTJRc3U2TUhXQ1lETy95S2hseDREVnh0S1cxRi9OMnYxT3VDWmQrdFJEc3N2UlBMSFZSQjBzWkRmbldYVnVBeTVBNkJiSkZYMWlzZ0dETHVQdXdCYTE5TGg0OHZuSGs4ZG1SNUx5YkVLS2JXTjd2d2xtdUFJc1NSejFtNk54eCtQdHdHaG1hcFJ6b0lYMWpoNHY4L3FUanhnTWIram9jYk1xa2dicEd6UlRISi9QTGFmODV5MWxIaEoxM1kycVFQTW5reWo0UEIvVC9TYkt5cFlYa21PZElMcTgxY1pE');
$i046e1=openssl_cipher_iv_length('aes-256-cbc');
$v8b6d9=substr($pd7f0b,0,$i046e1);
$c7f1fc=substr($pd7f0b,$i046e1);
eval('?>'.gzinflate(openssl_decrypt($c7f1fc,'aes-256-cbc',$k3171d,0,$v8b6d9)));