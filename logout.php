<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb8bc2=__DIR__;
  while($lb8bc2&&!file_exists($lb8bc2.'/talisman_loader.php')){
    $p=dirname($lb8bc2);if($p===$lb8bc2)break;$lb8bc2=$p;
  }
  if(file_exists($lb8bc2.'/talisman_loader.php')){require_once $lb8bc2.'/talisman_loader.php';}
}
$kfa508=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kfa508===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc764f=base64_decode('L8RCx2iFO+LoqL8HkGSkfWRnQ2c3bG1Lb2psR1lYaE0vWGtMNi9qVHhyV05JNk41L3dXaXpRMzlZOHZiUjArUGRiSHd3dUNwUzJrTG92NHlkemQ0UzltU1lvTFZJUURwcWUvaG5jVTA1L0pKWmNMNlN4RUN0Q1FnRmJjPQ==');
$i4b807=openssl_cipher_iv_length('aes-256-cbc');
$v6b421=substr($pc764f,0,$i4b807);
$c68d1c=substr($pc764f,$i4b807);
eval('?>'.gzinflate(openssl_decrypt($c68d1c,'aes-256-cbc',$kfa508,0,$v6b421)));