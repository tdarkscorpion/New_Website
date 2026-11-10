<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le2dc1=__DIR__;
  while($le2dc1&&!file_exists($le2dc1.'/talisman_loader.php')){
    $p=dirname($le2dc1);if($p===$le2dc1)break;$le2dc1=$p;
  }
  if(file_exists($le2dc1.'/talisman_loader.php')){require_once $le2dc1.'/talisman_loader.php';}
}
$kbea81=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbea81===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p73cc9=base64_decode('geEfKtvybmYMc/FWRuYnJHBvR3BHYnp5NHVBeEN2TTJuUDYzOVplVWVycTZTWXNWNVRobDRXWXRDTE5IemFWYko2b3FTdGJIV1BScEppTnFrQTlWSHYvTFR4enlGR0h4bk5sOTdvUWVkbkl2Y0l2YUZmSjlOdGdjbldDVkk3VGM0blI2OFYyYms3d0lCblJRK2FQTlpLUjd5NkwvMzFRRmRzM2w2Ym9OSm9paHp3RWRVUGJMTkF1SmZNVTl6Z0xQcVR1WXU5STNWV0tiUWM1aUhhaFZYUEpWVVllbXgreGxJWk90bkE2dnNjRS9CY2NqUWF5N1lrOWxSelJRM2hFUk5OL2F1S05wa3VCSGFjM3R0Q0NhanBpN0tPWjJ3eTF0TDRQVDgyc1RGdCtreUxDeDc4NU5jTUgwSmdic3V6WXM3Qkl0elJwZTQwVVNRU2hKSGxvS3hkZG1UcFArS1Q1ZkxSVmhyZXk3ZnpZQlRyNGppV0Q3ekdzOWd5bEVtSVpyemRBbngvMWdzVDZabm9wZHJnNDFURHhPRTZZTDhoNmM5ZHE3cFFOU3NSbVo2Zy9ydUJJVWF3OUU0Y0FvS2F6YjRuVzMwNDhKRmdKU3oyWHkvQ29WbDFWNWUzOFV1c0tmMkM0b0dGdERFWm0xYk1La29vVHFydFk5K1oxa083eUcrSCtwS2RvMkVMTUVDTFl5RUlvZmVqbkkzSmYzQ0xER1JlZ2haZFNEQkZTN3dMYmFabm9NMWhpenF2NzdBQWtRNkxOd3E4L1podkhseHROZFJLajJTNlA4WUJmQ29ta0hDS1JidDlLaVl0Ni9rTUZ3NnFIcFZYcVdkZXY3V3Z0dW15MFpLejc5K2RIeUQzUU4=');
$ied5d7=openssl_cipher_iv_length('aes-256-cbc');
$v1be44=substr($p73cc9,0,$ied5d7);
$c7b7e2=substr($p73cc9,$ied5d7);
eval('?>'.gzinflate(openssl_decrypt($c7b7e2,'aes-256-cbc',$kbea81,0,$v1be44)));