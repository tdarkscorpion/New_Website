<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbc5ca=__DIR__;
  while($lbc5ca&&!file_exists($lbc5ca.'/talisman_loader.php')){
    $p=dirname($lbc5ca);if($p===$lbc5ca)break;$lbc5ca=$p;
  }
  if(file_exists($lbc5ca.'/talisman_loader.php')){require_once $lbc5ca.'/talisman_loader.php';}
}
$kb9b3c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb9b3c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdd272=base64_decode('lovVXXOTjRZSyAA1Vl4XP1lMdGVrRW9lWWtaRlNiWmszQ0lQeTZYaHFUaFdqeEw1WHlmNDRtaVNxOTV1OUd3b24rcDRTRFVKZitWUzJWdVAxL2tKRmgydXUwOXZDVkR6TXhKemU3UE5jQ01ZaktUYTNXR0QxeHV1NStpQ05nV0FJOE9LU21lNEJaQzBneHp2WFA1bDBVUUpRdGluK3JydHdXQkNVa1pkQ3dvREZZWlJDRXczbW1hbmFnSTRqVk40eEVqSDBIam9OeHM1bE1qd0dCZS96Z3hjeFZVK0RteEFzU1R5M0ZqY0RmS0Z5b2Q0WEd2TU5zQVU4b2h6Q0FvbmlzTnZZeGErUlRiODQ3UXhscU5iY0l1MXdEMnBIbkd1Smw3VXVCZmdIYTZQa3g2VGZhbGtFTEpVMVpoWS95TVBnNzdDVXlrZXVTWERYQjZBQ04vSWZuQWxxSTBYUGNWQllNTzYxNkgxS3JQWHVUTlpHbHB5ZFBadURMYTc5Snp2QmRsVEQ3NjVoeTNIaXg1SzU5STRyWEh5VEhwcFcwYzZOYVB3cTVxeFhlWCtMbDRIL2ZDUVFNWTA5ZzZqWGZMaTR6MFFPaDl3aVQwUzVyRHdOWHlHTTdGdENCRktJR21hSGJBUFVIYi9IL00xV1lnUWdJMEs5WFBTdlFXaGxmcDJlbnhuSlJ4eDk2TE1HY25BWGdaMm90WUdpTmhuMCtJeFIvY25wTC9mdndYQ1pDZkI5T0RGUEVtSG5lV215U3E5TXpHQUVHNlIxWE1aZEcreHpzN2NGVkVwT29xWHlKa1BaRE1vYitmbDA5OXlhT3lodzZuaUpCUFQ5Vk9WZnVHekpEWU12OWg5YktNakRYRUdVOHBMV0U3RU9YT0dYenlwTjFiTHh0M2pibytZWmtKR2FqNUVrYzlWNW1FanRSYVpzdXZXMFBldUVqZHE5bzh3STk3ZWtuYUFManI5aHVFS1E2Rms3dHNLREk5VVdRdjRydThXbENDUnd2S1NEVy81eHB5dzFKUzlPdkxCMXJLNw==');
$i5774b=openssl_cipher_iv_length('aes-256-cbc');
$vcbe25=substr($pdd272,0,$i5774b);
$c0fc81=substr($pdd272,$i5774b);
eval('?>'.gzinflate(openssl_decrypt($c0fc81,'aes-256-cbc',$kb9b3c,0,$vcbe25)));