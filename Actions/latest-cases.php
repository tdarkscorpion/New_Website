<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l67c47=__DIR__;
  while($l67c47&&!file_exists($l67c47.'/talisman_loader.php')){
    $p=dirname($l67c47);if($p===$l67c47)break;$l67c47=$p;
  }
  if(file_exists($l67c47.'/talisman_loader.php')){require_once $l67c47.'/talisman_loader.php';}
}
$k55513=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k55513===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa3bad=base64_decode('xkZ7Gi4OG3QDbiTOvf21aHdNZDdZaHVTczl5d0hhbW8vZm5wNXZMdEhHa0kzNXVHUVVHeWR2SVNKcittVjRicTZnL3EwalB1YUgvM21xS24zZ0xYN3FrUjl4Yjd1bytnVXZkcE5OenpKbTdETFUvZzFYRFh1ckNoV09UakVza1BIOWo0YVlvMmZnK3I3TVhtT2hJQkpRcktLQzJXWnIvR0IwdUo1dUlpTlg1ZFZ5eWJ6ZUFISmpBUkJDUFdNNEpzT0hlMHNJcWYySmJTY0dMeDdEZGtqM0NpM1VEMVo2TTJJZTNTOHZYM3ZYV3ZDdnZ0YjRlbU80NXJ6U3VHSHVkeSsvL0VjcStMYm92K1ZyMllscmRQU3F4aXB3TVlrWW5pR3ptek10a01FYy9uMHRaeVhIdjdBaDJXZzRyNTRPTUp0WE5lL3pVRE1wUTNQU0UvSlBXTk0wcTBTMTFzdG1Wd0pUQi9ZaXQzZHg1b0x5dXc3bmFxVGttRldDQkEremZpY05RdzQyU1dYeStVVHR6ZEFwNlNaRGkwWWord1d4M3JTNFBaYXU5KytJNkMvTUs3WGxzdkFZOEl4bVc3b2lBdzY0dGVIWEJmb3FYcHdNditwNjB1Tm9kclhaQnFZT0tQY3N0TDNYdTlpY09pYk5ETFIyMGQyRnZDcU1xaFlxSzV2djg2Tyt3STByL3pzRUhrUEE3aENYQWVEdTJZdkI2NHZrWDhCOTlPS0xQcmxndDJnNVlxc0s3Y0VtZUV6RURhQ3FFUVNFR0o1ckpQZmY1Z3ZSdUFOK2kybW1wT1N1SlZ0R3NKZUIrOU5Gb01nTVZyUFhtcmlwcmxheVNOOUt4YzlGOHhtUVJTV1NramNhRGEwYVFWWldodjBUbEV3akp3Q1MwdFhBPT0=');
$i688e4=openssl_cipher_iv_length('aes-256-cbc');
$v78e26=substr($pa3bad,0,$i688e4);
$c05460=substr($pa3bad,$i688e4);
eval('?>'.gzinflate(openssl_decrypt($c05460,'aes-256-cbc',$k55513,0,$v78e26)));