<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l08bbd=__DIR__;
  while($l08bbd&&!file_exists($l08bbd.'/talisman_loader.php')){
    $p=dirname($l08bbd);if($p===$l08bbd)break;$l08bbd=$p;
  }
  if(file_exists($l08bbd.'/talisman_loader.php')){require_once $l08bbd.'/talisman_loader.php';}
}
$k121a8=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k121a8===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe6841=base64_decode('Vt0n2DDxaIJeT0gm3jENAm14N0k2ODRpeW1RVHhYZU5rREVydC9EUVlyNVBOdjVFS0F4aENMMTkvVVUvY20vd3lkaS9ZZHJkUGVUcFZkdUh3Rkx4Tld3ZUU0OEFPd2hsSjlteExjcFV6VEVrY3hEd082Zm9TMC9xVHN3cS9uT3RRd0dGbGorR3J2YjQxUElRNVpEVk1TTDlMQmVIT09WNTlab0Y3bG1ybXlrMStTZ2JJTlpRZjNDc0hsNkxGUWtVYW8rcmJIZXp0YjRnMDN6YXdWTTRtSTV2S2h4Qm1kNUJLQTJSdldjUk1LMzNMR3lQcVIxSXV2QXg1Wm9vbnBvMGMrUVE0VWhaeTdXSHpNdG5YNmQ5c3JDVW5ITzRoTkJOWHp6TTVES3RHT2k3NU54NEFEem5iUzZ1MVlBPQ==');
$iff80b=openssl_cipher_iv_length('aes-256-cbc');
$v36696=substr($pe6841,0,$iff80b);
$c0558a=substr($pe6841,$iff80b);
eval('?>'.gzinflate(openssl_decrypt($c0558a,'aes-256-cbc',$k121a8,0,$v36696)));