<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l97ebe=__DIR__;
  while($l97ebe&&!file_exists($l97ebe.'/talisman_loader.php')){
    $p=dirname($l97ebe);if($p===$l97ebe)break;$l97ebe=$p;
  }
  if(file_exists($l97ebe.'/talisman_loader.php')){require_once $l97ebe.'/talisman_loader.php';}
}
$k3fff9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3fff9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe022b=base64_decode('d0muySdllZ2/dZBvWZfk2GpwOE1qVkVHR2VKQnF6K1BDZ0xmNzZhVDR5RUZjVnFDR2dsQ0dSVEdIWG0weFI0SUx3bEJxeEVaQ0hkc2xmeVI4djVGdHdIOU1HNjVDaDJpZERrcVg3TS9ySFp0aXdrL0cvSllHcDZXcllSNFdqNmV5b2ZGUDg1cWJXcDE3OWI4dGVsYnNWT0R6VHNvM25HNjNtLzJQeGdWcFNid1J2N0xkWVVsS0ptZnpZWks3SElMSDBQdmtvU2VHcjJKaFluQjRjNE1lNm9GSlhnM1k0YmRkWmlaaWR3L2hoK2VMMVNzU3g3QUdZcTVEK21kVVI1Y3FQejBmaTE3cVNMRy9icWJaOXVSV2pRQXQyWHdmdVpxTlJWeUlHNEorcVdaZTRmR1kxNGVqd2c5M1ZqcnhKYmkxMmVUVEpYY0QwNnFCa09wMC9QT0swT2VDSHBoZVJ5VFVKQlB6TWljK2VWRDlLQXhva2J0cXFKMkVjdGFGSmkyanFKbHFPSVNaSEZMTDRwMlZJWjViRHRKTFBBbWt5SkpUZDd1U2dBYyttbHZVdlBBTTFuMHlpYVdRa0VnemRVVTJST2hpNmN5K3pGU2ZPTXdmaTcvaVliVVFQUzJ2cUNBZ3E4Q29MaXErMVNLeHZXdGNTVmxnOG0vZHVYZ2ordWE3M0owU3V3QmF0RFk2OUREY0ZuTFZGcDFGSExSSG5ZNG01M08vSHUzMitaR1NFR0ZTV2krYlNhN2pBQkNSNU11eVFkeURXM3lUWFUvLzhZUy85ZDN2MDJSUHphaitVT2lLcTdnbGUxQnlTY1RodDFVOE5OcVVoQzNIYkhFdG1aVUJUNTRhYmZBODBxU1VUY1BFWFo1Q1hNOUwxNkFrdFA3dlduVXRpWC8rVFhvMjBkSVJWMWpFcG1tSmVmQ2FTYUVkT2NLS3ZlL3NrZG1vamJra2NPT29QZlJCVys2cVBIQmJVZGUrZzVIQTNIbjZSOUI0bnRYN1FOcGVFND0=');
$i48daf=openssl_cipher_iv_length('aes-256-cbc');
$v9201b=substr($pe022b,0,$i48daf);
$c4197f=substr($pe022b,$i48daf);
eval('?>'.gzinflate(openssl_decrypt($c4197f,'aes-256-cbc',$k3fff9,0,$v9201b)));