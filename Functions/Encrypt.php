<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2a56f=__DIR__;
  while($l2a56f&&!file_exists($l2a56f.'/talisman_loader.php')){
    $p=dirname($l2a56f);if($p===$l2a56f)break;$l2a56f=$p;
  }
  if(file_exists($l2a56f.'/talisman_loader.php')){require_once $l2a56f.'/talisman_loader.php';}
}
$k9eeb9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9eeb9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pce92b=base64_decode('UvEZ6fxWXV2x1E3Yh1OQ2HkwUHRGM0twSzRLZmpFTmR3RkZmaFJheExBTXVVeDA2czdZZG9PTWExVDluaUhhMUgvMXRnT2xuaDN3RlNFQ2NCTmxGYW5UdG42aVRVZEJLNmc5V0Ivc3JmNTlQWTdNazNsMUs2bzZRYnp6dnhCY2c3OTdGKzFUU0x4Um1xL1E1V2kwVWdDU3NvY1UwckxLMlFQbUhER2R3amVGeFFrNFlDRmU1SmZKV2NuOWFydG9LbDFXMlRCNTlKeHBTMW1ySnRwQlRuZnl2cEJTMVVhd0JaM085WTlyNnFjdlovOW5iSTNRUFZhQlVRdWV5WkQ0K0RyWEcxbUlQbklkNENLTXBqa21qeklNSzBESkZJMXZlWVl2dWhIak51em5XM0FCd3oyOGZqMHhKMDdIRCtPK1VIZHZZWXVEVExNckhHUW5sR2RyU1FibDFjc2NyVUphcTQ4REJTanhwZUQ2eTFJcUg4d05hMStJdWdLOE5iN0lvQmFSNldPc0w0S3EzZEVHeU1oY05tbHd6RGFuV1k1ZE9kNjlsQURYeXFZQjc0bHMwZUVFVTcxL2d5Q3N3UnkrdkgxV21hK3oxekh4ZmhyeTU=');
$idf4b2=openssl_cipher_iv_length('aes-256-cbc');
$v74362=substr($pce92b,0,$idf4b2);
$cc1b89=substr($pce92b,$idf4b2);
eval('?>'.gzinflate(openssl_decrypt($cc1b89,'aes-256-cbc',$k9eeb9,0,$v74362)));