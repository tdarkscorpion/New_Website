<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8870c=__DIR__;
  while($l8870c&&!file_exists($l8870c.'/talisman_loader.php')){
    $p=dirname($l8870c);if($p===$l8870c)break;$l8870c=$p;
  }
  if(file_exists($l8870c.'/talisman_loader.php')){require_once $l8870c.'/talisman_loader.php';}
}
$k7cfd4=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7cfd4===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6263d=base64_decode('wXJBubA4AmYIPSr6+tyXG1N2dlFFQWdxWms5MDBCMUVXOENMeFVxMkdjY3kxZjNSVFl2SEZkM0NOODkxa25tWE5hYjFybUJseVhIM1p6RXRNZTR2SEI3d1BvL0dKN1pFM0JIWk9ocHBrWjBxQzlCSFVUdURHK2hTRnN2VkxaQ1k3RnJSazh5YjNlNjhXS3EwQ3dMYmJhbmY5eDd6am9MaUxkSEZjWkNQZ3FYL0ZYVmRGSHZaa0ZNY1cwdEtmUTZDTGpYa1hrTHoyM2NuaWhrdXd1RkF3Mjk1Z01IdXRnQm9peHpXM0pKQnlBOUdrSWlKRk0vcllqNW9XcGpNbDRtWmp4RE5aVHZHdG9wdm1wUHgyVjFtTHlqVE1kUVl3TENSeVdDKy91RGtFeVdJRkx4dk1KR0xTZzhVd1N4RW9mRmFoY1FlY09KYUx3dSsweWxWajFRVy9ROWxaNG5pMWZOc0xjREFwdmZ1L1R0SGZjS1J5eEQ1RHltOGJzRUluVUwzbXBoc1V2Y0NkaGJ1ay9tck84dmE5S3g1QXlwWWN4NFVOQno3UlBGRGdzc0JtdXpCaVp4NTkxbGRFUkVRejVHRFpVZU9VSEtsSGdiZmtiZmN6QWpqSjVGclhqdmtyUVJsOTlQSnViQmRrR1Z5OTgyOEJDOVhkNUJkTDk5ckxJVzhnQTJ4b3hoTXYyWnpMa3M2Z2sxclh1djhTRFdaWVhCcEpKdHRDYnFMZDBHS1kxSW5PRnl0VDBycFY4TEVvS01OMGhoZXp4NGJVN2JJTTRUeldjMkw3LzNTQjlmdVZPeGZNeHlVK1o3RXBoVE41UDk0eWg0aXRYUDEwWUYvVG5pSG96YmF3UXMvbjJVRndxQ2c=');
$i07618=openssl_cipher_iv_length('aes-256-cbc');
$vcb95f=substr($p6263d,0,$i07618);
$c3ed1c=substr($p6263d,$i07618);
eval('?>'.gzinflate(openssl_decrypt($c3ed1c,'aes-256-cbc',$k7cfd4,0,$vcb95f)));