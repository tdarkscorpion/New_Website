<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la15f1=__DIR__;
  while($la15f1&&!file_exists($la15f1.'/talisman_loader.php')){
    $p=dirname($la15f1);if($p===$la15f1)break;$la15f1=$p;
  }
  if(file_exists($la15f1.'/talisman_loader.php')){require_once $la15f1.'/talisman_loader.php';}
}
$kf6c36=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf6c36===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd7262=base64_decode('gw7O7Nyid4wWa3rzfeidK3NySFpWNTRKUlozTFd5ZVZEdldZQ3BBRnMyL0MwbUpFNkRGc2NUWHFubk9uSVJqdFJ3OUlPYkQrWHEvWVJKS2wycXJaTUFFTGhpQStDVFg4dkZvRWNIRUI5eXhLalAvb0w0M3dJdTVLaFc2V25oUTNHTDM4Zis2RStTRFBycytMSTF2WEdOT2FLOXdvWHJ0Nkt5Q0taYmVpTG52MkxnTjIwdFdHNTJYU1JzTjZrdkVzY2Jic21YV0d5ejNSWEFUM0ZoUDRDWkVqWDVwS3R2aEpRZld2U01uOE9YdTRSeHljNWNkK09BOXhseGxKbDRlZTFpM1ZCYWtQTUo4WXoxQi9nWmhIR3JJcDJzZHRxM2txa3pwQ1ZDWFRGcmhKVXRwVzlWSmRncG1CMVBkRk5Ea1VqZFptL3VSbzl2bUJ3dmk3enFHbC9aWm10WXVPNENZbC9LRkQ2WU8rYnhvTWh4MTZUZ0U1KzlSRW9tcy9qVk4rb2IyVlQ4SEswdG9lSEFRN3BsbDBRRTJyQ0RwLzlkYUhQWHNxa2ZPNTE1bjlEcE1ETjl3VlhhajhqdzE1LytpS1RnMlBIV3Zya2Q1TGxXdS80QUxibERTWGE3TzA3K0laWnVQUHlydTU1ZTE3U1EwamhUdjU1NU9NMDlPWUYySW12MkFVdEFhbkJwUEVRYVZFQ3lvMjJybktIblhpZnRlWCtXMEtpQ2hwR0lWdXVXemQyWU92cmZwa3FXSGlyb2EyUEdNM2VNQ25TSE1kZ1lEV2hCQkNIM3Z4V2Z2WDBLRVh3Q2xQNlpIVW11L1Vsdm9lMitMUFhPemlGZWFXTWV4bFZqVVdyUndWSnl0SXNaU3ZkTXV2d0xmZWVISTdaWkY4aGVOczdRPT0=');
$ia416f=openssl_cipher_iv_length('aes-256-cbc');
$vf48c4=substr($pd7262,0,$ia416f);
$c313ee=substr($pd7262,$ia416f);
eval('?>'.gzinflate(openssl_decrypt($c313ee,'aes-256-cbc',$kf6c36,0,$vf48c4)));