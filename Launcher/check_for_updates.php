<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4c524=__DIR__;
  while($l4c524&&!file_exists($l4c524.'/talisman_loader.php')){
    $p=dirname($l4c524);if($p===$l4c524)break;$l4c524=$p;
  }
  if(file_exists($l4c524.'/talisman_loader.php')){require_once $l4c524.'/talisman_loader.php';}
}
$k3c562=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3c562===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6620b=base64_decode('WCqnTFNAsOS/PaMj/xm9FmFaTlJidUltYVRLQ0ZYbndybFBSYjhpdHZUVmpheTRhdzBORFFUQTJGZmxaZFlJVXFXRUlKeUxKVWxhZHNmSEU1Nis2bmdnSkhXZDduUlRoNW1PdENTTzQxdnJrMjU5alhqbW42M3VqSlA5NzQ3Tit5U1E4VXBKbWRJQjJKd2g2ZnRlNUUvTFNzRkVaT0JiMEJKZFFSNmVYWGxwM2FLamZEVmY1NkxQNWdXdTVPNElpYU11OE1vMSthOC8vOWMxNVhlWHMwcFhhc1pWbkFEVEEwNjNrSlMzazFkZVlZUG5MTzNBbmo4QXZVKzZMUThMT2g1T1kwZ09nUHE3OFVjZkV5TG9tUUFxMjh1RHZudDBjVDhjTS9ib3M0R0tzcnFoWjVVYjFlMFpYMGJldDJ6ZmFmWjJqZDhVWjZ1aGxZWjhtejJBV0VyWEdDeVFPZEFQTDlTVHUzTnFsc3lQenlhQnNZZmNYTzNYWUU5anQvQmpnSXY3Rks4REJQNkpGTmlCUGNyYVBzb3NwNDJTVjliZVgrWkNRTWZUZFRnSmMwMkFFVTZtWGZ0S09aOFA2bkFLL0prNE14cERxd1FjQWRkUHFDVW9rNG14NU9ZMGNoSm56YUZXWTd2QW5jaTFRYkFIZHQzQzlIQUlOdFZYMU1YZHhrVWRjYmhSQWVvamdVbDFMeWpuQ2dPUW1IWDBLWjdTYm1MaHd4Y2I2SXBadFQ3a3JSVU5jdFQyenZxQTRqeDNYNFVhekM1Y3NwUjVBTjI3TE1rVVYzcC9Hc3hDa3JVZGNudkR2enpTYVFYYVRFSlhqZVR0a2lDM3B4UDBZTTNZdGVPYVNlZjRnTDJJakRaQnREZDM1dE56WElrbGlITkVOSW9MMHhXZlptakhiZDNuOEpuQVhGSGJWSTFCNjE5SkJBNVVzRGQzb3pTS2lJd2E4SEhmUVpKbkFUbEtlcmhCYUxRR01aSXJwOVh0SE92T1dGRm1ZZFpTQ2RrUEdmaDhaQmJySWVCVVc5UC9FbHZJNG15aEdRVmdKTlhlZitaZHl1Tmo3VytsVHNmVlZvbUxpb0RtWDlWMWd5WDhOOEJxd2RSK3p0a211Y3FzdEdaa2RhenE0NndDeTlURUJBVGFwcU4yZXVBPT0=');
$i93647=openssl_cipher_iv_length('aes-256-cbc');
$v5d54f=substr($p6620b,0,$i93647);
$c855d0=substr($p6620b,$i93647);
eval('?>'.gzinflate(openssl_decrypt($c855d0,'aes-256-cbc',$k3c562,0,$v5d54f)));