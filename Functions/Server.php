<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l010c1=__DIR__;
  while($l010c1&&!file_exists($l010c1.'/talisman_loader.php')){
    $p=dirname($l010c1);if($p===$l010c1)break;$l010c1=$p;
  }
  if(file_exists($l010c1.'/talisman_loader.php')){require_once $l010c1.'/talisman_loader.php';}
}
$kf8223=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf8223===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p017b6=base64_decode('wbfvFRqHUsZcQ7QF9rZXgUlKN3dWeTY4NEdzMWpQZEdTYU5VL3Nhc0Jwek5IMEU3ZnZoOTh1VEZydkxFbUJYTFdGWFBMd3QyeHJNMTB4RUo2YUpVN00vWVFMZWhXbzZienkwVGVqc1JHaTFsdGd3V2UwZGdiZGRjNWszVm5abXBGY0JvSzhTMmRRWUpVa1ovSmgvd0srWXZXUloycDdLYytVZE0zZUg3Z21YSi9GRXFlaTRBVDl5RXUvMnJVeDBmWE1BQ05KYnRFZ1hPL3NFamROQk9SRGp6blEvR0w5UXBVNEhZUTI5ZnFyU1V3dE1tcU5wVDVqbzZEeTJCdUVKSXUvRHBsbzJlYzBDY2ZHNVIvbXcxQ1JtSkZQUGxpcjlGeWdQek5EbUpuVFo5aHJwbEovOUJjUG5kSFVzPQ==');
$ia3fdf=openssl_cipher_iv_length('aes-256-cbc');
$vfb9d9=substr($p017b6,0,$ia3fdf);
$c337ed=substr($p017b6,$ia3fdf);
eval('?>'.gzinflate(openssl_decrypt($c337ed,'aes-256-cbc',$kf8223,0,$vfb9d9)));