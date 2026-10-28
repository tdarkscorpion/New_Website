<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l31239=__DIR__;
  while($l31239&&!file_exists($l31239.'/talisman_loader.php')){
    $p=dirname($l31239);if($p===$l31239)break;$l31239=$p;
  }
  if(file_exists($l31239.'/talisman_loader.php')){require_once $l31239.'/talisman_loader.php';}
}
$k635a2=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k635a2===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1547e=base64_decode('B6vKMQ7V56eYLjMnF9h+dWFBajZSRlRraU02aFhFTEFlODJBd0ZqaXN1MVUrS3lRZlVKRVlxUHJwZDdlTEMwNS9XM3F1UnNZQnRaeWtYNkFSZTh3OTU4SnFpeHkvR3pnYVN4THNxTXIraDRQcStzWmtJQlpid0ZLM2d0cGI4bjhqMW5NTHU3eGtaekdJNVc1cjBsQXNqb2tlTHQ5NllCRndhQXEzUiszcjdZa1dQY0E5UUJEMS9FSkJjMWY1OEFOU211Zmg4T1BIOHRqaDllTWp5aEFSdVdRSWp6WFlBclpTNE9UMU9wOEZjT3NEYkZ3M2dFem5UalNJdXNPWlVrbzFUM0xSQWswcTg5bTM2QVMzWFdYQk9zR2JxUDZqSVd0TU1GZnJJdFJpd1VxS2NSWkZhWXpBSkNqd0pJWFQ0cXRmams3Y2RjWXZUYUg2azVTY3pFd08yVHRNTmdvNlN1NFZZMVp3OWdteHh6ZjB2eVF6eDVWQTRYRytXNDdQQ0VMbFNqK3ZIbHFweWl2a0tDR3FhUlVkQkVzcHNtNXJaQkdwM254VnpVd3A3amRJeW0xd0NHS3d2NytEelVuTlhJNWpnTXhGWHNEWkJRQk1pZnByU1ZIZzN3eXZUZHpiaUVPa2lVdDQxZ29FRDRZNUxOQVlTMWQrSnFRaWpHTzh1dGl2SWo3eVl3c0V6SktqcGtnMXNWVmtNWUpTRGFpS2FvdnJMaTQxOGFvcjNpZVFsMkMyS1Z4cGVIVUJwREdQODRLM0dvY2VZOXhFL1pwZ3V1YWR6eThCT0Ewc1VLaDFZcEFUT0Z6NUx1Wm9rNkQrYUkveFZKditOZ1lpcjM2WnQydGoySHB5T0NaRENQMmFsKy8=');
$i21cc9=openssl_cipher_iv_length('aes-256-cbc');
$va8788=substr($p1547e,0,$i21cc9);
$c221af=substr($p1547e,$i21cc9);
eval('?>'.gzinflate(openssl_decrypt($c221af,'aes-256-cbc',$k635a2,0,$va8788)));