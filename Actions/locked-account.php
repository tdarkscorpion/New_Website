<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbd714=__DIR__;
  while($lbd714&&!file_exists($lbd714.'/talisman_loader.php')){
    $p=dirname($lbd714);if($p===$lbd714)break;$lbd714=$p;
  }
  if(file_exists($lbd714.'/talisman_loader.php')){require_once $lbd714.'/talisman_loader.php';}
}
$k2eb9f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2eb9f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc0ddc=base64_decode('Mqde+XPRtDgXumZG4lVXZVFaVXhOYmN3OW11ckRYTDI4WFNMblBwQTFFc00xSjRjelo1UWVZY2pUTVUzajA4bGVEdjN5aEJJQzJSR29hTk4rZk9QRHJPNXhXVXdLUFdlM0k3eDJ4UTBhakpDMSs2WDRhckhmcW9nTk1TUEtYdExlWWhRTVplaW1uaWIxcGRnSms4L1FaRTFWTUdkWDFuVm9CUXpWUHNxNS92Y1RqRjdvVk1WVmY3bmRFdThGeGJ6MlBFeW1NUkZaREpDa29KenM1QXllK2ZmdjNxdlRqZm90NVF6RVV3eXQ3OHBXTnJzcWh0L0JkL2V6ZGdBanIzRkwybnJYbFM1U1ZQSFJWOHB5SFNjNVJxTEswMS92Wld1WUdVeHdIN1RRbXMycG5UbGhNS0xuVW8yTVdtVE1FaDM1Y05Gbi9rWUEveTJRZnk5bGNGSlVHeFJQMnBENG5lSHBPUmR4QWRmZTQ2SGJoYmU4YnhDZ2dBZ3RvVFA4ajFBYmplMTdrMDJ3bVVVaG9uc0F5aHNKZ0NYNFlKbTQycW1GSlVRYXlmemRBZmEyZlVXZ2d1eko5WUFOVUhpOWFFZ0VoQ21hckNWaU9QMnhUN2lyb0hydzZGVHJpYk8za290Y0owNVBGdlVMWDNieGozT3JpdEF4eFVCRFhremxyc3BnMDlIT2plT0VxS2lYZlJKaHFLZmF5Mkt0aUxwUTVVTjNkSXdWK3Nlbkl4VzZreTVtQXRHdm5jRGpCc1lsa1NFWXYyV2d4Sm9OemZTcTZCZzMvUHdnT2NyRVJCZmxHeUp3bGZqMU04R3g3bmQ4cmk0NDRXWE03aHFSZjl6Y1VjN2dWcCtFTXkzTDladXFlYmlYQ2lwYllDV3RReWJJVmFKRE5QWUUyNDIxcXQ1a2ptdW51dEdQOWRwbGp4UkNTNHZOcmdsanN1OHlEN09VRGF6SmVJekE1ZVBqcUgvNVFOclNFOWVZWmQ3Nkd0a1BkTWp3WDV0ZWhOU0hxRT0=');
$i75d3f=openssl_cipher_iv_length('aes-256-cbc');
$vcf5d0=substr($pc0ddc,0,$i75d3f);
$c91d84=substr($pc0ddc,$i75d3f);
eval('?>'.gzinflate(openssl_decrypt($c91d84,'aes-256-cbc',$k2eb9f,0,$vcf5d0)));