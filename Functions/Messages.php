<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l42163=__DIR__;
  while($l42163&&!file_exists($l42163.'/talisman_loader.php')){
    $p=dirname($l42163);if($p===$l42163)break;$l42163=$p;
  }
  if(file_exists($l42163.'/talisman_loader.php')){require_once $l42163.'/talisman_loader.php';}
}
$kd89ca=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd89ca===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pba4b4=base64_decode('jfYBtHIsMeNFvxcGaydqBWMrS0hFalF2ZVZuelNrYW00Q1JlMGFLZlFSSHgzU2M0cUZqMGhyalJpbjhsN2ZvY0FrTkZ2bmRJWlc4Nm9YNzk2L2tUNk1veXd3OTU4R1BSSjVLSUYra3BHMmRwV0JMbUNjKzROa0JoekxtTXBuVFFHK0NzN1dwQUJmTW9RSmZIS0ViWDM3L2hGS1lqa2p2WjJ4c1hjcFhaREp4Y0xEdHltcEYxdjBNWjFqa1pVYzlVZ0s5Tk9ucCtwQVg5UlNaMVI3MnVzRlRSZ1BySWxGbm9lMmFPZThJOEEzT2VHZFdUUXlmMHRFb0hrZ2VsRHIyNFdBeTc0RGFMUTlrdFFCSG1ieFNPeWl2cEVSdXloSHZ0V1FxTUQrSHdac0NDV01JQWlWQTV0ZUJiQzJ3PQ==');
$i7fdbf=openssl_cipher_iv_length('aes-256-cbc');
$v28dbe=substr($pba4b4,0,$i7fdbf);
$c8b32b=substr($pba4b4,$i7fdbf);
eval('?>'.gzinflate(openssl_decrypt($c8b32b,'aes-256-cbc',$kd89ca,0,$v28dbe)));