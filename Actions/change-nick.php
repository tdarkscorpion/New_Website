<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l57162=__DIR__;
  while($l57162&&!file_exists($l57162.'/talisman_loader.php')){
    $p=dirname($l57162);if($p===$l57162)break;$l57162=$p;
  }
  if(file_exists($l57162.'/talisman_loader.php')){require_once $l57162.'/talisman_loader.php';}
}
$k00ba5=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k00ba5===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p966ee=base64_decode('W8hC1r9fsK3YqA53WBVoflZ1dE9IV1VHcXI1bklFdU9wQk9NMFNRZjVhbkJ1NUFNQUgzTU15eFBaRFdFOEozUzV6VWtMNVFhZG9neWoxa3FHZnlYWTFNYS94Z3JtOVQ2TzgzT1djbDlCQStlQ3laSzNZMEl0R1hLbmtzZlcxdEFGNnI5OGttZW9zMWlWa2ZuV2pmQlcwVHlZb2hYVmJuWTFJV3hVcmF4Yms3NURCU1ZqWitqbllabzkvK2xpc0NJOTNkSjJ2dWRLYm9mdzV0REJ3NS9VNGZpcHM1Y3A5Z2RGNGwwUlVab0FzZ0xxNGU1TlZUallqb1ZheG5nbWpXdGhZZE5sN0NZTnhJMHkxOWY3K2loNUN4WW83cWZqS0oram1ld3FWdUNpWDdDL3BKeFczZmJnT2k0SUpxWGNOQkNPRkpYSHpFeDdOUmtiK1BSMkt0NVFuNkpGN3VHWXpYOXlhTFRTOFkvZXQrRkFLeTd0UWt3ZjRiSExxZ3E3ZC9LOElsR2RNbnR1RDhWTWR5YjMzb2hWNnFXN2ZGRTVZUXZ4YmJIRnBUQzM0UXR0OE5sVkpUZ2trWGFkb2tQOExuK1o2RndUTkpoR0d1ZFdBTGFYQXhlRG5XQ0hDUjZKd2lNUXY5SUo3K1kxejNwK00reDFaS3ZmbDcreCtKNzRvMnluR0pBaHgrWEdYeExMcmVNamhDUE9GSmNiOGNoSmV4eXd5Mi9tN2FWK2xleXZzTnFTMVNWa1dWanNkZTFYblpYSkJIeUEwaVZKbGM2ZjBqd1NQRUhhekl4a1lmZWt2aVRpeVljeW5aYnFtQ2I0NlI0NldMaGZGRXQ1RVEyZmxNcWJJODBjVm8wS3MwdDZSV3h6Y0tpN1cyQU9YR2NoUDFXd0ExNGNVZ0NmOEVYK1ZOZWMrY2VGNkZYd0V0U3E5RWt4RWtoWVJod1E0VGFCcjJOL3p0amhqa2V1RG81VURGaGt2TFhOb3ZyVlp6ZDhXbUdtOFNSVFF1NzVSRT0=');
$if3116=openssl_cipher_iv_length('aes-256-cbc');
$vdb186=substr($p966ee,0,$if3116);
$c71df7=substr($p966ee,$if3116);
eval('?>'.gzinflate(openssl_decrypt($c71df7,'aes-256-cbc',$k00ba5,0,$vdb186)));