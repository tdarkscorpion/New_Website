<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2db82=__DIR__;
  while($l2db82&&!file_exists($l2db82.'/talisman_loader.php')){
    $p=dirname($l2db82);if($p===$l2db82)break;$l2db82=$p;
  }
  if(file_exists($l2db82.'/talisman_loader.php')){require_once $l2db82.'/talisman_loader.php';}
}
$k2961e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2961e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdbe96=base64_decode('bsRKMMn2OLIt2DuzWitrJ1VFRHQxcWZaZEdlMGpvQTc2M1g2RTA4TmNPYmt4aTllanBUVVc4U3F1Y1NkMXBTL1B2NWJGNWQyVUovT0EyMFFOOEZrMTl4UTkveVRRWFNndzQ4Q2NaS1FxMVJrQmxzVzRhWE0yLzhmUXVlenhVUHVQcjhEanZ1d0IzVTlQOUVPc3lFOU5RdUJIRm9DU2lGTmFEMXIyMncvSXEwM0lHS25zQnRJcUtLc0VkY1ljd1BzaXQybEc2SDlRZXp5Q0dhRHl5MVFmaExQRVRIVzhSUWhzTjFPR0pWdDhFQ3RXRjdaNjcwYTA2VmRUSm1iYlJVYUVLV0lTdTM4N0FoTm96Nkhnek51aWdqalVsWktxZXZ0aFFDUGFmbXJxU3dDTVhwd1pXMU16RlBoUmNjPQ==');
$ib2f30=openssl_cipher_iv_length('aes-256-cbc');
$ve696b=substr($pdbe96,0,$ib2f30);
$c84503=substr($pdbe96,$ib2f30);
eval('?>'.gzinflate(openssl_decrypt($c84503,'aes-256-cbc',$k2961e,0,$ve696b)));