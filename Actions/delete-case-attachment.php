<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7d25f=__DIR__;
  while($l7d25f&&!file_exists($l7d25f.'/talisman_loader.php')){
    $p=dirname($l7d25f);if($p===$l7d25f)break;$l7d25f=$p;
  }
  if(file_exists($l7d25f.'/talisman_loader.php')){require_once $l7d25f.'/talisman_loader.php';}
}
$k22d1d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k22d1d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb09cd=base64_decode('hBd2ifezBLTh2R72t2KjOFEvdmpmeW1zeFFUN0JSVmt6U05SZDFZZDNSWklSMitsY09tYWwzZk9VOWVxa1M0TkJUTmkwUXo1Ri9QRG1jUkhRTHQzcExSOTNyNmlIVldJdU1EYW1pclF0M1NReFFwNDBoOHRvZFplYmNVam01S3Q3dUJNRm5obUs5WjJWR3NvYWJ5RVRydFhoWWhqWDF1YzBnV1V6Qi9NMWZ1VldCM2hoRU9uekFPaW5DUlF4LzkyNFUzNENFUzR3bU13c1llMXNoMFNuL1RDdVR0V0tKdmpEK0p6bTN2MUluRm82cE8wTlRkbmJVRDRnSWxoazhGcmhyb0lZYm1kTEI1SHlJV3Zzd00ydTZDVTVqQ1VGc0hqamhUZm9XN0orY2FUZUV1ZE4zVmp1dzNMb0lCUjB3VytDZ2FQcDYrSjgzS3N1dTIx');
$ia570d=openssl_cipher_iv_length('aes-256-cbc');
$v2f279=substr($pb09cd,0,$ia570d);
$cdf31f=substr($pb09cd,$ia570d);
eval('?>'.gzinflate(openssl_decrypt($cdf31f,'aes-256-cbc',$k22d1d,0,$v2f279)));