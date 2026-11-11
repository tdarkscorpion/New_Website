<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1b29a=__DIR__;
  while($l1b29a&&!file_exists($l1b29a.'/talisman_loader.php')){
    $p=dirname($l1b29a);if($p===$l1b29a)break;$l1b29a=$p;
  }
  if(file_exists($l1b29a.'/talisman_loader.php')){require_once $l1b29a.'/talisman_loader.php';}
}
$k6ffc2=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6ffc2===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8271f=base64_decode('PKLmhV2Y8jFhiH06wdr/iGZ4V1hFM3ZYZWlXdE92OEY4elEwdGVSSC93K1doS0V3QUVEVG1TUHBRbjJzREJzdzVvUHl2aDAwV1pkNVUxUDNtTDQ5L1VxS0xwZGdCZkdRK2RMa3FWSVpnMENFSGhMRjlHTzltUURvNUFURUtMTGM2WHZDYlZFb2t5bFU3YmVsdkpRbXB4cnc2aitrNzZ5QjQ0VUxvRUlLTFR4bDE0MysydkVXbXpIS2ZCTlEyZmNha0FVb2RhRC9UN2YwVDkzNURDNjYxblVRQTR0NjV4dnB3TVd3NUpYaFh0a2RvSGxpU002cUdhZ0hLRWljWURLOEJhNklwdUQrazAvNjJQeXlDdEZCVlhJV2Q2L1JyWGxBNXA1T0R3Q0tqUVFkSnN2VHlCM25Nb29ERWtZRUZzU21MVEJFL0RHbWd3blA1NUF3R21oWk00N0grdk1FM0IvS01zNm5pUEtLMEtuaTFhZXVEZE9ybGc4bmFiZSs0UkszTHRwMlM1RFBXelhvU2xvWmsxMG14dzFPU0E2WTd4bHdmQkFBcHdpSW91enRUSWU0L2VhV2JMZ0g3OVJON05EVUQ2MndvQU1yNDNRVldtNGZLZTBuV011TGs3TEJVakVNa3NMT3lhSTZLMWFtOVpsZGdIMHFXVGpEZ0JwUVNuMlVLNHlOYzZkcjZVTzN3UUlFQXAwcUtoamFvWHY3N3JDL1k5bzZKNTJlTVJQeG0yUElQNWNEdTE0NW1sNUw5SzlHMWNuMEU4SXVURWI5TW8wVEg2NVZ3dlI3cDdhUDRBbGJ6OXRZazBCOVNNL1RuS3Yvb05kVEczYzZPVU5IdEdwczRJaTFHUkZVVGN0bEdQZFE=');
$id4f12=openssl_cipher_iv_length('aes-256-cbc');
$vcf763=substr($p8271f,0,$id4f12);
$cf5b47=substr($p8271f,$id4f12);
eval('?>'.gzinflate(openssl_decrypt($cf5b47,'aes-256-cbc',$k6ffc2,0,$vcf763)));