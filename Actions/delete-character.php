<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l55c03=__DIR__;
  while($l55c03&&!file_exists($l55c03.'/talisman_loader.php')){
    $p=dirname($l55c03);if($p===$l55c03)break;$l55c03=$p;
  }
  if(file_exists($l55c03.'/talisman_loader.php')){require_once $l55c03.'/talisman_loader.php';}
}
$k444ca=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k444ca===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$peae6c=base64_decode('GD2WZ8tyTjdv+XfA2TcmVzRnM3FpcE1CNnptYzJ6SmtJSkU4MDB0Tm9Ga2dPWXhBWW1uZG1lSW1Yb0NjSUx3ZzBZY29wblBlMHN4blN5MFZxdkg5dnEyb3NxOVFybEpTL09yV2k2eHRsN2FOS3hhaGpjUy95akNQWlQybG5sdDVzRTc4cFg5NXhBakp6RlFYK3F4dW9OYWFaYUlpd1pIam5kb0d4aGdIVlpTcURYWC9OK1VGZWNwSUJTcFgwTDhKYnltQis0NGZjZjlVV3lJemQ0TEtGUTBrelc1d0s5V0pnT2JpM2tLNFl4elYvSjUrczYzeEFKQlNCeTgrNm5LMlRBYnFpcXp4M25vbmJjVjN3WG9VOFJaL21yQXdNczVTazYwbXorRkRFWjZBTGM5eXIvejBFb3ZZYlk1SzZJclJaZ05GQTJFaUlZRS9yQ2NMOGlOeGxTcGRCSHpPK0NFMENNVHJXNVZRbUxEOU5MalJsQjJ3MitaeUQ0WEdGc1ltZTFWZWJVSlRnSVlYQUhlczR2ZHhITzFBeUVBaHBQaHY5NlFLVlpjcVByNlN6ZTlUQXVSOW1oaGFWRG5KUWJYdUJEM1o0TVFKNVdkRnJTRUh0cS81cUZ5VGlZQzZHeWdLL2xCUFFiMm1PQXRKb0VaemhZVTlja3VYNU5Ha04yVU43cEhpZi91MWVVbmFRTUlTRGN5VklkaktKS0hnaEFqb20rM29wWGkrZGhBTVZQNFAyeno1UzVZcmFPMUFacGY3Uk53TThOOWx2YXQrQkZGOTNrb1NxclRhN0VRajYydjNUK3V3bFE9PQ==');
$i27626=openssl_cipher_iv_length('aes-256-cbc');
$v41dde=substr($peae6c,0,$i27626);
$cd2879=substr($peae6c,$i27626);
eval('?>'.gzinflate(openssl_decrypt($cd2879,'aes-256-cbc',$k444ca,0,$v41dde)));