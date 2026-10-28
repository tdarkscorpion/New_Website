<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4ecf7=__DIR__;
  while($l4ecf7&&!file_exists($l4ecf7.'/talisman_loader.php')){
    $p=dirname($l4ecf7);if($p===$l4ecf7)break;$l4ecf7=$p;
  }
  if(file_exists($l4ecf7.'/talisman_loader.php')){require_once $l4ecf7.'/talisman_loader.php';}
}
$k46fb4=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k46fb4===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcfd24=base64_decode('Q839SELgBkQVDXpqA0H6bDVQSkZUcTRGb1R3L3Y2dVFIZVRWWjZ4Vnk4dXcwanYwV2tjaWloZ2NvVkszRlVjTjkrcjZ3MGtCaTlyRjZLUXFJbkZxT0RLbTM4Ni9TQ2Z6RnJmd0M4ZGhCUllvcDVDTHJVWm5rM0ZVRDIwZTJxdUpoV3BVUFJQUkM5dDY3bUZpUWgwTmVUZFlxVmx4YkhuUUN0a1pvL3o0UHpsYXlZM3B4T0lUVVFndHJXWFFENmc3TmgrR0VDU2oxZVJ6ZGZCSExVSEY0N3dxaFoxaE1rMkphMmd0K0IycXZRcWpxaENOdnhxZXAyQndaMk1pK2FZZGtPbUZQMkoyTjZvcldlb3BHS2FleE5ucEQ3VzFGNzBKb21KckVVTmVkS1RUa05MWEdLR2pXdUZKYXgrTHA0MWFkbGpUWU5zdGVGalVwRHVIY2FJNTVXbTdML3Z0R040aDJ2OEg4bm1RUmhHWisxMkF2UE0wc0pyL1dQQ1ZoZWd5Vi8yejkwNHhyZ3dEUytsTVg2OVhzM0J3WGRGNDR0RytLS0dud3h4TE43WGpGem9uRC9nckRkQm5taDV5M1RueEhGSzA1aVg1MkpKOU5nVklZVDRseWQ0dE4rL2prSFl4SmpYSFFpcnBPM1k4R3paK0ZwalcrdjNjZUw0bUdhNW90RXhPWlJZaFBYZitiZ3dh');
$i99017=openssl_cipher_iv_length('aes-256-cbc');
$vd54b3=substr($pcfd24,0,$i99017);
$c9b547=substr($pcfd24,$i99017);
eval('?>'.gzinflate(openssl_decrypt($c9b547,'aes-256-cbc',$k46fb4,0,$vd54b3)));