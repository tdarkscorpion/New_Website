<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf1899=__DIR__;
  while($lf1899&&!file_exists($lf1899.'/talisman_loader.php')){
    $p=dirname($lf1899);if($p===$lf1899)break;$lf1899=$p;
  }
  if(file_exists($lf1899.'/talisman_loader.php')){require_once $lf1899.'/talisman_loader.php';}
}
$kbff87=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbff87===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa682c=base64_decode('KexEwz0P1YoqnOQPNY4QrTRYRU9XZ2VnY3lYb3NqRzl5TDJ1Nmtnemxldm5iQ01sMllZU2dzZlJTNlUreG9lOEoyUDBDdmVIcUlWVy9IeXVwT1RUV1QvclAwdG9TT1hKcjBrZGE5RHB3ZW5Vc2R0Wk41dWFyWUJPNUJOZjV5d2hKVkh5ZjM5d01JS1hua2JNRUUxODQxWndUcmZ6aFNrMjVEcFFENVhpbDRKWXZVdklCN0NlOTNIcUtQa3E2ZGpiNEtwNkNXaXlRSEJhM3pwZEprS3VMcW85TG9CUVltUjYyUFltTWx4VGNiRlBKajl0ckVSZDlBWk5RNGRiQVR2aEZISTJqNHVCTG9HUUs4ZWhPMEVRVER5M2RuNEVmVEc0Q2FBeGh5VTUwd1ZLbmEwb3lWSEVyWHB0Sng4PQ==');
$i7ec53=openssl_cipher_iv_length('aes-256-cbc');
$v12d57=substr($pa682c,0,$i7ec53);
$cc5c31=substr($pa682c,$i7ec53);
eval('?>'.gzinflate(openssl_decrypt($cc5c31,'aes-256-cbc',$kbff87,0,$v12d57)));