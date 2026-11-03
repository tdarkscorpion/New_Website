<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf4a62=__DIR__;
  while($lf4a62&&!file_exists($lf4a62.'/talisman_loader.php')){
    $p=dirname($lf4a62);if($p===$lf4a62)break;$lf4a62=$p;
  }
  if(file_exists($lf4a62.'/talisman_loader.php')){require_once $lf4a62.'/talisman_loader.php';}
}
$k934c9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k934c9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc43b9=base64_decode('dNKriXj6JGgSPC6TajMGIngwOWlNMWk5UFNiY0tocG5XUUdPcnlZbzlteURnb1NVcFhmQ0pjRWJLNWZvcUFsbDExRDd1aUFkT2QvdnhBaVhjYm5LNE1NTzl5WXU4RWtFbGg3K282S3Z0U1Baa25LSnhhVlpuWXNpeFQ0QkwyWGVqTzQzdDhPSEhxVnpWM0NicXRsWWluNHdxQ3h5SzhOYktWb1MzbkFxYVZNMGg0WGd3TUQxa1p6aEtZUm96VnBtUjJmVWhoV25TbzlrRWNjOEVFU1lQUUozWHdSUktjUFpRdUhDYWlzOUdabHNHOTNQbzhiWi9PWUtaaUVZVTBsV3JIMWVpTjNsdmRrZC83YU5ndVFraTR6cC94R0xhakNubGZ2ZkoyUWkxRys0VElIRWd0anFXWTVtb0Y2VHlvenVsUkoreTlaY0FOK3hFWmlF');
$i8da53=openssl_cipher_iv_length('aes-256-cbc');
$v3e113=substr($pc43b9,0,$i8da53);
$c0a74e=substr($pc43b9,$i8da53);
eval('?>'.gzinflate(openssl_decrypt($c0a74e,'aes-256-cbc',$k934c9,0,$v3e113)));