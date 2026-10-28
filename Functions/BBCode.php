<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l953fd=__DIR__;
  while($l953fd&&!file_exists($l953fd.'/talisman_loader.php')){
    $p=dirname($l953fd);if($p===$l953fd)break;$l953fd=$p;
  }
  if(file_exists($l953fd.'/talisman_loader.php')){require_once $l953fd.'/talisman_loader.php';}
}
$k4f38f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4f38f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p2ff30=base64_decode('Icln15q0Xsq5NOD82swJf3Btd0tHTFhJaE1sL1Q5RTBaQU40OVJmRTlOWFlsR1g0Z0lIdmRLR1k4empyenFNRmJHS2R1djQxKzJaQXYwMEF5Wit5RTY0RGE2a044ZTVsSUMvSUFrWHArcTZ6VW94QTVadUJXbGRwRGNMZXVUMGdLb3RYckNZeldhVG1BQWxsdmEyNmpMcC9CZlMxUkEyWkdXZU92OWYwaHdJM0dZcEFEK2JwcEdQcUFHMTdyMXBhK052S0dwTE5zZytSZ2YxVGk5VHQvVzBZR2dTYTJtNXA3c2hTQis3RENHdFY3MnMvd1JRRXNJb0RqTFVqakpKRGc0NUIyRkF0RWdLUEZUTmRISGo0Z2s0VFJvODRtcnVERXIvRjlDdjA5RXA1QUNCNkVnbmZjaGxLMy8vN0ZRRFNTQ0tKWHM2UHRIVXllK241');
$i9420d=openssl_cipher_iv_length('aes-256-cbc');
$vbf239=substr($p2ff30,0,$i9420d);
$ca8f7e=substr($p2ff30,$i9420d);
eval('?>'.gzinflate(openssl_decrypt($ca8f7e,'aes-256-cbc',$k4f38f,0,$vbf239)));