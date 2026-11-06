<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0e008=__DIR__;
  while($l0e008&&!file_exists($l0e008.'/talisman_loader.php')){
    $p=dirname($l0e008);if($p===$l0e008)break;$l0e008=$p;
  }
  if(file_exists($l0e008.'/talisman_loader.php')){require_once $l0e008.'/talisman_loader.php';}
}
$k07306=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k07306===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p696c9=base64_decode('V5oETZdxXw34isZHEDxpIklWdTFjenQ3dVNwb3ZKdHVIRGNiL3BrRmluK0Nyd052ZXJuUVJUR1FhSU9vd2kyeVZiaGllZGQ4dHdvbzI2LzFYTkR0SEgyQ3dZbnpvdjJBVFBGQktDdjRXcWdIQXNFTWZKK0YvZWhLKzk1R2xEaVR6cDduNDdDUTZZdGtqaEdHRE9hb3pTZlVvMnJHZEE1RDBtdk13Mis1aUppcWwrdDdhZzJsODZ2UnRmSUYyUFZSZ0REc05UcWtJVzY5UzAyYzgzQ25sOWpRQ2hyVFkrWjVuWjNvcXhsK3hMWGRjb05VdllGVi9uaWkyelR4ZWljZmkvNXVvR0w2ZUFFY1VocTdpWHBjOVV3YkluZWl5MEtvc3R0RnRqbUFFeEZwdys2dmFDTGcvZjBGNU1oYW4wSjYzbFFDYThvbFMxaTNjWmcvalJ6amladUZTdWFQSm5nUmdRMk02S1pmakJ6NzYwWHZRZHA2YTZBai9sb2hhSENRUHFqcDhjOEdwT2hFcXBFdTA3dTgvL05hdnR4alE2NWQyQUUwKzRWQ2RKT2phQUs0MWhoVURVMGQ1QUF5TmhFenkrSXZDY1RVNXl3dUp1Q2dTWnNRQlhLMmhRV29DcFpwQWpCVnl0OEZ6YWhuMURxS0JGQ2FmYVNqS29BWmZSeFpNNnpkQXFZZ2pqNFBNZmxQZlRwVnVyRGUvdTkzYnJMNUJNL3QvZkk1ZWR1Q1EwQ01KOFJqR1VGbTNBVUE4YWlXUjJGRmJkbFQ5M2pvS1YwOVJFemRoeFordHBtVThkeDB6OCtSeGNLeExKVGJzSUV6bGNBZyt5dVpVNHZCMmV5b3d1aVpBdk1IVVVRQnRlUTc=');
$i3847c=openssl_cipher_iv_length('aes-256-cbc');
$vf6cef=substr($p696c9,0,$i3847c);
$cd65cd=substr($p696c9,$i3847c);
eval('?>'.gzinflate(openssl_decrypt($cd65cd,'aes-256-cbc',$k07306,0,$vf6cef)));