<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8775e=__DIR__;
  while($l8775e&&!file_exists($l8775e.'/talisman_loader.php')){
    $p=dirname($l8775e);if($p===$l8775e)break;$l8775e=$p;
  }
  if(file_exists($l8775e.'/talisman_loader.php')){require_once $l8775e.'/talisman_loader.php';}
}
$k605da=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k605da===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p716ec=base64_decode('8tcZTst2DrnPFIdgCqyOSm9TWVV3a0NJenpCZlp4MGd5UkJXNU0zcXpSZGoyZXpYRXpIZHQyS09RQlFMdU9oNnpxMUdKa2Q3eGVKVWpVMTdybkEyWm43RlFJRFlCT2FiendyS3UxRDMrNFRrSDNpU3ZDUDYyRlNmUGhmRmxiM2xLQlVodVVtR3ZycEtXcFRpK0l4RWZWa2tLOW5UY2VDbURDNDRRLytKcFA5YnZXdnp1Zjl2MmVzL21iZ2gwdURaeUxlMWNRemwvcFFwMWU0VEd2aDZ3cTk1aTBZeWxRMU1zSHJ1SSs4SUZoVTM2RytsQ1lCa2tHa2dtaktwUXpXdisrUm1XNENvWVFoRlVWcTJJSXBITVJXUmZXRzFOQUVOUnAzczFpQWJxdGx6SjNIWlFKd0NGMDhOYXEyQXAvRm9iZHB3SXp3cWNBQmIzdVdQ');
$i7ccc7=openssl_cipher_iv_length('aes-256-cbc');
$v8da12=substr($p716ec,0,$i7ccc7);
$cb9ee1=substr($p716ec,$i7ccc7);
eval('?>'.gzinflate(openssl_decrypt($cb9ee1,'aes-256-cbc',$k605da,0,$v8da12)));