<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le608b=__DIR__;
  while($le608b&&!file_exists($le608b.'/talisman_loader.php')){
    $p=dirname($le608b);if($p===$le608b)break;$le608b=$p;
  }
  if(file_exists($le608b.'/talisman_loader.php')){require_once $le608b.'/talisman_loader.php';}
}
$kf1778=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf1778===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa1873=base64_decode('LFXDtS3rK4qB/0icwoyDyFpsUVp4T3EybUMxYlM5TkgzM0pWK1FHeHN5aGZjMTNiRm4zbmo1c2hyU2E2SHZlQ3VCWFN3RkRiTlZobEU2eUExR2pGQzRxMDRIdUFkWDV1K29rNk1WVjlVVEhha2EwRTdUY1NKT1dJS1VBQXFKZDJteHh5ekJkZ3crMHVGUU94eERmcmhoWUlxRDFjU3UzM2NvSk84dm1naGMyUTc1UGZ5WGtndU85RFUvc3Q3ZTc5UWRna0tTS0kzcGRuckl6K2NRenFucVd2cE5KeFArazdzTWNRTnNYTHdSMW53WW5YODVIYnlYMEJ4T3dRUW1QNTdXdmJOTW1DRmdnUUIwTFNqL2ZJVDVScnprcHg0S2dVOVQzZi82eWMwWFc2RGcyWElLb2RLanllRmdRPQ==');
$i371fc=openssl_cipher_iv_length('aes-256-cbc');
$v77b28=substr($pa1873,0,$i371fc);
$c92166=substr($pa1873,$i371fc);
eval('?>'.gzinflate(openssl_decrypt($c92166,'aes-256-cbc',$kf1778,0,$v77b28)));