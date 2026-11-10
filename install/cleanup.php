<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l9150e=__DIR__;
  while($l9150e&&!file_exists($l9150e.'/talisman_loader.php')){
    $p=dirname($l9150e);if($p===$l9150e)break;$l9150e=$p;
  }
  if(file_exists($l9150e.'/talisman_loader.php')){require_once $l9150e.'/talisman_loader.php';}
}
$k2bb60=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2bb60===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p876fe=base64_decode('H0XODB2gVw5NwP4Fv1xyTmdONlFNdTNGbXEwZ3ZMMGdwci9IZFIvWlBrTU8wWTlLQjFuQTBmT1hjVGNuLzdnZVF2clM3VS9jMmg3NWlXWkk5ZmJyVjlXMkZUMG1UTmhQVVMzcGlGNm4rMWdmdHErT2ZKQjZPRDNieEU5Q2Q2M0hLc05HWVZKWG50d2lJVUNIemR2QjlmazM5WjBvUGpQNEY1a29mcVY5ZWFHdXZJZktyQ1B6aFFUMDdJS0dVL3VGRk13dStYOFZQbHdtRmhONXZhTVNFY2FxWEJNV2l4SjBGRjMxRkR4K3F3Wmt2Z1ZBTGE2QkFUNGpwWVZGZmUvY0VZVmFhWGMyNUtTWlNzVHVyNjJTT3A4Qi9xeFppdTZYWDQ5UFdzeG00V1k4L2RhRmZjOXBMc2xVdnVnS3pjd04rRE5DOVM1bCtVcVQ1enY4QkZpeW00ZFAzaWVFYndWcEMzSk51RUZhRHB5SHArY2xaSDgyUGVTaUsvb0JjMGpXRWtjc2JMUHZaOVBSemRwMjkxWnFKTi9hYTR6UWNmVEdkWWpzTDRLY2syMGJkbTYzYTVvdUdZenZBekxuajBjeDI1RWFVMlhwUmkyTjFzamFLbnh4eWh3UEl5Rjh2STY0bm91bW9wSUlwaE0wbklCRFF3ZFc5S3U2NEVoaTJEVnY2ZlRrd2liMmpRMERXUEpPMklqdFFyMWZkMG91b0ZJUFBBNWhINi9TVHB5akNsY2tmUEJDeVF0cUVWSFRaNUxNY0FUdXVYb21DUFR6NlM5ekdMdXpRZmN0VFEyVk9zaVUrRmNaSE83MVR2bDJLVWNvL29IYndTdHN3Q1pnTmZ3Vkp1cGYvWlZ1NTFaTzdnR29vbEllTGVTS01xWFZodm1zOSs3eGczSDJ5RnBWcDl1MDlraitWR0NjcGd1eDQ3c0hVTHZrQm9vWnBTZ3ZBcUtVaU0wNnF2TWJ4OXJzNWYyOVp4Q0FYaHMxZm5XU2hiN3RFVkxhSDZMUTBsT1QyYWlaQVpFc1RBUll0d2JxUE1VZw==');
$i825db=openssl_cipher_iv_length('aes-256-cbc');
$v1782c=substr($p876fe,0,$i825db);
$cf9c08=substr($p876fe,$i825db);
eval('?>'.gzinflate(openssl_decrypt($cf9c08,'aes-256-cbc',$k2bb60,0,$v1782c)));