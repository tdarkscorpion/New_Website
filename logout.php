<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l49500=__DIR__;
  while($l49500&&!file_exists($l49500.'/talisman_loader.php')){
    $p=dirname($l49500);if($p===$l49500)break;$l49500=$p;
  }
  if(file_exists($l49500.'/talisman_loader.php')){require_once $l49500.'/talisman_loader.php';}
}
$k6048c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6048c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p89412=base64_decode('09RwcSUKZD/BDL89/xjblFoycHJWc1JWSWZqS3NlcXZmakJhaWlUUlBvZTNNcGoyVllYK09ISHg0RmRQRmVKUTN5MmVTRytFUnI0UGdKcGJPektjWGJZL1NSUlhmU2pyd2twbWpRK3BxV3Q4eU9pclFBT09NK0NFaW9FPQ==');
$i2e25e=openssl_cipher_iv_length('aes-256-cbc');
$v6dd54=substr($p89412,0,$i2e25e);
$c56d39=substr($p89412,$i2e25e);
eval('?>'.gzinflate(openssl_decrypt($c56d39,'aes-256-cbc',$k6048c,0,$v6dd54)));