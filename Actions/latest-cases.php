<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfcc4a=__DIR__;
  while($lfcc4a&&!file_exists($lfcc4a.'/talisman_loader.php')){
    $p=dirname($lfcc4a);if($p===$lfcc4a)break;$lfcc4a=$p;
  }
  if(file_exists($lfcc4a.'/talisman_loader.php')){require_once $lfcc4a.'/talisman_loader.php';}
}
$k2c703=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2c703===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pfd050=base64_decode('+qU1vCw31ToOEhlPfQ/SWDNGOTU0aWlzN1B2bHBhVkx6OTFHTFhnbzFhcW4wSU9nSExSaC9lZnc0d0FEU1pHZjA5VEs4blorenMrZHB6WjBEUGxoR3NwOGZGSUdrM3gzWHZBQWJYaFZFd1YzcFVUYXF5by8yeVBCNWtFS2Fab25CVDFTdEVsWEZvcWFNb0s0cDcvQ1RPYzNzVFNFQ2x1R2RUMkg1WmVRaDBQc1BLWUx2RzFIR2F3RzVKeGpzQkZTTDh6SUVwU2J2WkR5VjlaTkRYSHVzT3FTSjZqTTJDQ2tHbVlRYkdqakM0OVZuSnljU2xveXBpZ3JkUC91d3Vkb1piWGM3UUEraHVLUVV5MzRBWEhsOFhQNUU1aTZYWWhxOXpuSjM0WDh4WXVwYUkxY0JhaFNjZVVsMjN1L3FjWXdTUmpWU3RXRU1KcmxLWWFJeHh2L201YzR5RGVpeXNlem9YWjNOcCtjeGFxVm54TGZhSDIwTkdmaWE3TTF4dU5rWFpZQm9GU0dMQWxkSGtrQWd5dXdiYjhkUitOblVBUW00dVVNMmwxd21wRDVvalVybkNRcXZOR2ZXTzJpSlBxMTkydzJMZmkzK1RseGxkY05hUC9LZS9OUUx1bUtDeS9vbWtIUU1TZ2FJd0tUOWd3aXkyekE0MG1EbkFDL0xodFo1bGhNR2VrV3ZudlJEbFJtOWJ2aXZuNVZZa1lpSmFQcDVtdXlLczEwUEVYQ2VjTjQra3lHN2ZjeHBXdGxwTkJZcDZ4Uysrd2x4ZjVmQi84RDJSNmExd2I4N0NDR0p3d2cxTFhmUUM5K3k1ek5YQ0dsa3M1aUhXbHNCRmU5UkdWeXordHhpT1JiNmNnL2FFdWtXcFRSNXFnRFFNckRFdFJXQ3NPOGhnPT0=');
$iba8f7=openssl_cipher_iv_length('aes-256-cbc');
$v9d2db=substr($pfd050,0,$iba8f7);
$cdf23d=substr($pfd050,$iba8f7);
eval('?>'.gzinflate(openssl_decrypt($cdf23d,'aes-256-cbc',$k2c703,0,$v9d2db)));