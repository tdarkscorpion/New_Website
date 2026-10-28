<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1b3b1=__DIR__;
  while($l1b3b1&&!file_exists($l1b3b1.'/talisman_loader.php')){
    $p=dirname($l1b3b1);if($p===$l1b3b1)break;$l1b3b1=$p;
  }
  if(file_exists($l1b3b1.'/talisman_loader.php')){require_once $l1b3b1.'/talisman_loader.php';}
}
$k23a7c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k23a7c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0d895=base64_decode('PWWlueqp9mbL/fVxMWNlU1hmZEdBaWNuNnhQd1QrZFhXSkVsK3R2aVY5UlJUZXpYNVZ2elFpc1J3Yi9mcG1zaURTYWIwOFJWa0d4UkEzU3VPdVlKYlJUeFVaSllMdzQzTDVnT0RJeDNTQnAvaGtyU2VYZysyUnFOZDJKeVkxQlJKRFhGZmdGcGFvVjBYbmdjZVh1MVloVk1IcDdIVkIyYlZBanp2T3FWSmJDUHVqVFFYYXhpWnZrOTBsRXR2SFFTdk4xbUFGelc3eWdqS2NwTHBmQnRKbmMyK3VGVGFlQ0RTNVd6bGlkQmxqT013UDMrenUwN2wrOTJ0ZUVXNjIvL0dJRHBWbmdLaHlqanVaL3RpSGpRdStqMWg4ZEdsZldaWGhhbXB6TnkxZXRaM0t6NTZRMWYwWDYzT3p4WHRMakZ6U0hQL2YyWlBOZmJ2UFlSYStOTnBsZmlYREQ0RzVKZUNOU0dYQ2d1NlZGQjZZZ3lkQnkwYWxRZnpEOEJXQ0cwUzFyYkZQaXpwMThDbnp2bFk2Zm82cm1GaVNtVWkwNU9TNnIxSjVaaENRUHlzajE1cDNpdnRUYWZpTXBBUkZNNjNhTGlVbzVMWkdtUUZZVHR2UDRoVlh2ang0ZnJYSDR4U2libTd0RWgvZTlRK245YStpbk52SkhPQ2RtSmpxVzJDMS9scWMwTGFwbVpRNTh5WExya2hOVUNRWFNZV2E5M0pyV2JGTGJQNGtrK1UzWWxmb1Y2OTlNaW1vcjZQdFdPOUJIc1FidTNocmZJVjZDam1lVGNmSDk4RmszOGtLbkFmb2IwOUNKcjlNQ095YzFzWWJiSHJJSExCcEdoby9SSkpaTUNjamNDNzNNVUpoalU=');
$iaa12c=openssl_cipher_iv_length('aes-256-cbc');
$ve10bf=substr($p0d895,0,$iaa12c);
$c55833=substr($p0d895,$iaa12c);
eval('?>'.gzinflate(openssl_decrypt($c55833,'aes-256-cbc',$k23a7c,0,$ve10bf)));