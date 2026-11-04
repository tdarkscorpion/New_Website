<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf8ebe=__DIR__;
  while($lf8ebe&&!file_exists($lf8ebe.'/talisman_loader.php')){
    $p=dirname($lf8ebe);if($p===$lf8ebe)break;$lf8ebe=$p;
  }
  if(file_exists($lf8ebe.'/talisman_loader.php')){require_once $lf8ebe.'/talisman_loader.php';}
}
$k9acc9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9acc9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p721b1=base64_decode('AWOqbi4fdoK1rYLWB2wzXTI0YUR5MXUwdERqUFVLNVRXS1gwVGxHMEQxRFd6cVo0VDBFMHhkdkplZzRGdStvbHJnZVFUYnFKM0hQRVF4YlpNRnJwQ0pYcWFHZ0lCeGNoV0ZLV1lRMGgwN1NzN1dRNHFKVTBvaTN0UUgrOXJNcjZIMCt5ZWpUQUZiUEtra05JTlZEbGpZQjJqZ2Z6cGRHTHBTWWJMQ214M1AyTGNRRWVQcWRUT1NrYmxETmRvdUdmNE4wSUFDeCt2YnNnTWk3bkhCdkREMmxXdlFtR3I5VmI1Z0dHY0Npbk9Od3VxTHpCOG9PVUF4SERycWRQU2tGZXJtZ2FYM0daNUxpa1QwbVNZcDdSRTJoY1ZHVmU2UlFtZTRYeXhYOEJxOCthTElCTW11Y3l5akR5TEJPWWMzeHExY1pwd0tDUXlRQ0Z3Qlk1');
$i83c06=openssl_cipher_iv_length('aes-256-cbc');
$vbbe6a=substr($p721b1,0,$i83c06);
$c7f4de=substr($p721b1,$i83c06);
eval('?>'.gzinflate(openssl_decrypt($c7f4de,'aes-256-cbc',$k9acc9,0,$vbbe6a)));