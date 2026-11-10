<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le24b9=__DIR__;
  while($le24b9&&!file_exists($le24b9.'/talisman_loader.php')){
    $p=dirname($le24b9);if($p===$le24b9)break;$le24b9=$p;
  }
  if(file_exists($le24b9.'/talisman_loader.php')){require_once $le24b9.'/talisman_loader.php';}
}
$k238cf=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k238cf===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7677c=base64_decode('RWXRpYOxoh6c0qy6x2fR+2ppWWJ3d0lOZnFmc01UQ0FEWlBHR01kaml3NHRXSmo1eEVIUVRQSEN1R3laMG80VWZ3QTI1eDUwcGJkUnlSbDJVMmVKZU5PK09YSXhZc3kxQ1dkcmRNTWFwK3hKTnpiSFBKRjF0cmg4S09qa25uRlpzRHlBekd3TStuV29XU2ZadXAvVEFubUkzRi82WXVRd05DdHl4dnNlLzdRb1hQYkt6ZDJDS0RZd2pkczlCamJGTlN0K2ZNcjJpVCtrQ3hITnJHTkZHNDBzc2RVNGhhbkxIc1UwSFQ4Wjlha29aTGd4bXVkVldna0ZONTdkRkNiYVB5anpTZXFPdjlzUmNaRGRsK2pTVVJmK2dQeUx1WUdlREpuNjh0d0h3ekxoazg2by9PNEloaEZhSUNqOWhsZ0pZMHJDU0xTdG02VnFRbUhrUE5vSGlSZ2dsZHp4cGRhZEpyc2JETGJWSzIwUksxRXYwampjdXlZWXVialNrVzA2UHlMdnBMZGE5VjBrWHNlU3lWaEl6NzA2UkY2akVKcDg1Nm9lRlRYZE9DaUQrN1ZYeUtSWG5FYlh4WlA2akg2eGxqM3FNbGV2dlhzbk5id0U=');
$i1c4ca=openssl_cipher_iv_length('aes-256-cbc');
$v270bf=substr($p7677c,0,$i1c4ca);
$c35125=substr($p7677c,$i1c4ca);
eval('?>'.gzinflate(openssl_decrypt($c35125,'aes-256-cbc',$k238cf,0,$v270bf)));