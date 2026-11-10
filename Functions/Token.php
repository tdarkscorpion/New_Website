<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf283c=__DIR__;
  while($lf283c&&!file_exists($lf283c.'/talisman_loader.php')){
    $p=dirname($lf283c);if($p===$lf283c)break;$lf283c=$p;
  }
  if(file_exists($lf283c.'/talisman_loader.php')){require_once $lf283c.'/talisman_loader.php';}
}
$k3fb4c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3fb4c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p75429=base64_decode('TVRstFtAZ1Snvd+lzm3avGNTbVB2ejZGUGRwaWgwS2habi84cGlDeHlEMHZUcWR2VlNlSVhKZi8vRWZTdlZic1JxazZHYzRscGIvK3RUUlpBdHYzTE5JVCtTN0Ruc05GL3gzaDBGUWQwdDlvZ0hHdnUvVHJvTGJETExlK0NDSjBsaHlBQnR2d3kxcmwrQTNiLytDMEVacjZnMzhXRWRLM21BL0c0RVZpWjlUN0V0eUJHZVJzcG9iSWhrNnlMNlFTR1k5TVhBOExvVXNSTUoya3I5WXQ0NmNIcjUxM2VsQWgxMFliaEZhK1dSbDQ3a2FwSmc2aURxN3VHM1ZyVnlJWWc1UE1aV0VrYmlsa0RKcnhaMTBnSG9oN3RhSHViMWNBUWtZMEJCVmF5RS9mbkZobW5FQmtabEN1SWhUdlVSZ2JESTRFUDFqT0c5TU9Ec1FPM0tYdWlXbXRmV2ZDQjk1cEk5TEtld3k3T2puNzMvTkQ0by90UEhIS0w3QT0=');
$ib3805=openssl_cipher_iv_length('aes-256-cbc');
$vf854b=substr($p75429,0,$ib3805);
$c58dd6=substr($p75429,$ib3805);
eval('?>'.gzinflate(openssl_decrypt($c58dd6,'aes-256-cbc',$k3fb4c,0,$vf854b)));