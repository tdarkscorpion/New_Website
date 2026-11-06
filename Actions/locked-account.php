<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2ec50=__DIR__;
  while($l2ec50&&!file_exists($l2ec50.'/talisman_loader.php')){
    $p=dirname($l2ec50);if($p===$l2ec50)break;$l2ec50=$p;
  }
  if(file_exists($l2ec50.'/talisman_loader.php')){require_once $l2ec50.'/talisman_loader.php';}
}
$kd38e6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd38e6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf7df9=base64_decode('NFs0J1MXUleyloXqM/94oHoyNGcweXVkSUlNKzIwZFJqNzZUTnVLMGVxMklEZzV3WjhCMml0TEFjYjh6SkVVTldhREdnY2dOb2R5MWNJbTBOSmhxL2wwS0NCNHNoVkFqNnRGOStxOFpZZ21OSnlaeHVLMk4ySFpMQWxrYWEzUmZWRm5Dd1M2SVhnclVmMjlMTGlCYWZXN2hwMlFxM21RL24wUUVpblNUbGkzc28rTkc3RHlZOVgwM1d4UEFLNDZkbVpKendhcEcyVnZla291Wi9DK2FXaXV4Z1AyTlZhNU9PYW1HcG9YdUpZV2F0YU9CS1ZrclBKL1Fnd0pBNEZSV2FMcUFoalFzVkE5OXlGQ2VYWEM4dHprWU9sZnM2dWRlUk5nV3BEc2gycVIvMzZlZnkrMDRoMlI4Q1pjZC9RdXVhZ0pLTndWbkZxT0VxUUVDemtZbnFnbE5pd2NFallOVEZtUzdUOFE3dzFhVExDOHVKTU94VFNPbUdZN2tnYXBkMkhnVy9EcEhNd3VPelp1YmMwdEt6T1IwY3RvMWhLL0NCNTRBdHlQdjRXOHJwQ0s5WGR6dW4zcUNzM3pPc1M4TU5HNVZTWGlxTzFwb0YxaXpOOVkxT2NnT1VmL3Z1ZEV0RnFQTVMyZEJUQzc1WWM1UnVvaGE4QklIcjZWd2wxMXA2Z2NYaFZvTEV0c05VVkxicTRQRmxVdDJnZ2NMQ3l4b0QyMGc4SkRQVVkwdTVlcHZDVDBHdTN6MEMzS2huaGlhWWJIcHRldEFUNE9VY2luWnNjT1JQMW0wNEpCbi9NMTJrL0xvWGJZVjVoR1ExY0Z5OUZIRFIrQTJIZHJBME5wVFR2SHBZZEw4MGZvTU1JKzc4T3Z6QmJ0bmppYmV1WGtnSDMxMnJlV1NZdVNOemYvaGFESUkxUy9mQU5ZM2Nna2JadFBRd1dJQXY4UFNsRGlIS1BUU293UDhNSUkzdzd1bGpQUTV4SlQ5RjdYUklXOTBIV3A5Y1NxQVNNOD0=');
$i0542e=openssl_cipher_iv_length('aes-256-cbc');
$va9dbf=substr($pf7df9,0,$i0542e);
$c75f6f=substr($pf7df9,$i0542e);
eval('?>'.gzinflate(openssl_decrypt($c75f6f,'aes-256-cbc',$kd38e6,0,$va9dbf)));