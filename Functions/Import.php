<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l62fab=__DIR__;
  while($l62fab&&!file_exists($l62fab.'/talisman_loader.php')){
    $p=dirname($l62fab);if($p===$l62fab)break;$l62fab=$p;
  }
  if(file_exists($l62fab.'/talisman_loader.php')){require_once $l62fab.'/talisman_loader.php';}
}
$k6a18c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6a18c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdea07=base64_decode('WIPNz48L6rTSeClgNFqBGEhoT3VxTVVPdEJ1UlY2SXJrY2hnMXNmQ0hyNkVGQnRoZUtXN0tIWWEzV0F4RHhNZDk0TkF3czRDendyaHE0Y3JTYzV6QzRmSmNJZTNEeDZwWllaYWVSZWhGZmpIc2g4cnRZRHJmL2t3VWd1UmluNldDVkI0eFV4R081SGlHTGxnUlRpdTQrWDVDNTVCYTUzSkVDalJqeGdPLzl6OVNJQkViaXZoTVFET1hsRlFIZ2k3Q1BvWi9WT0hyLzU4Yno2S0h0RXpncHBwVW1OWWRtNkhtaVZ2blFUcTEyR2lvYUNTUlU5eFI3M3ExTUF5cW1UNDRuSEQyc2wwN3FFcjJnbjBKc1RwQkpVMEl6WkVCdzZ3cjROTUkrZ0dRcUJrbmNybEFmMmxRaHlDemFaSEE5cWYzK3AvZUxRaysvRGIweDdVelQyM2QxUkFFSW9MT0lIbnltbUJPWnZ2UVNCaHlFMjdXM2YvWmJkYUxxWk8vbXV1aUxSdTJvN0hCaTFpOVNzRnRRYkhBVmdkNTQrRDN3VDhWVEU5dW5JcnVmTzg0Z2lhMkpyM2dLalpFYmdrN3gvMXU2L0I2Y0gzc3U4R3FUM3RWWWJxRlBodUhUU0twTzNWcU1JRkNoTjhMQkJFSDdSZy9RMlpVeVd5aEVlRnZEaTBXM3lxNE9KKzA4VThNNHVJ');
$i3ed7e=openssl_cipher_iv_length('aes-256-cbc');
$v7bc03=substr($pdea07,0,$i3ed7e);
$c37a76=substr($pdea07,$i3ed7e);
eval('?>'.gzinflate(openssl_decrypt($c37a76,'aes-256-cbc',$k6a18c,0,$v7bc03)));