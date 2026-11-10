<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l68053=__DIR__;
  while($l68053&&!file_exists($l68053.'/talisman_loader.php')){
    $p=dirname($l68053);if($p===$l68053)break;$l68053=$p;
  }
  if(file_exists($l68053.'/talisman_loader.php')){require_once $l68053.'/talisman_loader.php';}
}
$k69ec8=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k69ec8===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0ab89=base64_decode('9jscU77BGkvyFWMQKUdYFkQrcllCbjQ5V2NEbkcycUtVZWtIRUVlbGRJayszSWlTNkhwTjRnQnZRRmpaMlRCWUY4VGx1SXhpTjgwWUJMdjgzT2xSejdSMmY5Vnl5T2Vxc3JOeVhOR0dhdzNWa1ZreCs1MlRLUVhwbzlFTEJyL1d1YnFPZUwwSW5vMWhJbEoreDRDL3RZcXRsWitBb1U3TG1DOFlzLzR0Y1NiMzZiM0MrZkpxeXFrZWs1SlZuSkN4YUdJUzg3Z2ZINnVTb2M0QnNTQ210SHJ6aDdaaWhuaEtVOHpYRWxaSVlpcXN3OVEvOFZ2VGRnNC9Pd1FQaHRzVE1HS3RZQm9nSG9idk5iR0lKMlo4MjNzQzJReTVVRDRKbkNBVzFpT0ZCS3pVWEE5Y04vOVM1dXlNaG83MW5qZDFJL2F1QWFaZi9URlUwT2c5WTF2RFhxVFBlZVFFTDI2b25jRGRRTEw1TitWTXhZamZwOVFZNERRR2JNOStLRnMrbStOZElCTGJYN2t2N0I4amFMM2sxTmVJTlJFWHQ3ZTUxSXAreE5CT29hdTRuVlcyZHBOak9UcE5zTlcwUkpnd2ZybEFyQ2VMNW4vZzZqRmx4MzNHcktQemxjN2RpREJmRFZFdGtZWHJsa053T0hQY2NmQ2ZnVGRCRFUreWhRRUoxdmlYMUp3aVV6bGhBZmQvMThtWUd6WTJYaFcrWjBWZTZqb2dObzBtSzc0TXk5dzQ5S1cxOVhtMjl3dDRrWEIxSkpXaU9SV0EydE1adDMzVnBLVXY0VmpuSG1hc3h3dy9lVzZZSkhQS2ZYL1E4c0pRdnBYSk5EUmFKakVkMVdNdk9Lbk5MaXB5d3N4VTJoVXM=');
$ic4674=openssl_cipher_iv_length('aes-256-cbc');
$vc9de3=substr($p0ab89,0,$ic4674);
$c5de92=substr($p0ab89,$ic4674);
eval('?>'.gzinflate(openssl_decrypt($c5de92,'aes-256-cbc',$k69ec8,0,$vc9de3)));