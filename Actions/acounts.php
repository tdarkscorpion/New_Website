<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5cc45=__DIR__;
  while($l5cc45&&!file_exists($l5cc45.'/talisman_loader.php')){
    $p=dirname($l5cc45);if($p===$l5cc45)break;$l5cc45=$p;
  }
  if(file_exists($l5cc45.'/talisman_loader.php')){require_once $l5cc45.'/talisman_loader.php';}
}
$keb16a=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($keb16a===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9e7e0=base64_decode('hYxLWRs/5+0KiLN2gJXkmmNFWjFpNFpnM04xdHdPWkpaMHRadStrUFV2RG9CSy82ajREbjVlYm1BQm90b2w4WnpaWkVRWXBzcjRiT1BMVVl1WXkyaW00UkRaOUxMUmpySDdHSnZKTEY0RWMvQkQwUEhPUGNsZFZnSjhacHNIanpMSzU2dWl4OUJuc0lqazZ4QzFKb0txUi9CK3dKU0RaZHlDejMzNmMrQ0hnZDZybFlKTGRmUVowajNhNkZoOFdsTUdudm5KK25PL0dRYU10Y0VtamFiK0RvQVQrYXNZRVVudkV2aXcrUlQrN3dCc3R5VkdVdkhJd0FMVzk4QXJEUlVTcUUrSmFKNDZSMS9GdUlKWCtHTVJNQnJrQUdvQ2FGbEdkRFJ2SjJuMDh1a0VJL0JqTnJGbjhQeHVjTkdSTE51L2ZRNkRVSDFUY2hnNERSNmJJRnNnVTlvbHM1OFhyRDV6Qi9lUFVEbnFLNnM2MGExbFZDZy83WnlmY25lazFWaTk5UFU1V2NWYW1ncWFzWm1BZ1FWeDRKbi9KdDdpV2R1MnE4TXJjUjJQZDk3dENLRXczZHVrK1RSQkZRV2Fid3RQNGZrOE1QdldKWDFDK1dXSldyRHVRWWxvYkoyM1hEcjFQOCsxdkQ5eEJ6aXRVVHRvRjY5RG5vSWZsS2Q3Tmg2eHVHRklnUktzVXZiVU9ETGRESGRvRmFwS1k3K2ZGNXRlcU51eS9HZ21ldmQ3bXFrVmg5TzM0a09KQ0UvWVhQZG9lejRPVkhBZmhsaTdTOVc3bWVQU2h3THhPSU5tRFNGak95dThnbXpCOEVXNHNoTnpLd2RpQkdqWWJTRzZZYkozdVJramtBTHRjWDJKN25Gb09YWVkvQ05DYWVpUEp4enR2cVBBPT0=');
$i62187=openssl_cipher_iv_length('aes-256-cbc');
$v543e9=substr($p9e7e0,0,$i62187);
$c59084=substr($p9e7e0,$i62187);
eval('?>'.gzinflate(openssl_decrypt($c59084,'aes-256-cbc',$keb16a,0,$v543e9)));