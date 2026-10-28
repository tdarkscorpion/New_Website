<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l42681=__DIR__;
  while($l42681&&!file_exists($l42681.'/talisman_loader.php')){
    $p=dirname($l42681);if($p===$l42681)break;$l42681=$p;
  }
  if(file_exists($l42681.'/talisman_loader.php')){require_once $l42681.'/talisman_loader.php';}
}
$kd2750=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd2750===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p95457=base64_decode('typObPnXp99UFpgYi8N4/C9TUkMwV280MWdna1lBMG1vVGR5MXRRMEkxMENlV3EyUHFyNHdxQWdGMFZIdHFYTTJmSE1SR3Uxa05XeDNWa2lOVExNUndWMHByV2Y3KzNxdmxvQWRRSzBXb283R0Foa0xnbEJSZ1psVm9idHR0NEZ6Nk9pL0RlaGpqeVZOZzU5NjZRaDVlb2ZFamVzQWQ3R3Nvclc1cHUvUHZvWWFnK1V3M1VHbElDMi8wbFkya2IrTnVhMXNmUlE5MThZeGVXZUZZVnN0V1JaeFVrelhHWVlJd2dhclpNWXFiaDBzWEpiL2JpbGc4V2RqaG1nMTAzYzNTM1dQdWFZMUxJTE1xTXFrVVIzR2tRZ1BSUklGMjFwSWVzL3J3WDBNMWowV1AyaWZ0clQ3THo0QUswPQ==');
$i43d21=openssl_cipher_iv_length('aes-256-cbc');
$v1200a=substr($p95457,0,$i43d21);
$c4fb76=substr($p95457,$i43d21);
eval('?>'.gzinflate(openssl_decrypt($c4fb76,'aes-256-cbc',$kd2750,0,$v1200a)));