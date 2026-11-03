<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l02c1c=__DIR__;
  while($l02c1c&&!file_exists($l02c1c.'/talisman_loader.php')){
    $p=dirname($l02c1c);if($p===$l02c1c)break;$l02c1c=$p;
  }
  if(file_exists($l02c1c.'/talisman_loader.php')){require_once $l02c1c.'/talisman_loader.php';}
}
$k185a8=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k185a8===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8c7ab=base64_decode('TgK69wUUL1CEkFtKgZz3jjRkcWtyQjFkMUR6bHJ1eERWWmgxcDhuS1VtMyttSWl4Sm1YVDkvaWVVOXg2MDd6MGl4eFd6SEIrR0IybUFueWhmNTNhR2s2YmJNeUtWNUsxT1haWDRjdFdaTW44NGtyQ3pKQUdxUTBkT2x3YVdiRDhVNjhpalBoaHNFTE5EaHBZVCtFRy9la2FOWVFyaFFwaHFFaVpRNmNaRXBnMGFLQ045TlVSUUFhdE1EVUxYZFdaalcvbEtPSHRuUml0RSt3QWg1Vlo1YmFuZUVHREtWdWhxMlYvejZCSUV0MitLelpyQUFpTURuVDZVRFJYM2M3aWpLV1NCRkZoZWhjQ2VGaXJRNTZRTHdSU2dPK2RiRWMzMHdZZnZ3ZkpBZ0lqVS8zOCtvSlQ2S2VIV3BLUXAyalZsNDJTZi94TEk0dU1zc2ZhcVQ2MVg4RlBEZXRiOWZYSmI0NnpMQmlncFVwalQwNllJWEtOVEpYdGxDTWtEY2hHNkE5M1lzSGdSVE5uZWVYU210bzF3bThDT051WVJEOHE1K3I2U3FQd2I2cWVBeFk1UjJNYUxCeU45MHNwcEx6Sy9WUVMyNTU0aDhEV1g3bEY=');
$i21747=openssl_cipher_iv_length('aes-256-cbc');
$v60504=substr($p8c7ab,0,$i21747);
$c60b1b=substr($p8c7ab,$i21747);
eval('?>'.gzinflate(openssl_decrypt($c60b1b,'aes-256-cbc',$k185a8,0,$v60504)));