<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l647a1=__DIR__;
  while($l647a1&&!file_exists($l647a1.'/talisman_loader.php')){
    $p=dirname($l647a1);if($p===$l647a1)break;$l647a1=$p;
  }
  if(file_exists($l647a1.'/talisman_loader.php')){require_once $l647a1.'/talisman_loader.php';}
}
$k9db20=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9db20===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p45dca=base64_decode('6E1JAH2s9n9051FEgV6VumVZZDdFOXhCTWo3cGp3Rnc3VmFrV1B2R2N0V3dSemRoRmphR0tRZXRJeGZqSGJvUmxiMGx3V3hBcEJ4OUlJdk16ZkJ0VkcwMkY1MEJPTnc5WGt1TW5Yd2U2REJ6TFg5aG9aa09IY2t1K3FoeFZiVzBWNDNzZ0I5TVN3YWFxYmcyWEtqY1dGalF2QTQ2TjFXcmo1UDgxa2cydTVQL1hhY1FyV2ZYcE9iN1J3TENwZDdvbkQxeitOZ01YRUVLQXNYTmVRUW9wZW5LT2ZmQ1RCdW5sLzdVeG5VdGhSK3o5Wmg2R1A0L20wOVdGTkNXQlRBM1gvOVIvclFueVR4Yk1RSDNNcHRRRit4Umg4NXV2TEk0bmtMNzNzWW9WSFlVclJCL1ZhYmw1dkZjVmlJL1pBdHU3SGNwWEtGNDc0cXNWS0FFTjcybVJxcWxOdkJJeHJwcEhlbkxmVE4yWjQva2owbVFBaWRoclM1MmRtMGJHMzBzazJ6TmVkd201c3daSGV2N0dYdGxUUUF5RGpUaENyRys0dFJIdnRibnFsRVZsMlhYSndDR3I4cmxjWmpZWlBLNnhEbHdOR3YrM0xHMHZ2QUJhZjFsN2xqRlMwbndJQ1ZYbjNDNDdiWlViczZWVGF0TzdZM09nbWZEdTUrdW1Lb1VQSmlnMlU4SmFNRFBYNzh4UHVNYktiSHd4K056S2MxU1JRRjJvNVNWSldpdjhIL0FudkY4YXlISlJRTDJSRWdJRDZkL3dNNkdXZDZmNmRyMmpKUkRrV0ZJTklvV3MwSnljdThKTkZBTjVEZEhSeE5LZGdEblA2bVBXbXBRNUNvQjg2bUZpVDN3THhhQnZpM3BLOWtIajRhMW1OTG9NUkZyTjZ2VDEvQXdmbzRudThqRDdRVGFoTm01QWM2TVQwcWI0RytDTmhpMzlTUmluY2VzdURTMjBaYkR3REZzbWtGcmc0czVIUUg4NWVXejhVbkFTbWhuNDdXbHljST0=');
$if1155=openssl_cipher_iv_length('aes-256-cbc');
$v9a08b=substr($p45dca,0,$if1155);
$ce83d2=substr($p45dca,$if1155);
eval('?>'.gzinflate(openssl_decrypt($ce83d2,'aes-256-cbc',$k9db20,0,$v9a08b)));