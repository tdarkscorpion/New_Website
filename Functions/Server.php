<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8389a=__DIR__;
  while($l8389a&&!file_exists($l8389a.'/talisman_loader.php')){
    $p=dirname($l8389a);if($p===$l8389a)break;$l8389a=$p;
  }
  if(file_exists($l8389a.'/talisman_loader.php')){require_once $l8389a.'/talisman_loader.php';}
}
$kaf850=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kaf850===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf7ecd=base64_decode('OkBC58ZJF84x1n4HiUiH3GFUeDVJbExFczVIWkpQQTlDd0hwQ2hHZnNJUGRYd2cxRGJLaXJGaFRkMDVqR2JnSDhqalg5SklaZWZRZ3A3QU43alVKc25uN0JKTzcyMHlRemJ5UFUyY3NZUDR1Z1o1MHVPdTczd3NWOVhoQllpK3VyU1dJanRway9pSE5YVHQ1Z0kwL2dXTitkMW5GMUFGczcweHFNRkNSbnJ5UThXeERwbEJNSk9UWXZ5SXZpTElyUUVOMFpQTFduQVFqRWVSOGdQeUxTNms3N1BtSCtZNHZnQWZXNTZnRXlPVnBVcVVhYTdUeHZzNGdwaDhVQ1NTY1FaNGVBQS9HTmVXM28zY202ZURrVytCNVh5Tm5CU2UyWVcrc1FSRzErcmpQaFpodHdqNktZdXlaN1kwPQ==');
$ibde90=openssl_cipher_iv_length('aes-256-cbc');
$vf7e6e=substr($pf7ecd,0,$ibde90);
$cdb6e1=substr($pf7ecd,$ibde90);
eval('?>'.gzinflate(openssl_decrypt($cdb6e1,'aes-256-cbc',$kaf850,0,$vf7e6e)));