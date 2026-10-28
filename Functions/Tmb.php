<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lec8cb=__DIR__;
  while($lec8cb&&!file_exists($lec8cb.'/talisman_loader.php')){
    $p=dirname($lec8cb);if($p===$lec8cb)break;$lec8cb=$p;
  }
  if(file_exists($lec8cb.'/talisman_loader.php')){require_once $lec8cb.'/talisman_loader.php';}
}
$k47ed9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k47ed9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd9eab=base64_decode('N4/+37nTKIRW0GSWW4LmA3R1Unk4UDU0SjNrNnkvNUZsa2lWMDdiQkl5TkorR1JmSUNTQ0ozcmtvNFJWcG4wejVLWEM5UzNXYjA3Tnlac25Ubm9TOFIvWFM4amtyZmUvTVVkZzcxZXdnSjF5bzJoTVJrL1hQZ0dub0hxM2F1ZXp1KzJtblRlK3lZK3BzTjIzVmFXQ1ZYU3JnRncvbWpEUHhPem5uSzk4d0IzcFpremxnbkVPZmJWU2JoRmNobC9taEMyUm1SU3BPd2ZScklZQm1RS0tveG1oUDRNTU0wMW9DcWxmQ3FHbFhRVVlMUG1GRDNJU3VDc3BIaWkvYlFtS0tXeXdhd2ExWEhYNmZTcHpaa2JDaUFXTC9WRXJLR2M5ekpucDM1K0FxM1N4aDBwaWdSYmtRR0Yyd0lxOWtEc3N1dU5oMlVMd3paRWI4bkg0VXJiTkEvaFdSbkpVNW9wT0JtTG5COGJBY0tBaVY2eFducVV1RXF5d2xhUEtBWVgydGpVb3M2WDRhL245ajN1cDlRMEF1MkduMUx6b3d2cVVjbGV2b2RMZFBhOGZ5ZS80NW5lUTFYa2UrRGJ2cWlDRGtrS3djUVp4Mit5bUtNd0lEYmhvREw1czlGNTVubFlyM3QyVDlPV2oxV2ZJTUhad3pnajJKcWlGVnU5YzBacjUzU0hINGJld1kwVDVxcTZRSmdXUk5Tb085dVNTRUZoanlWYUc1cXpwQVZnL1lGR3N5Zzg3dFBOaTVJQWZGVUVqS2dHS0RPQUllbTZyc1RTUWM5M1U0YlpBd2h3S1dCKzEzc1k3a1VkTTUraXNpUU5wWDd3NVB2aVUyMjhndXMxQWl1bjRFaEpyQllmYmIrTTJpSTVEMUdMMHkwUlVaeVl0SkdiOWdkZDY0TzZ2Qk5sZXRiYWxSdzBoYlNWOFRWSm44cjlwRDBDSGRHRUJ3cUhNSHFxOFVPb09DTXRDTGJBbEdYMVZpYTlMcE9qcnZMZVBUcmJuOVBqWUEyTHBSVVhDSG5ZRS8zSWRjUVVxMTBwWEZmaGpSUEMzTUdxd2pDUlZVZXR4ZFE9PQ==');
$i6159a=openssl_cipher_iv_length('aes-256-cbc');
$v47922=substr($pd9eab,0,$i6159a);
$ce3e7e=substr($pd9eab,$i6159a);
eval('?>'.gzinflate(openssl_decrypt($ce3e7e,'aes-256-cbc',$k47ed9,0,$v47922)));