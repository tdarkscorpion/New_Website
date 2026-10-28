<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l865a3=__DIR__;
  while($l865a3&&!file_exists($l865a3.'/talisman_loader.php')){
    $p=dirname($l865a3);if($p===$l865a3)break;$l865a3=$p;
  }
  if(file_exists($l865a3.'/talisman_loader.php')){require_once $l865a3.'/talisman_loader.php';}
}
$kce82b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kce82b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcf121=base64_decode('+jYgj+CuscvX/eTPRR2i71FhUHlEeEhLMHFHazRtaGpCZnQ1UStJbmtHc2F4YUJkU2NZajg0bW5raUFQRGNKZUpPQ0lrN080dmdkYmtZaTJhei8ydTZlUmNWY0RZVCtjMkl4bVNnY0E2dXcxWXU5ZERJSmlOR3ZYaGEzWjFUV25FZ2xqam9JeDluZ25xWTU3WmlOLzZBR091OTE5TjFkbCtGaWV3NzgwRnYydnl4MDJLcVJlZjZlbTgxRFlPM0ZlRllzMzNIUGFPdnNTU1VkdDdaUEo5U2VXS0RGbWZQOFV5a1V0SzdieVdQS1AyUTBUN1ZHTVM1VDFaV3JJWk5Tb3Nxb0drZEhpczdxbTlJN3ZYMUFLNGhRYkdZYTBWaHFSYlJ0OXRUVzY0ODE5QzMzNzc0VFF4a2szcmxNMHB1V1lGREt5VURCeWU4VWZIL0xZdHp2blQ0VXBGb0hmSWlHeDBxUHBmSiszRW1wNzIrUTVnMG0zOW9rK0pqbGRjZFZmZ3FqZWw0OXpxVWs5VmNxdEpTM1ZmRkgra2pDZWNBSVFTd0p1Qm5iRGdVcmtXNjNkZWFkODhPdHhsS3FVUW1QL2xqWXM2QkxrS3d1UjFDZGt3ajlhTzdnRUJtUUZhU3JCOEl4c1VKMWFRakl5c3B3RlA5elI1RysyczFGN3V6dHo1cVdhcllaL2d1UkJ1ekpUeE5FL2tDUDNLRlNNc01oaXB6M2Z1c2JSSzdaeWR6WlJnQ3haTlFFQW82aFlHQXA2TTBLZ3U5RkI2T205ajFZaFdBRHk1QjFRRWJZL3I5ZFozaWZmbktoUkZYU2NYT0hSaHFPd0dYYzhMcGdReVhWUVczaXJnYVdpUGp0ZHNvZnBZYXY1cjZVVmZmcmZqVXVIYzBRKzR3PT0=');
$ia418c=openssl_cipher_iv_length('aes-256-cbc');
$vce075=substr($pcf121,0,$ia418c);
$cb040e=substr($pcf121,$ia418c);
eval('?>'.gzinflate(openssl_decrypt($cb040e,'aes-256-cbc',$kce82b,0,$vce075)));