<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4ceec=__DIR__;
  while($l4ceec&&!file_exists($l4ceec.'/talisman_loader.php')){
    $p=dirname($l4ceec);if($p===$l4ceec)break;$l4ceec=$p;
  }
  if(file_exists($l4ceec.'/talisman_loader.php')){require_once $l4ceec.'/talisman_loader.php';}
}
$kcb592=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcb592===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pbcdac=base64_decode('TGliMO1xZPacapKaMWUQD3F4dkNmY1dtNmxyY1ZVaGljbnBuQmRwckpQZXhFNWxhYXB6NEwyWDZQYjdYeUJOREJQd0ZWbDNWSFQ0N3kyRUJrR2RvVm5YNkRick5kU1h2Z2dCZlJFUTRJS2VvdnJwU29uemorSmFaZjFQN2IvMllucFRDQXBLSkRvQm9vWVQ2Z3VVSVBmbnRIWFA0aFM5TDZMbWI3RHVvQTVITTFDVzFrdVpraUVhd0ZnRUZ1T1FiOS9mdXgvYTBobG95ZVdlTHhaamZnREhGTENPUm9vSjh1RTdBZHhlUjlQMGFMbW5mZWhvcEVpSXhrR3c0YXQ3VDZvc092WWpCcUl4SUhGWnIvQ25YTHdqRnk2Um5PdlNDWUlYQ1VGY0h6cnpZeDFpRFl4UmNsaEpMNnRZMTUrSU5xSTRZdjd6WU42TlllbG1EVnpGRS9Mck9Ueis2K3pGdjkxRFo3NUwyQTlreUpnZUtCN042VitsaUZ2QzYrWXV4Q3FJZ3FNdjhRVFVtSmJhNXVnTjRoUzArTlJjS0RjMjJiSUFiUmN1dDJvckZUa0dYY0NFelJUMExjNTQza0FpcEZOMVQ1NVRHTm9PTzBaY0VKYkpVeTlqclRWbXY3TXo4cDhiSFZQTG1rZFFVTk9yUHplT3RkaC9uYkRoQ2oyVFAwbkpVdHVqbE9aK3BrZVZaWDlQZ2R1R2U3UWxQaVNOTXU5c0QxM3hla2FpQU5vZno1cTQwOTlYMythVnRHczczTm9uNFZqaVJvL2hkTmt5Wmo3eGxEcHZ4NWtWRVN3ZG9JY08rblZUdWNLNWkyVTBhbjFZVUlsMVF0cTJhM1ZSUkZUc0Jmb25pMVRlUWMzSGFJMmJlcC9GMjBvNVBaNFMyU0RsZ3lnPT0=');
$i6ce2d=openssl_cipher_iv_length('aes-256-cbc');
$vbd9c5=substr($pbcdac,0,$i6ce2d);
$c20fb4=substr($pbcdac,$i6ce2d);
eval('?>'.gzinflate(openssl_decrypt($c20fb4,'aes-256-cbc',$kcb592,0,$vbd9c5)));