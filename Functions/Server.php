<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1e196=__DIR__;
  while($l1e196&&!file_exists($l1e196.'/talisman_loader.php')){
    $p=dirname($l1e196);if($p===$l1e196)break;$l1e196=$p;
  }
  if(file_exists($l1e196.'/talisman_loader.php')){require_once $l1e196.'/talisman_loader.php';}
}
$k2974c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2974c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p40b49=base64_decode('JQAgCNBzqNVXGC3DI7Eg2U1mcVBkdFpMOWNMVnd5QjIrZ1YzMjN1TTZOcWR6T3JMOUJCZlBkSnF6eDVjY25vMnNadEM1a2VQQXVVMzA0YWNDNkFidFMwU1pxYnBJd2dDZnFpOW55ZVQxYjM0dlI0QUtzSUxTRndFblNrTytPU1JpTUFHQVFGTTE0T3lDeFpyWWlVWWU2N3UyTm56Q2tHd1U1eEdBUHFQalMwVUdyTC9vY3MveXBQODAyR0JPZHR2b1BXb2o0SWJSSUcyMUhaQ1gxaFRsa3c2Z29aMjlucUsrSnVJcXR0V2pPSk1rcWFVWXlMdmdFOVpDcDhIaWNyc2xGUDViZlFwU1hqOS9xeGplNUt6ZGxVQ2ZLNU9pM0haTXZ2S20rL0VrQUViQVZTSkVnVC9VdkU1ODQ0PQ==');
$ifcfbd=openssl_cipher_iv_length('aes-256-cbc');
$v61ba0=substr($p40b49,0,$ifcfbd);
$c82fad=substr($p40b49,$ifcfbd);
eval('?>'.gzinflate(openssl_decrypt($c82fad,'aes-256-cbc',$k2974c,0,$v61ba0)));