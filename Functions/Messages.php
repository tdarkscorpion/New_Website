<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6204b=__DIR__;
  while($l6204b&&!file_exists($l6204b.'/talisman_loader.php')){
    $p=dirname($l6204b);if($p===$l6204b)break;$l6204b=$p;
  }
  if(file_exists($l6204b.'/talisman_loader.php')){require_once $l6204b.'/talisman_loader.php';}
}
$k81f9d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k81f9d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7281f=base64_decode('r8yQUPzmRZ5jq5BRd/nF3GlkSndOWksxWGx1bFVEMk1icDFjN2t4UEVmL2tvVlRkUVUrRlE1ZzBvN3BicFk1Z1dxL293OHNCcWdhYXFJYjdFK2ZpaDVDemwwbG9OWVJCVnhWWlBMVUM0RHR5aStHMkMxTGNKdjZCeHZZcFFEWXlSZ21NUWhCQWtUeUM0ZHg1U3RZcXlCNm5LWDZLWGxSaFhqRUhrN1YyWHcvTzdPTFoyRVZxbXkrR0E3WnJmaHh6MnNFd0VzaExLdEFFdmJYZ1ZxaWlVb3JsVkZMWmd3SDVYMngxcGQrQmNvdUszVGx6RnZkRjcxOFhOK0RONnQxYkYvWVlhOUdmOWpMcGgvS0JDaUlYRmJUbG1aa0MzNU53eWphNnhWWEQyaDNwZzFEYzAxYVRXRnpra1ZrPQ==');
$ib12c6=openssl_cipher_iv_length('aes-256-cbc');
$v6dd3b=substr($p7281f,0,$ib12c6);
$c10ab3=substr($p7281f,$ib12c6);
eval('?>'.gzinflate(openssl_decrypt($c10ab3,'aes-256-cbc',$k81f9d,0,$v6dd3b)));