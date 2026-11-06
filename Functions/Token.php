<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la7fd4=__DIR__;
  while($la7fd4&&!file_exists($la7fd4.'/talisman_loader.php')){
    $p=dirname($la7fd4);if($p===$la7fd4)break;$la7fd4=$p;
  }
  if(file_exists($la7fd4.'/talisman_loader.php')){require_once $la7fd4.'/talisman_loader.php';}
}
$k2def5=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2def5===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$paa11f=base64_decode('o1FK44d7MSwYyqQmLO61zmIwR2tOYW82Nk1CZTlvTHFmSnJqRVU1aXhyYjF4d2NEK2tJVTgrZEdaRzNBeVBLbFFVVUdWZlpVSlVqcVBhNVIvbGptMlJiYmcwRnlzMDhqbUk2QkVrbzlMVEtONVlyOUpZcHBPR3BnMk9XS1FmUGVRVTNYM2p3TTFWdXR0OFI3TFo3T2R0ZWVpc2YweCthSFFVWmFWYkJkR3RIc1pGZ3FvMDVsYnFVWGM3ejM4bXNRSnhUWTRVcFh5eFNDUlIvL0QwWm94K2FRYW0yK0NKU0hmZ1ZuTXNnNGNNaVRmbDYvYlVxK1d4NHBXU3ZWUHgyZjFYTFZXZkNYR0lzRTRVaVlMYWFEZW0zSG9vOHpvVkVTNzNONlJRQ1o1WnYvQjc0WGN6czAvUjZPSnNyTFI3Z0l5MTJ4QWpMU09kM0lMYlZGU3ZkL1J1WElyM3E1bUcyTURVZWNBc3pNajE5amdaWUVzMlBONi9WUkhhYz0=');
$iec862=openssl_cipher_iv_length('aes-256-cbc');
$v7e921=substr($paa11f,0,$iec862);
$c823f2=substr($paa11f,$iec862);
eval('?>'.gzinflate(openssl_decrypt($c823f2,'aes-256-cbc',$k2def5,0,$v7e921)));