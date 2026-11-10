<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb25b1=__DIR__;
  while($lb25b1&&!file_exists($lb25b1.'/talisman_loader.php')){
    $p=dirname($lb25b1);if($p===$lb25b1)break;$lb25b1=$p;
  }
  if(file_exists($lb25b1.'/talisman_loader.php')){require_once $lb25b1.'/talisman_loader.php';}
}
$kd7819=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd7819===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p53490=base64_decode('v4Bx4h6Uifq52my136JajVlDRnNUR0hnWmNFUkJ6SE1DRjdLMytJVmE3aS9zZnUxMG1OV3lsS3BYamcxZ0c0RTJ5SVhiRU5zYUFIU0ZKNCtXRUs4dWpBNVBDMHUzNWZNZlNUckEyaDZYNkI1cW5OZldkNDZBend2eHJGdlZTQTlZUW5DYkNRYjBrdEsvVXYvOElrN3k3U1NJcEhBT29BV1djS3Qvb3hvYzFOYWpJNkdZb2YvNWtXbkllL1RhM1VPQW1uS0JEbEVkK1NwUFhMbkY1Y2x5Q1kvam5lb0VuUU9kZXl3M3F2SXZvQVVXT1JrUVVIbEJXY2V3dExkWEs1VXJaWm9qUnAxYW42cDl5MXQ5dHJxVXhDKzkvNkZnY2t1NHRGQVQzdkZPN05pUm1FZ0tPM1Q4WjBUQWNvPQ==');
$iafb74=openssl_cipher_iv_length('aes-256-cbc');
$v45600=substr($p53490,0,$iafb74);
$cf51f1=substr($p53490,$iafb74);
eval('?>'.gzinflate(openssl_decrypt($cf51f1,'aes-256-cbc',$kd7819,0,$v45600)));