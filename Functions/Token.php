<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8fd6f=__DIR__;
  while($l8fd6f&&!file_exists($l8fd6f.'/talisman_loader.php')){
    $p=dirname($l8fd6f);if($p===$l8fd6f)break;$l8fd6f=$p;
  }
  if(file_exists($l8fd6f.'/talisman_loader.php')){require_once $l8fd6f.'/talisman_loader.php';}
}
$k88b63=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k88b63===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p14744=base64_decode('2IP6dnYSh/RWzVmbX3Kcx09mQjJmbTlZOWRrKytmSE51RldqcmZ5N0g2cXJ5Vy9uUUdXb2w0alVjV1hmdUZvRUxjMy8vcTMrTTdrMXpYRW0yVzE0cHB3Zzd1WHZzL1pmckVvOHA5M0dLVXM1ZTBtcjVOdUdEMkxhZzJPOHBwODdycVYxbkg1SFQwOU0zT0FGaXlaVmtmdXVCWElMaiszOVJjUE45RVF1VmxOOG1rWkFPSTNQblk5YjNLT01oWEErVE9CK1lhQUNaUnNqYk45Kyt3SjRtbHM0RUtsOUpZTjNROGJ6RnZhSGp1S2I3WnJkcDB0eTN5eW5tVFFIQ051Tk1oSkNMcWRnK29Bd0Q0bFp3eGVIcEpPYmdEV1JGSFhhWWJtbkEwWVVxN0hzWEpJamJCK2hCNHZ6WmtrZW4vVEordXJZK2NyTGplQjRwaHh4cmpHZGJhRG1vSzhiUXhzMGhYK28vaE1FakRsVUg3VDlBajJsVk9GWWJEcz0=');
$i74a52=openssl_cipher_iv_length('aes-256-cbc');
$v2de37=substr($p14744,0,$i74a52);
$cf5e20=substr($p14744,$i74a52);
eval('?>'.gzinflate(openssl_decrypt($cf5e20,'aes-256-cbc',$k88b63,0,$v2de37)));