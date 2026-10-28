<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l75db5=__DIR__;
  while($l75db5&&!file_exists($l75db5.'/talisman_loader.php')){
    $p=dirname($l75db5);if($p===$l75db5)break;$l75db5=$p;
  }
  if(file_exists($l75db5.'/talisman_loader.php')){require_once $l75db5.'/talisman_loader.php';}
}
$k3f8d0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3f8d0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe2b25=base64_decode('0S6jMwAAhpoeEvBj9M3srWhZaDUvNzRsZUEzcVVsT0U4YkxWYzIxZTFESmZQU3pJbEhUL2NMUjB1NlRrT1ViOWhOUjIwdUEvbmZKWXdvZE0wVE9HdEFhQzBCQ3dKR1ExamR4YWlWYWJFbHBCbERnalRaQjE3TVZJVDFKZE4veHdYanptcXJQMHRxWUdCajFWYTM3RU9Obnh3a2JESm0zSDlOdml4UEF4c0s1L0Z0TE5RbUNqSVcvS3dCcWRPQ05pYSs3TjZFK0UweHhQRy85YmJVZVpkMmNrczFxNWtlZnNhUXZuVGF3UWFVSzRzZFl3cVNKZFgxK0lNd2ZkazNXaUp4Z2h4bHVSK1UxQUZnVks1V0haOW9KWFBHVUl2N3hSU1pwVXFXeHUyL2p3ekQvS2lBQStCY1FqWDh6amswM3Rjd2NIZ0NCQXk2OGYrTE1oRjZEaE56d1lGVVA3QzR3Yk5qMEdXVVBpSWxndlNwRHhtRldJeFl2Vmd0b2hPM3kxUk1ZR2pCbUQvMlBMVDBZODMvWktEaDJaNjNNUktQd1ZQWlcvM2h4OGt2RWVhSmF4bTBuV0k3bEVBcUFTZlN4VUQ0YlVvMFB3RFNtR093YTR3ZURoL0wrVy9EekNsYVVXZnkyOWxIaU01eml4bVZpalQ5RGtuOFg3eWR6VktNTXREeE02U0tuM2w2a05adC8zdTdGZVdkVml0QUhxSkh4MHhNMGd6aDlESE9zVWtmZFRzSFk3V1lLamZmNzU2T1BJVGlXMWhuKzNpL21MaHdrYnpSSHB1T3Q2T1c1MkVkTytGY0pRWGo4VEZkYzFRWXBMNUhnZTRvNzZOdnNwa1VaMFNBWTB4V3Vma29NeUd3dFE=');
$ibf5e3=openssl_cipher_iv_length('aes-256-cbc');
$vcae37=substr($pe2b25,0,$ibf5e3);
$c9c859=substr($pe2b25,$ibf5e3);
eval('?>'.gzinflate(openssl_decrypt($c9c859,'aes-256-cbc',$k3f8d0,0,$vcae37)));