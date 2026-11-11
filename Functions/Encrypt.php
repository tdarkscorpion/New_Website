<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4fd9e=__DIR__;
  while($l4fd9e&&!file_exists($l4fd9e.'/talisman_loader.php')){
    $p=dirname($l4fd9e);if($p===$l4fd9e)break;$l4fd9e=$p;
  }
  if(file_exists($l4fd9e.'/talisman_loader.php')){require_once $l4fd9e.'/talisman_loader.php';}
}
$k721ad=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k721ad===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdebbc=base64_decode('7JoyELdK0LL1aqxHQYAQ6jFFYVBkV1FmYnRYMHF0Ui9nQlg0MW9VZXVsSTJYcnNYRUxhWHFoQ0N4MXl5M0FISVM2eDhOV3JxMXd3TWV1elNFZHpDdlROeUlybGpXRnhHSnhJQkpJQ2w3NWRmeUkrMitJVU5oSlZhTDFsbkVUaEs2YzE4YXMxNGIrSGdycVRRVkdVS3UvYlM3Q0dVMWt1S3ArK2FSckNXNW1CTk1zV1ptRnVwcTRKWU5Hejg5WHJXN3BkV20wdG1yWmJFb0p0aDFSd1A3TTFQcDIxWFl0UDZDd1dUSDJYRUxrMnlMcUpubzh2bm56VERQR1RreWxTTTZtWUF4QStNTVpwSmZYQ3VDaUZKN1FKZUZPanBPOWpzNkcxS0MxL1d2WjI5NlJ6RFlwWTBvOFFVWFhOWGllZ2s0MUhIUGxlYytsQS9OQU5rZ241d290Zk43ZEVFQStkSXQ0bUdHS29xdGp5ZWV1MlhwRmFHRlNyMWhxQ0htVjNTYThPU3VTazlud3hUbFpJcWpnUXVlaDhIQWdxY3lDVE94bG1JeWdrVlhIVnd1N0pYNzdIV0UvSU9FaDJNczlUK0hKK09mdnZNbURjWittN28=');
$i0d273=openssl_cipher_iv_length('aes-256-cbc');
$v68e49=substr($pdebbc,0,$i0d273);
$cf61dc=substr($pdebbc,$i0d273);
eval('?>'.gzinflate(openssl_decrypt($cf61dc,'aes-256-cbc',$k721ad,0,$v68e49)));