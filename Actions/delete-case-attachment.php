<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7456e=__DIR__;
  while($l7456e&&!file_exists($l7456e.'/talisman_loader.php')){
    $p=dirname($l7456e);if($p===$l7456e)break;$l7456e=$p;
  }
  if(file_exists($l7456e.'/talisman_loader.php')){require_once $l7456e.'/talisman_loader.php';}
}
$k860b1=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k860b1===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p13397=base64_decode('Psbs+vhTBwnq1cwFdqhqMHdFV2JZdG8wbnd1emg5UUQwS0VRQ1U2UmJQMjJpUUE1YmFTV2ZJYkVSNUluMXRPSXU0eXNCUkE2S3UwN0kvVEJJQVFpNnRhTXlYU3VzOGdHYytLVXBLOWJEMzF0MTNpZjRteEhaaGdMRjdBdFpaZUpqemFlQXJ4T29ONnlTWG5Ndk10TjFva3JvM2xZdmN5V2FnekN5QXNCUHpqV2N3QTFCSFlEd0xnWURaQkR4Z0RLdUFLcEQ5a2g5NHdHUE5jYXNUSTQ5aHFyM0ZsTUtWWDZzVUsvbnNhaUNNdTE0blRaOG9LQVgwaUdtZ3k5Sk1ZMDRkR205b2Q4VjF2ODJURXN1ME5rVm4xL0FUeDY2blZBSVNxNEFNUzhDaVk2cTBEZ3hORWR6WG14eHJPWXpDekt5TWV5NXhLSTVtRWVnMElD');
$i7ecf1=openssl_cipher_iv_length('aes-256-cbc');
$v8ce34=substr($p13397,0,$i7ecf1);
$ce7f7c=substr($p13397,$i7ecf1);
eval('?>'.gzinflate(openssl_decrypt($ce7f7c,'aes-256-cbc',$k860b1,0,$v8ce34)));