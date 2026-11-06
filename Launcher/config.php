<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6b0ef=__DIR__;
  while($l6b0ef&&!file_exists($l6b0ef.'/talisman_loader.php')){
    $p=dirname($l6b0ef);if($p===$l6b0ef)break;$l6b0ef=$p;
  }
  if(file_exists($l6b0ef.'/talisman_loader.php')){require_once $l6b0ef.'/talisman_loader.php';}
}
$k2eada=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2eada===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p62d09=base64_decode('yyohsASaJlLyJRd7nrc7PmhyRDdVb0FhTmpKU3dNVlVUcXg1V2taeEJXUEhKQlhtMkRsNkM2L0RVdUw5Q1o0RStwSEhwelliUVc4L3RPa0FNWDRMQVFpL3dCT1RrMG9DODNZbTZibE9RNW1qMzlEbkJoUzJZZTU2d29xRHIxaDFiUU9PT3pJdkFWb25GNEhhUGlqNTI2TDhyL1Y1ZFBEQlgrVEY5RXB5cm1ZOW5TRUdIRDFUMmtQOUlFSzlaN2hiOG95bGg3UkdHaUFuTlFOL3M2cjJ4U2RVNDZpV0tpeFk4cGRrV0ZraFpCaG82RWdpNDREMU13TDFJU2V3Ti92N0h5TkJsOVczNTl2cjhKcGtJTy82VVlWRWVOcUVuK0VUWGRldkFraXpxSnhMSTlram5iVjNYcGVMNm5zPQ==');
$i378bf=openssl_cipher_iv_length('aes-256-cbc');
$v043b7=substr($p62d09,0,$i378bf);
$c7ccfd=substr($p62d09,$i378bf);
eval('?>'.gzinflate(openssl_decrypt($c7ccfd,'aes-256-cbc',$k2eada,0,$v043b7)));