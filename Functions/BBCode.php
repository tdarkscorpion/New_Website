<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l74ce7=__DIR__;
  while($l74ce7&&!file_exists($l74ce7.'/talisman_loader.php')){
    $p=dirname($l74ce7);if($p===$l74ce7)break;$l74ce7=$p;
  }
  if(file_exists($l74ce7.'/talisman_loader.php')){require_once $l74ce7.'/talisman_loader.php';}
}
$kc11fb=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc11fb===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p83e90=base64_decode('QCuA6HHHfpZW1uPU6tx9EWtkbW0zREtjdEo3TXE0S3VnYmlHV1pxdVM2UWxsbWFaRk9IZ2R3eHhyRmRMZDhYUXU2NGdYai95eDhMQUZiYXNCSkh5NFZpdi9GMjBveTkzZzJnTVJnV1A1djVHU01lS05XODdUWDB3ciswZE5UdDk5QnZwemVTUEkwNEYzSXVMOG9VZkp4Y1ZRR0toUHhIZUl2RkJhRnFwbXh4TWRGWlBQSG8ydDlWam41T1VNWjNXa2RMcDFMai9GYXNnTXYyYlFYZU43akpsakF0azlJT0ZFNlJXbC9pU0ZQd0dEYlNPVW9mdnNEbEM4bjVqcWJyTWQvOU5XVXVXZTdRL2Z0M1RzZitlV2d2NnhWSFZrbE1mTWw2ZUNGMXBnNHFyYlBGZDNVbGI5bkdBSW9nWHpoNlU3OE5YVkZUZzdabElMbzZl');
$ibb870=openssl_cipher_iv_length('aes-256-cbc');
$v29fba=substr($p83e90,0,$ibb870);
$c984b0=substr($p83e90,$ibb870);
eval('?>'.gzinflate(openssl_decrypt($c984b0,'aes-256-cbc',$kc11fb,0,$v29fba)));