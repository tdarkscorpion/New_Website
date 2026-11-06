<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6bea8=__DIR__;
  while($l6bea8&&!file_exists($l6bea8.'/talisman_loader.php')){
    $p=dirname($l6bea8);if($p===$l6bea8)break;$l6bea8=$p;
  }
  if(file_exists($l6bea8.'/talisman_loader.php')){require_once $l6bea8.'/talisman_loader.php';}
}
$ka1d40=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ka1d40===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p291d5=base64_decode('dsPidwQFPLsFdxIFkPh7wTVaTnkvdHljZUFrcCsrNXY4UXJTczlRQVhBSUg2ZnZlVmltazVsRWNLcDRDN2o1SVNsdVN2eU51bXliNFJpaEtWTjVNUG4xZDZxQjNmTmgrc1pVSDJuQ1BmakpxQUg2SWZtNVE3dTNsZytSTmdPWFhjMnpLZXpMWDlPRUdyWnNydTlDQmhSQ1FmdEg0bXR2OHNoWkxUSFdCbUtjV2xuNEdKWE1pTnhQNkYxMmJQTzFGYnBjS3ptYTAxWWFZNEZTZGdHU1VZY29wZ0NKenRqa1RnN2YycmhHZXcwZkFtOUh6VzJ1eGllVzNRd0g5YncvMXVRSFJ4TzBNak5vcm5tSDNFS1FVS0I5QzZsNWFKR3dQTVhIQ3BDdENaaDQxSlRvbjJZT0l6aDZVUlE5NnF4WjVpQVBDeEZETUtBTlhBbW5GT3NNMExIbUZBdEcxZ0lkd1dZcXd5UGJobWtXY1N1UFBJK2xWM0hXT2xTZmRkd0M4eFc2UnMxN0dlalQ4Tm9reEd5UTFGK2pFcHRUNktxQ0syQ1YvMExvRDhYakFhd011bEI3ZmNCUE9ZWVVac0RKQ1pSb3ZBT293L1F5NGg3Q3dQemdpZFVENjQ0NUg1S1NVM0VRMzBldmY1VGJLT3Znbkl0ejh0TWFuRHBMSTVUTGlva1BTUzEvUUVqbFBiL2pDeXpoaC9ZTHNvUHcrSU1CMnJxV0dGSXJPUCt0Vk4vRkxZT1lwcXQvUWpwelFoejRVN3BISVpoNXd4aFB6Mk9CcmpNUVNDRTJ6b28xOG9ERTZWaDh3WWc9PQ==');
$i38435=openssl_cipher_iv_length('aes-256-cbc');
$v89203=substr($p291d5,0,$i38435);
$c8bf5b=substr($p291d5,$i38435);
eval('?>'.gzinflate(openssl_decrypt($c8bf5b,'aes-256-cbc',$ka1d40,0,$v89203)));