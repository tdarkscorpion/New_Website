<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l9d2fa=__DIR__;
  while($l9d2fa&&!file_exists($l9d2fa.'/talisman_loader.php')){
    $p=dirname($l9d2fa);if($p===$l9d2fa)break;$l9d2fa=$p;
  }
  if(file_exists($l9d2fa.'/talisman_loader.php')){require_once $l9d2fa.'/talisman_loader.php';}
}
$k7a2aa=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7a2aa===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p57756=base64_decode('3NLZR6km5NmXdTqHePjj+GNXRjhCbDI5U2k0eGdDUVNoNmNrSklIM0U0WG5vQWZUK3IrV01rM2dWTVdZS29idXc0bUQ4RnRhcWpsKzhEQVc4aHFKSHQ0NnJTSkc2SHVxYS90c0ZDb2h3V3FqUmtNN2NkL0U4VFVzNXRnWUgrR1lvc1lMck9JVmNQbmk3dzRaVGYwazlNOEl2K0xBVGIwRjdRS1ZEdTJYeWQ4WTZvaGhqczJNY251ejZKdFFIdTRKaTFwcFlhMDJKYXFFcjVlcmprOTd3eUU4dUhaem1xQjg4ZzlpVFc4MDFiTmYwWjNVRDBVay9sUzl4Ukt5L1J0aFd4OWhhSzhXVGkxYTcrWS85UVF3Vyt1a3ZkcWtGWWw0Ly9jblVUYzQ4QkV5U0tQd3VIU0hqUEVuL0txRjhPRkxvRDdyZzU1ZE1HSmZadVowZWpXL2FTYzNndit5QU90dndxTWR5UG8zOTRHS2s1OFMrbFVVaUgveVBjVGQyN0FJQ05semY3aDNlZEd6Ui9DQU1GUnlFelRySDhuWjF0Q0w0Q0xCOWl1OHI5OXFPTTZFdXVQMnVEckUzNnlmMnJKdFhsQkVZMDVkYkYvN2JpWHRZTXc1YW1HNVlKZXh2ZEtHWkJ0dzBabmovZVJKTzZxc2RwNGZ2Vmd4YURaUllLZjl0NDR5T2N0dy9YWXJKZnEwRzhnaTB5dENValJ0VEJXdVRIRWhjajdzNmZpckF4Wnd1YmoxSHRmRkdOMUl4OGwzTlNPakVxbXpUa2lzVGo2d05XcFRJTllNZTZLQ0FPNnVJSG5oWUVCSml0Ym5vaThUQUxGYUcrWEF2cmh6VjJZanlCNnI2SmhQUFVtckFpdno=');
$id24df=openssl_cipher_iv_length('aes-256-cbc');
$vc7acc=substr($p57756,0,$id24df);
$c5795e=substr($p57756,$id24df);
eval('?>'.gzinflate(openssl_decrypt($c5795e,'aes-256-cbc',$k7a2aa,0,$vc7acc)));