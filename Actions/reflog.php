<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l938cf=__DIR__;
  while($l938cf&&!file_exists($l938cf.'/talisman_loader.php')){
    $p=dirname($l938cf);if($p===$l938cf)break;$l938cf=$p;
  }
  if(file_exists($l938cf.'/talisman_loader.php')){require_once $l938cf.'/talisman_loader.php';}
}
$k85ff6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k85ff6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd3c34=base64_decode('RNxwXfWD13ci+oyKlsoZdlpYUmR2YzIzU01PeDVVZkdaa1pINEpDYW5laWNJdUl5UnY4MVBxUklCYlZIeVZYNS9NUUE4K3lJZDBGTmplWTJjclBjZzZWeTFac3Fic3Y5Q2d1NEJ1VVpSdWJ2cklkZ2xyb3B3U0lKUFNPYThVRmsxTTFVMjhJeVpzYk1DM1ZkUlZIS3FqL2c3SmR3dFRPWVgwSWRPbTY5TzZSSUFVWjZzcnZWOTRHK0RzRzFNYVBZa2prcEdpczJQa2cwaHh1UVprNkp1LzFSajJtZElnV291VmN4Z1BraGRBZ0x2cWZZWCs3bmI1NjE1aXJVQzNMU2ZNZ2h1RERoeHU3a3gwTFYyaUVEc3RNbUpCVEVQaXZjbmc2c2V3OURUVkJMeVZ1K282ZCs1Ty9UVEJaN2NBZ0VoN0grQlNKQkhoNG1FTmlaOUlSeHVuYzM5aEgxMUdhZUpBYU5XYm1pWUNRUjI5M2RRZk52ampBaGFlRE50OUJyZk9rbGFYT0pQNzhzYnVUdHowRlNZZDBBRUtKY0lhcEZ3THVLMlN1KzhoNHNobFBYMjNmd0VRS2ZXK2RvYzN0QVdMbzdYbnA1a0RWb01nSk5XYlI0cXlVNWg1V2xhaUJjZEV6ckVJSitoSHdVR3V4UjdXdmIyUWRtY3RQMVVMNFh0VmZpMWY1YmozTVZ2dm5tRmh3OGt6NWMvYzVia01mOUtwbm5SVU1YMHViTnlrUTFHaWljZjNacXVaT3BIV25zUE5kMmJnZk1mL3R3bm5uRFVtOFhLUWxsSFVmNEwwc0lZcjN4R3ViK29tL1EwZnRNVng4QUIyZmt2WmZsVDVPZVNpQWJ4SHd6a25hQjJncnc=');
$ibdf50=openssl_cipher_iv_length('aes-256-cbc');
$vefed9=substr($pd3c34,0,$ibdf50);
$c62e31=substr($pd3c34,$ibdf50);
eval('?>'.gzinflate(openssl_decrypt($c62e31,'aes-256-cbc',$k85ff6,0,$vefed9)));