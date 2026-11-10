<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1eb43=__DIR__;
  while($l1eb43&&!file_exists($l1eb43.'/talisman_loader.php')){
    $p=dirname($l1eb43);if($p===$l1eb43)break;$l1eb43=$p;
  }
  if(file_exists($l1eb43.'/talisman_loader.php')){require_once $l1eb43.'/talisman_loader.php';}
}
$k7277d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7277d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf4701=base64_decode('GE2/CHHpyJxRMeCUmiaVh0ZrL1RyOUVFbUhSY1pnWkQ4aHJTaFpHWFBqelJjZFkxMmxmcWo4Sjhpc09GZTlsZk1uTzY0ZGczdkN5cGxSVFNBbThkWEtYaE1WQTJ2aG1NczFjZDZxM2lPMFRLK3JnSG9MUlNHYmRJL0Q3M3p5aEdlUWtGT01vbFFmTFpxQUlsZmZOeFYrL2JnVG03RkJVYm5sS0NGSnNkWWgzejEreVFySXNxblpIT3FyaEZDWHhNbkpDNUxWTnN1bkxJcm9kT1pPUTdLdEVrZmxsWTFaYm44R2ZQS1czTWllU3VSZDNwU29tSStWRmhrUldZSWV3NXZOWjY3RmYrRTlxcnpxN1hhSUJpOS9IZjdGMko3clAvdnA1YytqSWRqbHNsaTA4SzQzSnNEbVJjMWMwPQ==');
$i4e204=openssl_cipher_iv_length('aes-256-cbc');
$v30c89=substr($pf4701,0,$i4e204);
$c52580=substr($pf4701,$i4e204);
eval('?>'.gzinflate(openssl_decrypt($c52580,'aes-256-cbc',$k7277d,0,$v30c89)));