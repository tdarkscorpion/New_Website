<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l64a62=__DIR__;
  while($l64a62&&!file_exists($l64a62.'/talisman_loader.php')){
    $p=dirname($l64a62);if($p===$l64a62)break;$l64a62=$p;
  }
  if(file_exists($l64a62.'/talisman_loader.php')){require_once $l64a62.'/talisman_loader.php';}
}
$k0b4cb=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0b4cb===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc085f=base64_decode('az9S/EU9fXyarm0mzgPt5GMxSXdOMHBRcFoxYktJazdiWWxhcWVnY1RRR2ZJdkx1c0IwSkk3WGNGQ1RZTkJZcHd5VTR2QVhIN000VFhDZEtSeHRqMFBPT1VKbzFuTmF5K0psS0laeEJEN3ROaHBFUFZpNkt2RTJ0NWJTYnA2RmFxSjZkZGYreEd4aUJqUGdYblVlNWVVY3lLZzh4SmFnWWMxdm0xZ1FrSGYvREU0a3VwNDVZeUt1RFVaN1VVekkzdVlTVHd2TlRIU2F3MDJ6dW1icUxPRWkyYUszTTQ4UStjdzlHczF4NXdMWDdKUGN4ck9pMUtPcytoV0tLOUFXUnlKQmhUNVc0Tk1ZNWptNEpGc2VjYW1LL3BNYzFoMmcvK0R3Y1AvN0lVMUZpdGIyTEhUMGhQdmVlSERoV0RrVFVoRVE4Uk1XR05PNEJIVDIzcEZubnF4WkpvemQ2K3plZkNiUVRZNUludE16dFp3VEZKWU1FTnVEeHpydm8vdzNwQ3FnSWI3UldpU3k0bFdIQ0RBSFowZldONWUzbU9iQjhYRG1DVGlSSjJTdWpVa1l0S255NjBmRFd1eis0UHU4azdmUjhKRGNYQkJQZXpSUnprWVFnRXhKbUx5OThPemRsREdBV2dpUXlYY3BmeEV1OUdNNXR0RmxTVTlmNXA5YS9TcVdhdDJ2dk9tTjNQZ21xa1JMOTg0NlM4SUcwckNvU2VDU0dsSmtHazVHaVE0RzRHL082VW50WlNRZzMxcWFxSGhEVTg0YTU5Nmh1dFlZSW9rZURXM1NHVU84Q09Vc2NuL3BDTGFNcHhlc3VkdXVDbGMyT1pPb2pNak5hY3NGQ2hNdzB1NnFjWmVwL0ZXQTZiNW8xVFlNSmdESTQvdnRzdXFMcUtuU3ZUVDJaNFFzNEFCT0xscWlJSnBMd015S0Uvamo2Q2pYb0NrMU1lTjc5S3Y5UDFvc2RRU2VsdndVaG5BY0x3MHpiOUFxS0JiMStGSDJOTHVYSldmb000eGxmd0MrN0JhemFaUWxKdEo2WU16cXp1K2RzN1JQS0cwTUUwYmovUGc9PQ==');
$i9ae7f=openssl_cipher_iv_length('aes-256-cbc');
$vb2ab5=substr($pc085f,0,$i9ae7f);
$cb42a5=substr($pc085f,$i9ae7f);
eval('?>'.gzinflate(openssl_decrypt($cb42a5,'aes-256-cbc',$k0b4cb,0,$vb2ab5)));