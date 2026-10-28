<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l62c61=__DIR__;
  while($l62c61&&!file_exists($l62c61.'/talisman_loader.php')){
    $p=dirname($l62c61);if($p===$l62c61)break;$l62c61=$p;
  }
  if(file_exists($l62c61.'/talisman_loader.php')){require_once $l62c61.'/talisman_loader.php';}
}
$kbe4b2=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbe4b2===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8e4d8=base64_decode('Tgk50g+uP5pGPEubWuPqI0xkSzEwNjhWcGVNdG0yb21JZTFlWGEraW1LejdrZTRkN05zK0pGWXo4RDNId0dYVk9GNzJhOVlHQkxpbzF1NERSZHAydENuOERKZHQwVkRsZldpT3NudWhsdHpOKzFXbU5hM3JsWVd6VEl0TGY0OGRhSWxsNEVuV0xGL3Y1ZkFjVW1SVW1SZzZaRTNqTzBDVDlBcVcyTWdkZUgwT0dsQkhzdjlHeXJlaGVDTmpOV1Nxdklsak1IZk0rNmZtWU5RSFVybnZ0YnNJamFCeU16OTdncDlwdW8ySm5rNWRmQXVHRmJVQ1duUlZsdXBPNEdVVm5YUGNkWjB2U1FnSXRxdW1MVERiRjFmYnViV0xuaitSTjJ3QjY5VVpYZkdkcWZSNUdDd1JvYngrNVJvPQ==');
$ifdbcf=openssl_cipher_iv_length('aes-256-cbc');
$v6ce28=substr($p8e4d8,0,$ifdbcf);
$ca7224=substr($p8e4d8,$ifdbcf);
eval('?>'.gzinflate(openssl_decrypt($ca7224,'aes-256-cbc',$kbe4b2,0,$v6ce28)));