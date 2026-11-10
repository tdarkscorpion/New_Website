<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l91995=__DIR__;
  while($l91995&&!file_exists($l91995.'/talisman_loader.php')){
    $p=dirname($l91995);if($p===$l91995)break;$l91995=$p;
  }
  if(file_exists($l91995.'/talisman_loader.php')){require_once $l91995.'/talisman_loader.php';}
}
$k63865=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k63865===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe27ce=base64_decode('/CCc5pSwS+tlCMtWQ4XwxDY2RGhWOGlYQVB0RnRGMWFUTzlUdXd0NVRwT0Q0NWNrbTB5aTBCOWdlTG9KR1VETzhHYXlHNWN5WHdKM2NLd2R4VGh3UWJFOVY5U0FkU2NtZVRoQytDU0hkZC9oZm5vSzNtbU10c1FJdnNZZGJOb2I1WFJHalFuTzZxdGhqZGdEYXFOZXM1eEthdXBpUzQ1ejBhTlo1UkllVmFvbGYyYm9vYVk3R1M1VWQ2SUZ6U1B6ZEpDQnZ4ZEJMSEpiNThvL2x4T3BQbWJwMzJyV1dwRUVZVmdCRlNOdWVGRjdOLzVHeVhGTFhNa3h6WkxNS0xzcm02UlA5NlR3VTFWdi9uRm05bjNyRW05MFBWNlcvQWlEbTRzaXFGaHRhQXp2eTN6RnZWOVhhQmIrSXRoRlZEQ3RTUXIxZzNBaVpYOWIwbzlLWityMGJmTmN5eWxTK3ppWkJFaEgvSEhHV0tEbHpNWWl2MG1YTTZIRTB6cEQzMjJ6L2JyeURkT0d2VkNmSnMzUmFJalpVMWIreStQMWZEVEpkWmdZKzVBbk9leFNNR1k5dUYxZE91Yk9VZ0R1bnIwdXpIRXR6K1dienBXVTZDSDZET0J3V1B4b3FISEg5Y1lnclFRc2R4eTdlVnJVTCsyVnIxb1JDMHMzWWYyQjRGZ2JrRW5rTlhJTEtPdnBCZ3pWYlFndUM1MjRkNDE5MG9mOGZiNWcxVzBmYU1rL2R0aWQrZ3ZYQXQxd1UwSzFGME9KZlFkVjBOdjNCQjFkcmQwSTd3Z3FSeUZjSDhMcjkwWVNOK2Z3L0hBSmc0REJpdy9UR3FXaTFPOXVFWU93aElwSlpwc3hlWGF5VlJKYm1QZlE=');
$i7aaad=openssl_cipher_iv_length('aes-256-cbc');
$vfc63a=substr($pe27ce,0,$i7aaad);
$cc1b94=substr($pe27ce,$i7aaad);
eval('?>'.gzinflate(openssl_decrypt($cc1b94,'aes-256-cbc',$k63865,0,$vfc63a)));