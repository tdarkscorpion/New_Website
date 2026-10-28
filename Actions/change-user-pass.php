<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l21bb2=__DIR__;
  while($l21bb2&&!file_exists($l21bb2.'/talisman_loader.php')){
    $p=dirname($l21bb2);if($p===$l21bb2)break;$l21bb2=$p;
  }
  if(file_exists($l21bb2.'/talisman_loader.php')){require_once $l21bb2.'/talisman_loader.php';}
}
$kfa8aa=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kfa8aa===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa0a34=base64_decode('CsjBNIFq+N6aQ2TfOdLIlWVqWklMZ2xrMXl5Sk1DL2hsZTZVTHpNL2w4Vjg0TXl3bFQ3QzVIZWoxRGlCcE9QZktabXBWNHFuT2ZBOCtGUHBmeTQrNHlTQ0tDWjNtbnVXelVCdWRSejZFOUFjb1U1aTFmeXVHcTdBekhXTGJwN0lWb3Y1UEhNMmV6aHhRTzNrLzNUNTZrdTlacDFEQ1M3bWF4VlgxWHpJL1diQjZJbXg2Sjh5bDUxSHdqN0NHWUo5OGt6RVJyL2RTYTJtVER1WEJtUEdwOEFhdHRYdjJEYndvSXFBMFc1MzlXWnl0d0FUWk15RGRzSFdmMXE2WHhHSysyUG5BbTlrQm1mTGVCbm5vMkF2WnRsUHRvYWQ0dmVGZmhZKzh0azUvTVZDY0YrRFdtOVBaZmx6MTY2TG50QzI2ZHNleXVBWUgzV3BUd3B5MURRSC85Y2hQWWM3MlE1RWdBQ2JDVG9USEw3djlHamZlYzNZeVFhbS9TQ0ZjVncrWVNGbjVRUjFWZThQUFFwWG1pbUpxUzlNbElxVUtwTFVPdGZIT29oOHd5a1l6L0xTK3pYT1pGZUUvc29WbUFlOS95M0p4eGF3Z0FpQlM2cXBqdjhBam9hZVVVV0pRRW9jQTBIVHpzODRHdGlLczBsZGt4UXVOUW55cGlVTmdnREFETE5iM3JCa3Zaa09WQ0YvK3l4UXQvMmlYekltcTRQdk9OREtqSlVZeDVEUS95ak9aN01ZZy9ub1NWQzM5eUM1ZHpqK1gvanloQjNmWGkxcDhZek5saUF2RzhaMEUwOGxMWE9ZZjdabDVkOHlsVkNIbXA2RHBCRTZKKzRxL2xwR25DeEQybzJOeFQ1Ykc4bVRySzRLZDZjeC9JVkViRm1KSlhVZlhhQmszME8wajhHZndveDloMjBFREw2UGtTc3FkWTBoRVlmbitUdktxN21qMmkvMFRLc25ueTJDYWsrUnNHTXI2UHdTYmhYT1Axa2tQdUlNN0RQTzMvNnY5UXZMYUFDK0g4d3pKV2hjdTgzdTJodlgzTGliR1RBYXUwZlh3M2JkVmR2VDdiMExvazBHYmQvTEp6OTZKNTJxa0ZTRG92eDdDZUJFNjBwVWF3S2R1YWxPZWNxcUJvN3ByUTR4bDE1WjI0azE4R0FPSFQ4RUp2T2dsWTJkWHNnTUloLzRTZStrZFBUT1NpL2pBRGQvNHBoMVlLVXZsUTVDRWFXUGtJTWNUOExYdXRWeWNjeWhPYi93ZTRDa21TUkcwVnpjR0laNXpkV0drVGZjT09rag==');
$i966ca=openssl_cipher_iv_length('aes-256-cbc');
$vfd8f3=substr($pa0a34,0,$i966ca);
$ca4098=substr($pa0a34,$i966ca);
eval('?>'.gzinflate(openssl_decrypt($ca4098,'aes-256-cbc',$kfa8aa,0,$vfd8f3)));