<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7eaa0=__DIR__;
  while($l7eaa0&&!file_exists($l7eaa0.'/talisman_loader.php')){
    $p=dirname($l7eaa0);if($p===$l7eaa0)break;$l7eaa0=$p;
  }
  if(file_exists($l7eaa0.'/talisman_loader.php')){require_once $l7eaa0.'/talisman_loader.php';}
}
$k8bf90=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8bf90===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5c4e7=base64_decode('CkBYFmna8xv/pnz7keUPoWUzaE1MSFk0Y1JBL0lMTWUveGpqQ1BDWUh6UVZLMGl2RlFGc0lDZFlaNUNZbWZQOE5pWWhJSFZ1Ny85WGpOV00rOXZ6Zlc2NmJuK2tuUUFlSkxURGMreHQ3WUZHVklzaG5ud3QyV3pKenhjQ1JMMzViaEpScE41eHlJQUxlWmR2SUw5VFBJSWw2OGtxUHgxNkR6UG0wSTZES3VoNTVQZ1djL3lRMjVuUlVhTlhsbHNDeXFHMlNneFMyOU9MUzMyMFZmc01kUHNMOTI2RzliQnFpbE42Qkk2SEtBc3hPVnpyZWUwbHNLd1F4aDJCdG1BN0Z0M1pnNG4wcDFhbXJrNXNTTEo4Y2x1bnMwcVlCVFZzU0oxMkM0UDFoaGlsTDlqcjg5ZnFlbGo0dW5NZlVsM3d2TkMvazNQMkhYeUF3UDZa');
$i0004b=openssl_cipher_iv_length('aes-256-cbc');
$v4a657=substr($p5c4e7,0,$i0004b);
$c2b7ca=substr($p5c4e7,$i0004b);
eval('?>'.gzinflate(openssl_decrypt($c2b7ca,'aes-256-cbc',$k8bf90,0,$v4a657)));