<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf8310=__DIR__;
  while($lf8310&&!file_exists($lf8310.'/talisman_loader.php')){
    $p=dirname($lf8310);if($p===$lf8310)break;$lf8310=$p;
  }
  if(file_exists($lf8310.'/talisman_loader.php')){require_once $lf8310.'/talisman_loader.php';}
}
$k97e10=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k97e10===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p82f42=base64_decode('bLJ2Ehwn96+b9w+psyaSbHVSNjYzZWpkMk1oME5QTThFL2pERUcyQmwwaUM5TkNvTUF1SVJPc0tIQm1Lc2kzY1pVQjRBL0FsWHVoV0pFNFprZDFwYzVyTXY0MW5qcVBVNXc0cThNOWQ5NHJrMlVQL0Rid3BaNi91U3o4WHBsRjIvTThBanVaSldFczFaN1dhaFo0Vit1SjdpODZpcm83K2FMemxRNjhiZkJyc0NUdFVIakU3S2dnSGhtQk04RGZNUWQxbVFHK3cxTXVTcXpWcDJyYUEzcTVwZlVETFV1S3F4bkZaaE1wRXp4WTRYZmVHUzFzckM0bVlndTJQUy9NYWlaOXNGT0V2aXIxQ3RGN3BRVnFKQk9YcHh1UE1NWmhteDRScFUxdFdVcEZHZ0w0blJ2Y0tTYXN5UkFFaVV4WklSbkpzczV6S0NVallVWk80bVdrTURNMjIyZHhsUW1WVis0a3YvMzNSSDgydEg2Y2EwaWUzWnVCVDZzWHNaWDhUdTQ3SVdSa2J2ZytOajVJWVI3ZnhMR1AwQ2ZmNTZqT1Nja1NjOW0zVmFzb3lyVDFPZ1NUbFlVK203SzIvZ1g2SjVVbG5JdDhVZUpZWS9mV0FZeUh1OTNza293Z3NoSmpyR3M2c2pBS1RadzhyT0ZxRkVBWUhldXZ3ZndvcURzbWtFRmFsTUlVcUp6QWNPRUl2Mm5HdzhUVnZZbmFYUGhYK21HRzgxeTV1VWNNZDIzTytoRDlyaTA5S2x4OWNEWElSNXZoY1QrZU1LUXV4OENuMXdpRVFYTmE3RElzbittSE90MUE2ZXFuL3RVVUJTTURPVVpqdVRMU0w0amVrQUs0L2dIS2RLQ2ZuUVZFazN4K2IvK1lHakZSUXppYW5FK0hqMzU2bnNoSmRhYllxZ3ZSeElxM0diTjdNdjBua0lVQk82emdseURXZ09FcVk2aUh5VmlLTm5CZGhKNW83UFdzT01ib0VNWngxN2ZzM3l3bnAwY1Z0dDdSVUozY09UeVFKZGF2T2FrU1A5SGxJMWRQWEhoZXhyaEx2Vzc2UVhDaWcyNThhS094UVo2NERFVC9nbGFzUWJiTXozcVAyOHRXQlJUM01oaHQyT1NpQ2pBL2Y=');
$ie0f11=openssl_cipher_iv_length('aes-256-cbc');
$v66519=substr($p82f42,0,$ie0f11);
$cad79f=substr($p82f42,$ie0f11);
eval('?>'.gzinflate(openssl_decrypt($cad79f,'aes-256-cbc',$k97e10,0,$v66519)));