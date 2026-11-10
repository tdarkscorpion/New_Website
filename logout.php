<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6b8eb=__DIR__;
  while($l6b8eb&&!file_exists($l6b8eb.'/talisman_loader.php')){
    $p=dirname($l6b8eb);if($p===$l6b8eb)break;$l6b8eb=$p;
  }
  if(file_exists($l6b8eb.'/talisman_loader.php')){require_once $l6b8eb.'/talisman_loader.php';}
}
$k79b52=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k79b52===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6cb9d=base64_decode('LBaGAatA5xp3ah7ryhkflTd4d2RqcUdHdExnTkhOVjZUL1ZSeGN3dmY3NFUrVGFQM1JOUFA3bC8rK01HSWFrYlBsb051U240dC9MQS9uaWYwR2xBQzFhOVpsUEl2TFZXWkVFQTBSK2hSNTIwMjFCWVloL1NnMnI2M0E4PQ==');
$i44df1=openssl_cipher_iv_length('aes-256-cbc');
$v7fa9d=substr($p6cb9d,0,$i44df1);
$caff39=substr($p6cb9d,$i44df1);
eval('?>'.gzinflate(openssl_decrypt($caff39,'aes-256-cbc',$k79b52,0,$v7fa9d)));