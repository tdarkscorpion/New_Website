<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l59285=__DIR__;
  while($l59285&&!file_exists($l59285.'/talisman_loader.php')){
    $p=dirname($l59285);if($p===$l59285)break;$l59285=$p;
  }
  if(file_exists($l59285.'/talisman_loader.php')){require_once $l59285.'/talisman_loader.php';}
}
$k45438=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k45438===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6e6e0=base64_decode('e7YhfhyPeqoWnvWsym4CVmdkV3NINEtPcmdIcnZ4LzVwMlFULzZ3bVJESGpPYWZDSXNLVUQ5RlZHSlBaR1YzVzFLY0ZZcytseE1aREx6UUVNMkhWSnA1RzJ1M1FpS3RqcUJ6cjY3TUdxZE45eXczMXl1eVEzQnZ0QjF2RlhFNUJNR0xXcFB6MnFGTkcwTkNualBqaitsQmpYRmtpb3VIUHZ6ZFozd2VFVVFHNGpLUnFRcThmQ3VBUW9Tbi9ub3VNUFdUbXpSUjRZMVJzZjgvTWJwbTE2NDM4ZEFkRDNFKzAwbHFPdkVNTlBUYTRpWkZPblZ4ZTRvdWJQd3lsaitsR1NjY2pMeWt6ai8xektGV0tMU1ZoNnVWZzU3YkhVTzQ2YUNxSm56ZjlRRFRGYndZeUk2ZmEwZXAxVjdkQmlGQ3diRmJ1d0p1Z3NDY3lndjhqSDZCL3ZNSm9QSEhCU2NjUVUyenN6ODl5OGYwQkg5eldES2tFSjJtWkN2OTl3d3dYa2VuQUI1NXF1TkFsSTZDM0xuMS91eG5DWUVQWTRVTE9VbnlxS1ZiUXp0S0pOaytMNVp1UCtvWFRaZm5WWS8vR3N2SjYzdUZ2Q3hjaWFDVC94TkhaSFdUa3VzakhyZnA5c3l2dzlCRlYxckIvVXVKMGJMakVieFUxaVlOVnE2V3NGamVrVk9xMm5yM2l6b2txamh5RU5tQnJyU2JKeEN5WVg1MXROZzl0eTFWeHEwdG9Gd2RYWmRkRTJQdmg2QXJldDE0bjVCN1RJUEdkWDJWcTNoY3JjRUtBVmpTNk1EZm9XQy92VHkwa2ozMzhVcTlLYmVnT0FvdXhsTjhnUkl6aGlSazdJdlZRdXNqZHprM040OUJkRFRjNlZNZGJmUFllQlZJN2lRPT0=');
$i3f5de=openssl_cipher_iv_length('aes-256-cbc');
$vcf76b=substr($p6e6e0,0,$i3f5de);
$c5bffe=substr($p6e6e0,$i3f5de);
eval('?>'.gzinflate(openssl_decrypt($c5bffe,'aes-256-cbc',$k45438,0,$vcf76b)));