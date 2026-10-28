<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l85044=__DIR__;
  while($l85044&&!file_exists($l85044.'/talisman_loader.php')){
    $p=dirname($l85044);if($p===$l85044)break;$l85044=$p;
  }
  if(file_exists($l85044.'/talisman_loader.php')){require_once $l85044.'/talisman_loader.php';}
}
$k80a8f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k80a8f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p32ec7=base64_decode('Vych4rLwU/0HYZVgJQy/d29sMzgrYThUREZoS2tNN0FaTG45ZW5rdStsWWY4bEFGVVFxSEs3Ukk2RzR1a21yWm1LbVIxdGJJTENPT2lPWXB3a052T1k2UCs2eHE1YUxSMUwwbjBUQ3E3T3JSUFl1N0dEQkZTZVM4K1hTbm1obFRHOUhXQ3c5aUhBa28ycU9MNHMyUFRPN2pCS3B1N0ZFODBsRm5vZEVJbWQwYzAvN21jcFBHSDUzVDRZU2VlMWF4bVBkV1pTNDhpVXJkYVRLaldDZjNqYzQ1MVBScHNLRU5UelFUQm13UnhrMFdvbDB3WVRoQVNZR0UraklIWS9jYzE2VUlVM3VtY2JDUU5UNVVaUC9qZDdZRTdRVGkxU1JKb3BXMzNwa0k0ZlpDajd4Y3pOMnIvTEZiNUQ0Q3hkdTNCdDUxcEVqQ0FxdkVzR2ttb2cwL3ppL2ozOGhsWHRORnNWMTg0ZjlQQmt0M1o4eE0rZ01NZktvbFVaZjhuclg0YVBlZDVrTXBIZ0QrYjdSZ296bzBoNFp5eDIxWUdjdlBKMnY4NVV2RWpHRUhhSUdMU2sxdExST3VIMDFjSkdlQjBxZVFDMmU1WUZxM2MxK1RDY1diWWhTczdCcnNMd3YvUjRXN3RuNU5CT2RUMzNMRmJOcG90UmM4bmZHR2tZWVNHNUQyb0gvbXVvQlFQdzk3RENVcWJ3ZGhFTjRsenVoc1VZU2Z2dU9ZYXBwcy9KdFZmajF1bTRnUm5URlJDdXNkWURhN3ZJeUVZNXM1cGZPN3dzZjZrNkRCMWVKR0JCc3cwMXBwRTNTdnpFOUtzVGF6NUtHRitDVzZ2cERZc0QwK2JJaHQyYmpzRnF1Wk5JYUs=');
$i7cc60=openssl_cipher_iv_length('aes-256-cbc');
$vb2e72=substr($p32ec7,0,$i7cc60);
$cb3e75=substr($p32ec7,$i7cc60);
eval('?>'.gzinflate(openssl_decrypt($cb3e75,'aes-256-cbc',$k80a8f,0,$vb2e72)));