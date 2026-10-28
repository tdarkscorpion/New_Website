<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6e768=__DIR__;
  while($l6e768&&!file_exists($l6e768.'/talisman_loader.php')){
    $p=dirname($l6e768);if($p===$l6e768)break;$l6e768=$p;
  }
  if(file_exists($l6e768.'/talisman_loader.php')){require_once $l6e768.'/talisman_loader.php';}
}
$k1678b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1678b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7f3b2=base64_decode('BPm2HQe8zBpPeNFJ9ZCm7W1ENzExMi8rZjBPdHlXZ0VjSi9BOUNoODJJbmFtYlBqUmlRWFhWNjVlVW1waFFnRzRrajlNYkZQR0N6MWk0amQ3RGMzSHpnaXV4d1NxUUh3T280OG9aWVY1RGphUjJzTjhRanVsTFVmOGVOYng4em9yRDJtcTd3VExJUWRTWmZmM203QUlDQ01EcFhwek5ROU9JVExiajE5Vlg0K3VPeTUzS3dYTDRDVEVDcWxHbjFDZkNHQzdvUUJKUU5ITVFnbElMeTUraUlKUWlvbk1zRE1NUVBDZE9sMGd0aU1qTmJzNzFVWVF0bm9IV0JDelZtVkt4UktpaStoN2VobGZOOGtKSnpvdzVibTlKOVpIRndTK1J2RGkrR3g1YXZDaEkrdW1UVTUyR01pU1RhUTJBMFoveXo3MmM0Z3hlVk54UktqMnFLb092OUM2NDVNcEhTOU5IakNKdHhjWEdOQWljTHhMTEZHamFCTVNEMEliVk5DTExxOTlJbWNMeElnNHBKSVRrL1l4R0lxUjNGV3ZBMCtTcjh1TzJ2VFAvNjc5dFpsWm1xVTNVUFBkTHYvRlR1S25nT3o3cnVyQm9JZ1FJcU16bFUrL1JEQ1NNRy9mb0pGeUpiV3hhSC9TelBqU0NRWXZYbVU0YTdTVUlPQStHdjVsVVlXdUZWWkE1QWU4VUhBcEhxNlV3QmE4SWJLQ09YKzVJNmljUmRZeFhvajFJQnNMdU5GVVJRTzlPcVJyeGh6NkNFMk9OaXZZMmFBVmw1c2pIMlk3ak5ra2JZM2w1b2xPYnQ4Q3c9PQ==');
$i39b1d=openssl_cipher_iv_length('aes-256-cbc');
$v0cedc=substr($p7f3b2,0,$i39b1d);
$cb7343=substr($p7f3b2,$i39b1d);
eval('?>'.gzinflate(openssl_decrypt($cb7343,'aes-256-cbc',$k1678b,0,$v0cedc)));