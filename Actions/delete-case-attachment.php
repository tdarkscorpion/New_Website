<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l269a1=__DIR__;
  while($l269a1&&!file_exists($l269a1.'/talisman_loader.php')){
    $p=dirname($l269a1);if($p===$l269a1)break;$l269a1=$p;
  }
  if(file_exists($l269a1.'/talisman_loader.php')){require_once $l269a1.'/talisman_loader.php';}
}
$k0bb26=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0bb26===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0b063=base64_decode('3cF4wPskP2kw6s72GGEQjHlST3JaRmE3NURRb3JUTjd6N3cvWEhXUy9qUGdVZUZGSzJmakEyaitQenR5S3Z4bVlVOHhsMytHM2lQWU5Xc3QwbXp6OW1UU3BLMnYzTVNLZDlESGZZYis3MnppRS9kWVhyK24rVzZMdEpqZEc2dGo3enhCM3lpMFgrTTIzNEp6dWc1QnFCQUlKeDZBa2Fxb3NhN3REQUNsWVhTS0hNQmNvYUZOVWpvd3VqeHZEaXE5dlk5azIreWVVS3NXbUc1VCtNbmpCZWh1OHQvaDVWRFltbGJzd29MQzRFZUhjVThYUzl4N2psdjR4alpZY1ZqTmc5Y1Q1Z2Z3cWtYc2F3V3liTWdVcjJ4SGxONmltbHFvRmZBQXNlMmZvZWdHSE1PYW9PSHhQVzF1WUFVUkZadHpEZWMzb25obWRkVmZLSkVu');
$i37c6e=openssl_cipher_iv_length('aes-256-cbc');
$v57bcc=substr($p0b063,0,$i37c6e);
$cb7994=substr($p0b063,$i37c6e);
eval('?>'.gzinflate(openssl_decrypt($cb7994,'aes-256-cbc',$k0bb26,0,$v57bcc)));