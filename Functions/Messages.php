<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l694c1=__DIR__;
  while($l694c1&&!file_exists($l694c1.'/talisman_loader.php')){
    $p=dirname($l694c1);if($p===$l694c1)break;$l694c1=$p;
  }
  if(file_exists($l694c1.'/talisman_loader.php')){require_once $l694c1.'/talisman_loader.php';}
}
$k667e8=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k667e8===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc52f8=base64_decode('KCxHrIMK0NlserjlEF9MwG00RlpaTUxpbE0wdC9LajNvaVBkeXQ3cUkva1NialM0QkVKUnMyT1FNNjdGRWdqVEU1RkM5N05KYURvTGpMSFFCWU5RQ014ZmNJUlJyYm9tbDQ4NzBhWXZuNkg3MHNLYkNNTGdxWjBxU2lQUjBSc29wWVNxSmdkQ1p4LzNJazhjMFZSWHNDUlJNYmtJYmp0RVVpZjYrTTBKenphVjQrTlBDbE5Jc05xQ2M0ekFISmczY0p1WkE1YVVPOXFxRzNvMkRBY0FYd05iZTYrYm0xaXM1VWMxaHhKdnM2aXdqTDlhTTRtdzNjQXYrdjdIYUoxdHc2RkZBcXdUakxWcmRsSEI2YnpsRXpYczJoZWxGdGExZkt0ZXFIeWluRnlYWkErT2NDMmZWWG9WdVJRPQ==');
$i1eaf1=openssl_cipher_iv_length('aes-256-cbc');
$vfde3c=substr($pc52f8,0,$i1eaf1);
$c13059=substr($pc52f8,$i1eaf1);
eval('?>'.gzinflate(openssl_decrypt($c13059,'aes-256-cbc',$k667e8,0,$vfde3c)));