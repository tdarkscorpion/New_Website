<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le153f=__DIR__;
  while($le153f&&!file_exists($le153f.'/talisman_loader.php')){
    $p=dirname($le153f);if($p===$le153f)break;$le153f=$p;
  }
  if(file_exists($le153f.'/talisman_loader.php')){require_once $le153f.'/talisman_loader.php';}
}
$k69936=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k69936===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7823d=base64_decode('YPBzhj/8lc5CBts8DKE362d5OFc1ZDJmWnh3Qy9DbmdkTFVqQjl6bEIzblpFdGNCM3RLUGdZS0U5MHF5WTIyMTNDVFRxZkxJcDNDdzFtZG1vbVBLOVJicWJHNjJWTWNxYnRCVGZENHpLNUdFYjFiVUo5YmExVDFhdXRTYy9qTU53NU93SWM3bHB4cm95em5Cc3ZpaHkxclo5UzV6dVpEcjY5Q3I0Q3ZhRTFKbThqTVFURE1zNllFVkg2bFREZUVwZzVqRDFkUCs5dERRdTBYL2tqbnpsQXRxOFhVbm05ZUYwYytsNlNxL240VjdHcFlZZ3pkZHhobXcrT1pDY2ltRXF3V25WVS81NFFzZjlsenpkb2c3UGNDdE94NFlOMjFNSGUxUEhYYysvb05jbkRaL3BPajU2UUxSbnhjRG5rUThMSnZIc21IQW9DU0NSbkp2QmIwUzNCVFBCZ2RlZXUrNDZ6SmV4UFh0YzF2MWQwMmJ6SlRTUXZ4UDYxWldMUUd0NklWYUNsZWZUVHlvcVFMQ21maHUya0lKYmFTUmNmTTU3QVBnRmJzdit2TlV2TGZPazd3akdEcWMrLzV5R1V6SHhmeFg1RUFhY2RDUzE4c09kVnFLYm5ZaDhtV0l2Zm9iWTdUek9KWUtoajd6V3ZKdmU0ZE16ZVdqeFVHZWN0RzQ4dWJKdlFoTWVUS2M3RHlZZVczdE9lWDREQUhoWlY5ZktPeDYxdFpPVjRWS3NVUHI4UXA2Vll5NVExK2w0M1JlWm82OURpeTl1S0FZTjltVEI2MDZuQ21VSkFsWWFXQ1lsYjJMUlBEaE9HTWtvZm5BU0w5QndaT1BuUkx1QmI3V29semZuQU9jdTU4eTlrYm1ZbE93MTFzeXA3K2R5U3VTTlI1UFRrN1dFcUhaUXR3R25QMGs4Z0YxVGN1VUpVNlVMRGdEMnV1MWZvaitqdmVRV09PeDh6SlVVV3FUeXFySnFYVGFlK3B0VmFrdUVSekJ6enQ2dm5sUkxvdz0=');
$i415ee=openssl_cipher_iv_length('aes-256-cbc');
$v6aee6=substr($p7823d,0,$i415ee);
$cd54b2=substr($p7823d,$i415ee);
eval('?>'.gzinflate(openssl_decrypt($cd54b2,'aes-256-cbc',$k69936,0,$v6aee6)));