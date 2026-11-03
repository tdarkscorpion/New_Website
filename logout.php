<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le89ad=__DIR__;
  while($le89ad&&!file_exists($le89ad.'/talisman_loader.php')){
    $p=dirname($le89ad);if($p===$le89ad)break;$le89ad=$p;
  }
  if(file_exists($le89ad.'/talisman_loader.php')){require_once $le89ad.'/talisman_loader.php';}
}
$k7fc1e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7fc1e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5f1b7=base64_decode('uuvRRjG7qxNzzamDOq8LwnlPR0xhSzlYNXdWbDhLaDIzNkl6c25hZWROT2pzdDBUZC9RQXlsYkhXU3o4OXBHeVlvd2R0ZmRFeE8vTStHUnN5SjR6WFUwd01zdmdNbGluNXM1Ujc4MTBENTdRMHhZOGkvQ3NlZkw2SVJBPQ==');
$i0c76c=openssl_cipher_iv_length('aes-256-cbc');
$v9efb7=substr($p5f1b7,0,$i0c76c);
$c23c70=substr($p5f1b7,$i0c76c);
eval('?>'.gzinflate(openssl_decrypt($c23c70,'aes-256-cbc',$k7fc1e,0,$v9efb7)));