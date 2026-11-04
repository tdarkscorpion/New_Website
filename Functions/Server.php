<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lab670=__DIR__;
  while($lab670&&!file_exists($lab670.'/talisman_loader.php')){
    $p=dirname($lab670);if($p===$lab670)break;$lab670=$p;
  }
  if(file_exists($lab670.'/talisman_loader.php')){require_once $lab670.'/talisman_loader.php';}
}
$kd11fd=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd11fd===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p43a00=base64_decode('/5VBlAGGrjhrUDAcfSIrbkU1Z2xaQTlmdExubGI2SkZqT09Vck1Oc0R6Y1VveDNCME4rK1QwZm83akp1azUxZk13TFdDbmtLNnFNZE1OT0xmaTgweHljellwN1pPRktpSldMaGJPNFBnUEc3TDZLMzhpUGZ5Zm13VWpoQnd4a3pVZkdhejFxRUM0Uko3dHdBdlpkSSt2S3VDNlMxTXZpeGtmMHlIRDV3cXkrU3BiT2txVFkwcDI4TllweFNqNGZaTmQ0dC96cW15eVJ1UStSMjlHQUFiVFh6Zy9WbHV4NiswYVNmVU40dFE4akVCajlIZEZFUFZuVW5DNEd4OGNrY2Q4ZVZVMk5lS0dzN1FIRGxuTHNqaTBxK2RkNk81dDd2R2VMMlNBc1FoZVhNbjdRSVFaOExGdUdGM1A4PQ==');
$i719af=openssl_cipher_iv_length('aes-256-cbc');
$v014d7=substr($p43a00,0,$i719af);
$c839ca=substr($p43a00,$i719af);
eval('?>'.gzinflate(openssl_decrypt($c839ca,'aes-256-cbc',$kd11fd,0,$v014d7)));