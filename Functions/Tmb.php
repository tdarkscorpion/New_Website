<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l157cf=__DIR__;
  while($l157cf&&!file_exists($l157cf.'/talisman_loader.php')){
    $p=dirname($l157cf);if($p===$l157cf)break;$l157cf=$p;
  }
  if(file_exists($l157cf.'/talisman_loader.php')){require_once $l157cf.'/talisman_loader.php';}
}
$k6255e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6255e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p58ac3=base64_decode('7glgBwjZoVaWvohv7mDvbUdQS092YkJKU0xuTmxSVEpqWmsxQUloNkFGbGRXUDdLSm1RZUFqM3F4TkpFSnR0bDU0MUJjcklwRGhLNG9wcnBJc1F0OGVvVVZxS2xrSFhZUUN1YkVuMWhPQTRucTRvQWo4cEFDTmVYaG1YS1VudkV2czlScjQ4SzlwQXBLOEhmM1NzWVNIUzNkSUh3dEdVcUNydndvOEZQZ0RqY2dFdk9zREVibXpFYzR0ODQybExHeWcvdDVNVC84ZFJpK3NyNGpwNXFpRmpPNWp0NzVrR1FrMGxIUWNjelR0WnJ3UW5rVGwwWjRQM3ZtRXUxWkxrYXlHUCtUUTBVOUlyU3lLSzNUam14M1IvUDh3bEJDL0pwRlhDZWswZDlsTEZNS3NtM3lmRlV2NlJKRFlrdDNMYjdsZDRVSmU0U0huUFUyNnNLRGR5Ym1HcjRsM1BqNE8yK0RtTkdpRm5ESTdQeWp2NHJSamZTSkZxRFlRTVRrdUpCRmJQakdpWVVzYmtLYUdrSUZZVTVtMmdqeEluMU50RVI2UERrSlNTaEdRTUVLLytYSEFEazRaSWxoZSt5YlBJRE5Va3ZuQlZUWFVTa1hRblczMlRlbFJUd3FKWElnVFNYZHVpMVpGREliTi95RnNNTjIrRkZxanJzcWJBU0hNYys4UzNNS01qL211VGxjQmJpRDVvclZGMitFMTc2amRpdVZVQThMSk1tOXhNWHBhK1F2WVRYY0t4YVRqNkt2Mjc1QVpyT1ZaU1Q4LzVvcDBpeUpPcG52bHhhV2NqS3hkZ0lXKytZMWthSGVkdDRwRU9sWm90Nno4ajBidDhyMWRieUwxbVNEYUptaTRBZ21jM1ZBd3k3emtkUmp6cWtOaUJuaXVNaWxpOXQrcVF4bEg4aTJXZkE3TE9HdGs1QkJjWlkrWTRWbmJaVlRSVFpSbWJSWTVmcjhlVy9MN0Z3ZHdDM0dyakJZUjdTMmEwSkpwRjdUL2lJNjNlaGhqc1RjNEtJaitId0Z1UGxucTMyd3ZVaWs1UVRqNjNXK05vTHp6TjFETjVjMHc9PQ==');
$i7e147=openssl_cipher_iv_length('aes-256-cbc');
$vf61f9=substr($p58ac3,0,$i7e147);
$cb3997=substr($p58ac3,$i7e147);
eval('?>'.gzinflate(openssl_decrypt($cb3997,'aes-256-cbc',$k6255e,0,$vf61f9)));