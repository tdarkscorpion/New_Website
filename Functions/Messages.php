<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1a61f=__DIR__;
  while($l1a61f&&!file_exists($l1a61f.'/talisman_loader.php')){
    $p=dirname($l1a61f);if($p===$l1a61f)break;$l1a61f=$p;
  }
  if(file_exists($l1a61f.'/talisman_loader.php')){require_once $l1a61f.'/talisman_loader.php';}
}
$k3ada8=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3ada8===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p106ee=base64_decode('WwjTs9o5fXNHIlXHrlIcpEkwU0RTUzhuRE1nRXl2Y0Z1OCtWY09nUlJpbVFKVVNPSVp5S05ndDQvQ2o0bWJhZHlRVXVTY0tvQ3ltcm9UTzZmRE96c2hUQitmc3FFVk5ZMlRvbm9KY2M2Y29TRzM4Z2NxcHZnQTR1U21FaWV4cGhEOTNqSzd5MVRiL3BMU1BiSTVVVlVuS00wYU5YK0xFOFR1cFVTUlh5QVQwYlBEVFFzM2diUXBIS0dPRUwxYXhEcmVONEJKYkduMFV1aXgySjdMcEE2cmMzaEoxODFLN3VLaU9pU1FYbGdpa2JvZUFtQnUwOFd0T1pBUVAzbVArNDU5STVrR0p1NlI4WHFlTHJXV0o5SVZVMlRuYmpJTVpiWHNFVkh3clhRd2d0bmdmSk5XT0lFMkp0S244PQ==');
$i2c516=openssl_cipher_iv_length('aes-256-cbc');
$vaafe1=substr($p106ee,0,$i2c516);
$c9c5c1=substr($p106ee,$i2c516);
eval('?>'.gzinflate(openssl_decrypt($c9c5c1,'aes-256-cbc',$k3ada8,0,$vaafe1)));