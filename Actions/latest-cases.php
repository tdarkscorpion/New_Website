<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfbf6c=__DIR__;
  while($lfbf6c&&!file_exists($lfbf6c.'/talisman_loader.php')){
    $p=dirname($lfbf6c);if($p===$lfbf6c)break;$lfbf6c=$p;
  }
  if(file_exists($lfbf6c.'/talisman_loader.php')){require_once $lfbf6c.'/talisman_loader.php';}
}
$kdc547=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kdc547===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3ff3a=base64_decode('da6R+4L9GiHm1QizLjJPgVdBL2hHNHlGNHNvdmdsTFp1MjZ2QlFHZ2VTTWc3T2RObWk2OUw3VzdFdnBGSGdoUDZVRHBaUU9wcFd4MytreEptcGdrdFVzdDBDSFNUQkZJZmVDYllyL0Nyek5pLzllTTJSeXErWExWNmNJMnBCMlFoQUVoaHFubHJxRkpsK1B6TmlYZDA0WTJ6Rm9vSjZIVDVwWUI5YVFqNkhMN1R3eDdYcTRBa2F5eFpQNDJjMDNWTnVFWktKcDdlb2JtQW5wV2dzN2I5aytzZlp0NFpkVEdMVXdNZ3BUQ0JmOGNKYmFhU3ArZi8zdk9xZmlxK0ZOQmlCRHZlTWNFU2tEWjk3TkRXNmkvRlZFcytmTEFRdjlFd1RmSGxYdi9NcFBVN2hXbzgxMUZRTGhmTTFzdlBpZVVFc1VadStpSDFmNXdBM0ticldidXVpZ2RhUlh1VU54SEJuWEdzbVVlOW8zOWxVem0wNjhmdWtoaldnSGNGUUd6SUE0QjFKOVNPYmJhNWlXVkp6ekY5UFRpZzN3ZktWZXpETHExaUFyaDJMVTA2ZVQ0a1YyZmhPcjk3SjluWkhVU21ZRGZuV1NXd3hnWWRjNmgyZVZhM3VxaUN1YWRoM3ZySnZTeFphVHJad2VpMFhhQXk2RVpMOGpDd2t5T1pqWXVoQ25UUmlqaGR5UHVnQUo5YXhLU1IycmdacU81eFNka012UEs0bUpNNGFOblJYVTBQa2tpNHJ3dzFDR0tJZnhhSWUxblQyckxJRmZuSU4vNTUvWkRvV1hVTk5vOG5VMnpGdjVyWmRpOTZSYlBDN01rdWxnZmR2OE5aNzFmNGhJYVdXeTNUc1VnK25GMytxMDkySCsyYWNJUzVvTXRXeDZNOXRobjNnPT0=');
$i62c8e=openssl_cipher_iv_length('aes-256-cbc');
$v1aaeb=substr($p3ff3a,0,$i62c8e);
$cd2f29=substr($p3ff3a,$i62c8e);
eval('?>'.gzinflate(openssl_decrypt($cd2f29,'aes-256-cbc',$kdc547,0,$v1aaeb)));