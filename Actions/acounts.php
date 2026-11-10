<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6e3f6=__DIR__;
  while($l6e3f6&&!file_exists($l6e3f6.'/talisman_loader.php')){
    $p=dirname($l6e3f6);if($p===$l6e3f6)break;$l6e3f6=$p;
  }
  if(file_exists($l6e3f6.'/talisman_loader.php')){require_once $l6e3f6.'/talisman_loader.php';}
}
$k2adac=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2adac===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p686a8=base64_decode('Lu+cgbeF+vvnsvPsrLVjxGFsQzlCZ1dnOERBVVA2TkQzWTdKeGtQQ3Z5VlpraWI4c0VBYUd0OVFBYzZNQTNOZE9URFIwNWRudXRqYlZibllOOWo1bmNTcVBwRHR2UkUvUGFYejJqK2FLRTBnTXBoU25oVm1ZcVk0OStxdURQMjFINCswKzV2QkZNTUUzU1ZQWS8xcW1RQnBaQ0pUYUJJQzB5MnZWVnZFTThuakh3dzlDazdrTjZOV3pBazB1eDdpZ2xjR1RmMXZVRmUxRy9jT3NsSnlmQVJibEUrMW4xRU5yNzgyRnd1b1hPQVQwbzZIOFE1aWlHbmtUak1MNUpsUTVUcUhtbWc2M2F3UnREU05aWGJzQ3REdnVvNTlFeHY5cnhIRzlSSjRGWDM1Sk5EdVJGZVpQYU5NOXRueUd6T1FWa3dzOUJ3VXJmWnQvTHprSGtMbjZDbi9NNDdiZ0pKUG9iR1Y0U05jcFpydG54b3pQQnF0VFBpNWVzSWVnMmRNMTJLaWNqNTZaRXdrNDFNVTdLaEZGT1A3dGREZ01vWXowK3duOTl5OTMwTDNWSWw2M0VUTnhFQ0I3b0Fselc5VFVUNmtVQmYzc0FjVVlSYjdjTFJkRElLbzBJejZmVUV6Y2dmMDFCbkhmMUlSNVdzTDdaY3VZeUJxajliM28zcVVzT3JnSDZTZUVBbkFqUHU3S1ZCUS9sYVhrTjkwNHVlVGl0SzZPQ1ZJZUc0RjI1TnF1M25CUmtWLzV3OHA3R2JJWE1hT1dxUTFqMERCampsWlU5K3l6SCs1ekcvdHExVkxGdG93alQyUzBNN3hqZWQvbGlBYnhYRm1WMlRlTGs4eGd4d0Z1T0JUTmZjUDZ2VWwvOGFFd1c1bm15eFBhOWQyUERBc0lnPT0=');
$i536f4=openssl_cipher_iv_length('aes-256-cbc');
$vb8b21=substr($p686a8,0,$i536f4);
$c30e15=substr($p686a8,$i536f4);
eval('?>'.gzinflate(openssl_decrypt($c30e15,'aes-256-cbc',$k2adac,0,$vb8b21)));