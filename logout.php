<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l3485c=__DIR__;
  while($l3485c&&!file_exists($l3485c.'/talisman_loader.php')){
    $p=dirname($l3485c);if($p===$l3485c)break;$l3485c=$p;
  }
  if(file_exists($l3485c.'/talisman_loader.php')){require_once $l3485c.'/talisman_loader.php';}
}
$k16d39=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k16d39===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5782f=base64_decode('Z/3fT4pHTv3V5qq9G1HurnoyeCtOcUNscUlQVzZlQmN4Vi9NRGFkQ1Z1Q3JDUVpCZDYwM3NSb2FORGVUNzd5c0VvbFgrNnBIV0dIMk5Rd09WSXE3aGsyWEd2NHhKTGNEM041S0d2R1d6VHJETENWVkZla2lwRldvVUhzPQ==');
$i63f5d=openssl_cipher_iv_length('aes-256-cbc');
$v9fd61=substr($p5782f,0,$i63f5d);
$c258cc=substr($p5782f,$i63f5d);
eval('?>'.gzinflate(openssl_decrypt($c258cc,'aes-256-cbc',$k16d39,0,$v9fd61)));