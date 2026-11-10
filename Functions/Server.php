<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lad4c4=__DIR__;
  while($lad4c4&&!file_exists($lad4c4.'/talisman_loader.php')){
    $p=dirname($lad4c4);if($p===$lad4c4)break;$lad4c4=$p;
  }
  if(file_exists($lad4c4.'/talisman_loader.php')){require_once $lad4c4.'/talisman_loader.php';}
}
$k455d1=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k455d1===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd2bb1=base64_decode('71VbeOQ2ZqDSiXwNHkuz6mlzQVpSVmNTYXBWZUdjZUNSbFA3MzBZeXpONUFudVN2QTRnNjFXeWMwTUZvcGE1Z1lUYW9jOHpwMys5azQ2djJuWHg2WXlxNEtVTkVYWWJYQmhnZERGK3Q1d0REVkovMms4ejJSVFAxZzN3Ulo4WFdYS1FodFBRTUVHVFRaOFlFeHE0OVNFK2NKMDRZYWVmU2xvVTMvWE5nUWorOG9NQlcvTDMzY1pYdEZidGhMdkEyZVVndUJkb1lUbkZvZUQvUnF5dGNidEVWRU16Ty80dWVyTjd0VGZ3UlkrcFdkN2IvSGkwWWdLRUtpNEdzdWE0bmhOSndyYW05NithWkFsZzFmL0ViZjFXOVo2RzhlcDlpLzZvUjhBcGZXZGFvWjJlcURLanhVaTBtL0I4PQ==');
$i8228b=openssl_cipher_iv_length('aes-256-cbc');
$vac0f6=substr($pd2bb1,0,$i8228b);
$cbb789=substr($pd2bb1,$i8228b);
eval('?>'.gzinflate(openssl_decrypt($cbb789,'aes-256-cbc',$k455d1,0,$vac0f6)));