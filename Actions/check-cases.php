<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6eb82=__DIR__;
  while($l6eb82&&!file_exists($l6eb82.'/talisman_loader.php')){
    $p=dirname($l6eb82);if($p===$l6eb82)break;$l6eb82=$p;
  }
  if(file_exists($l6eb82.'/talisman_loader.php')){require_once $l6eb82.'/talisman_loader.php';}
}
$ka2b49=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ka2b49===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pda49d=base64_decode('nPr0yQsiDzv1RklVnBO9T3BqNmFNWktjRW5PZkR5VTE3amJ1bEdMbTlJQWJkdVVhNVQ0UzdzaE1ZaTBlQ21WQk1pdFNCbGFsNnJlL3VvdUFtZ0RMYTV6dENtdWhsQVBoQ2RoNSt0VjVRQUhGWlJkYTM0NkFPUVE4b2FYYmpHWWMrWnp6WEt4S3ZLZUxLSFJ4THZSd3VhcmpGODZUUk96bC9ITW1LdVFVZUJDOGlxU3N0a0lDb1ZJbStIdG0ycmpsaUJ0RW1xWVdqQVhkYjVraTZWdHlKeWorSzFCT0lJbmNkWHppLzB4RTRTMjFRTTBLeG1sOGlqNmhNODFUTDRXR0V3aGt5UWljcjR6RkJScmw5UlM0QTRaUmsxZEhVRlk3blp3SnhybU0rOExEdkRlZHpJSCtuWHo5cFh1RHM4eFB4emFEdDRvUnp6WTEvK0ZOaThiUk9GeFlyZ0NDVE0xYXh3NXk4ODROK2thL1BKVHJWYS9DbmxNY0Z5NW4zUWNSWVBJSEVKaG1EZzFuMUJydFd1U2JzK00raXQ3eVEwOHMyTXp4aEJvWnkwTkhwMHcrRUFTTmNDNGUwSERJWTdvVlNVejRnM1gyM0psendEOGxkdzJ0ZytyTzBNaUlIM2lITzhzZXhJdnZIUFRkZmYyYzZwM29WdGEvWm50aXE4UVpENTk5MnJaY2xZd1ZBcEtNeUtwREZhTVMvSWw2ZUU4WEV1eHgxbGJ6Y3RUcllIYmRQL2VvTVl4L0kzb2FVOVNIaFpXaUkvSDVxUXh1L3FIYTl1cm5TSjkvTkpkc1JibUlSYUIwKzhSY1BGem4zK3BSOFUzY3ltYzBXUlJ1bUFicGlvWTREb1lJYmM1Rkx5YlY=');
$i63586=openssl_cipher_iv_length('aes-256-cbc');
$v515e0=substr($pda49d,0,$i63586);
$ca38f4=substr($pda49d,$i63586);
eval('?>'.gzinflate(openssl_decrypt($ca38f4,'aes-256-cbc',$ka2b49,0,$v515e0)));