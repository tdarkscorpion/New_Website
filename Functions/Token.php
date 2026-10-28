<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l028ac=__DIR__;
  while($l028ac&&!file_exists($l028ac.'/talisman_loader.php')){
    $p=dirname($l028ac);if($p===$l028ac)break;$l028ac=$p;
  }
  if(file_exists($l028ac.'/talisman_loader.php')){require_once $l028ac.'/talisman_loader.php';}
}
$ke4871=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke4871===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7113a=base64_decode('KzeWys+4ByN92J/pTnAX+ndKVUNhQ3FkOEFmOUtJSFJIcXJCMmRwaFcxa05Ubm9ZSTB2SC91RW84RWI4QkU0cTZ3U3dzZ3YyVVBoek1mWHpQRXA5Y1hPNXdZU3E5NHo5cGJ0SmNic2lHRmhUdmw2WnVLam53MklJa2IzcWUveUZiL0xCQ2FyTDZqcGRXc25lRDYyMDA5Slg1akVCWkZiZDhwWTI3NmxCQzVHbVRHUTVrWm9KVXZrSTgza3ducDh3UjJuZVZkYzBoS28xd1l4V3hiOVEzUFVlZEVQU0h4czlBTWVRV1IvdHhES3hvNEU0WG1UVjZrSmoxeUFXTEFHN3IvWlZHUDc3bis3VFVxaDJ5NitDQkZ3YjNSN3Q4RWNGa284d3JueFRmcnJkTjNvc1AxUWlSKzgyRTRzRUlCRk5QMkU5akdRNkp0NnYremMxdVlmVjlWeFAzWFpVSTl0TFBLbURaRGlObHVzWnJ5V1Z4SVd2cnl6ZmdoOD0=');
$i5cd46=openssl_cipher_iv_length('aes-256-cbc');
$v74312=substr($p7113a,0,$i5cd46);
$c9e57f=substr($p7113a,$i5cd46);
eval('?>'.gzinflate(openssl_decrypt($c9e57f,'aes-256-cbc',$ke4871,0,$v74312)));