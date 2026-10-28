<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2d7d2=__DIR__;
  while($l2d7d2&&!file_exists($l2d7d2.'/talisman_loader.php')){
    $p=dirname($l2d7d2);if($p===$l2d7d2)break;$l2d7d2=$p;
  }
  if(file_exists($l2d7d2.'/talisman_loader.php')){require_once $l2d7d2.'/talisman_loader.php';}
}
$kc84a9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc84a9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pddd24=base64_decode('PMJ46vWnG2UMGdTXS0zwlVA1NHRwVUlwQTlod2JhSmpzZjJ3NlYwVUYzRzBFWjJ2RWhuM0E2SkhCK3I0M0VuS1NCOFNlc0xoTFJETFZEY052ZFNTbjVLbEJQV3hrVXAxZ21TWTdmdFRCQzd0RXY2WGY0U0JoK0lTdU1GR1MxSEpJT0FnREY0bHR3ZkRQSWNDRFV6REZFeUNBblo1dE53SVpMQ0pXTzMwcjJTMkFKK2lvQnVGSXBsUXJ5Y0x5V1pBeU5QaHVPVXN3VGNyWW5FUGdNNm1vQlFWS1hod293QlV2ZTdocGJmMEIvYWI3djdibXBzQ0F6NXJ1ZHZRd1dvdkVqSTFaMVlIZ0N5by9ha3dEbXcwM1lTUm1lS2o2bUxVOCt6WXJVTjF4K3ZFTzNrd0pFL2t2UTF2ZDFKQ2Z2Y216N282ZWVJcUd0MW5SdFkybXhFOFN5RTIxTXFJWGlUcExDeFFVSHJaNTRKUXplWmovOTJxMXJlM1VPRTd5UTNjNjNGL3VaeG9wRy94OUhJdDNsbEQ5aGRESDdJVTQvMEVEN09JYkhVWmVzOFhhWURlY1g5Z0Z3QUM5eWJ2aW14eVJFeFRPdlhWOVVnNkpaWWh3amhVRGtJUWhUbndZcjdNTjROT2E1cVBlUERuMXZkMVloMXdWT1FiaGp3T1NjeXZzdk5tUHVFWFYwQmlmMVVzUkRxMi9VQWVCakdWSk5kUEVmbHloVlJoOFhuSmkvL0ZlQjBnWWtPcDhrSStGTURUdlFlVlFRbDJPU0s2Y1NLVzRWSmZlbHFsVmY4L1pqdHIzT0hnUlVrYjNNRW1TVENNemw3dks1TmRrZEZkUkw0ZUVFVE00OWtQTnRLalIvSTI5bXNqeUt3TDNLWng2WDJ4dU42cUFzM2JsaWp4OVUwSWxFUk90Qm8yd1VnUjI1SmFURFg3S0xXNFpwcVVPNkEva0d2RzhZaGZNazhwN2pUV3RBSzhVTFAzWU5oaklIS09RQno2MWNFUEV2UT0=');
$i467e0=openssl_cipher_iv_length('aes-256-cbc');
$vc3f7d=substr($pddd24,0,$i467e0);
$c8a317=substr($pddd24,$i467e0);
eval('?>'.gzinflate(openssl_decrypt($c8a317,'aes-256-cbc',$kc84a9,0,$vc3f7d)));