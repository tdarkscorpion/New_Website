<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l71889=__DIR__;
  while($l71889&&!file_exists($l71889.'/talisman_loader.php')){
    $p=dirname($l71889);if($p===$l71889)break;$l71889=$p;
  }
  if(file_exists($l71889.'/talisman_loader.php')){require_once $l71889.'/talisman_loader.php';}
}
$k25f67=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k25f67===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3908f=base64_decode('FbtddXUskqf81zl9WCbUH09xTndYTEZiRG1seTJQaks0cHk1a1h4UDRlVVNaNEdFejdiMDFNMHpCZ2t0bDBOZzY3ZXJ6ZWd0eUdJa3REcVkveEFUckRRaHY5L0lRS293TEFzY2FmbkovZ2NVSUp2UUp4VXdtR3NiM2RCbks1eU0rTExNTXFJTzRmb1FDanJRTnNuV3ZCQTE5Yi9LTEdsMTFTbC9pN0JGbzF6NHJDZ3JpUmdTZWdOVUF5d1Z2cXNONnF6c1lvd3lOanJjaENEeTRaZzI5SjIrRXpqcXM4Z2VWZTRrS1JoN3dvNWVWdUdRejB0SjNtdzcweFNwc3hZWGVIbUZFdGxnZWdETWwwbkpoS0lkdnFZNEw3ODBJbmhzdFc5alYrSGltV0swclJ2aDJzNFllcmpBcWdvPQ==');
$ib4bd0=openssl_cipher_iv_length('aes-256-cbc');
$v17c7e=substr($p3908f,0,$ib4bd0);
$c728a3=substr($p3908f,$ib4bd0);
eval('?>'.gzinflate(openssl_decrypt($c728a3,'aes-256-cbc',$k25f67,0,$v17c7e)));