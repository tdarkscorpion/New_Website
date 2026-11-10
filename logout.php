<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l32821=__DIR__;
  while($l32821&&!file_exists($l32821.'/talisman_loader.php')){
    $p=dirname($l32821);if($p===$l32821)break;$l32821=$p;
  }
  if(file_exists($l32821.'/talisman_loader.php')){require_once $l32821.'/talisman_loader.php';}
}
$k1c177=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1c177===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p339d6=base64_decode('ihxKNdawCjN9CWb2EgdUrHhrN01PSHdHR3R0RktnRG1XNWVaNWJ6N2VJRU9YTHpCOTc2Qkk5SU5XYVcvaXBrQ2QwVkNOS3Z6aWxEcnRCVmVTOWlVV3FPd3kwdUZRRkU3Wjg4c0owVlpRc2FJTSsxdFNXUS8wZTJVWFYwPQ==');
$ia6bf7=openssl_cipher_iv_length('aes-256-cbc');
$vad6b2=substr($p339d6,0,$ia6bf7);
$c9c353=substr($p339d6,$ia6bf7);
eval('?>'.gzinflate(openssl_decrypt($c9c353,'aes-256-cbc',$k1c177,0,$vad6b2)));