<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4a48e=__DIR__;
  while($l4a48e&&!file_exists($l4a48e.'/talisman_loader.php')){
    $p=dirname($l4a48e);if($p===$l4a48e)break;$l4a48e=$p;
  }
  if(file_exists($l4a48e.'/talisman_loader.php')){require_once $l4a48e.'/talisman_loader.php';}
}
$k62747=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k62747===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p257b5=base64_decode('1m43Ps5WZ/olnDJoboaemWJRaVhmd0RWM3loaUhZeXVKeDEyanI1ZndKaUxpdEdnL1RESjVEVjQ5UW1GMzJoYmtGYUo1TE1pRlNLcDRaMkcrV2pXeWlramxEd2dHcXBPcThUQmQzQ0dqVE9zNmVlcUJPRHJtVXhwYzQ4bHdaRGR2ZXRDNXR3aFEwMjFZV28ybEdLbHJqQWtSeDhKd0ZUTlF1cm9mV25LUEZvZ3M4Zks0aTZMaEZxSmZNd0cxb2xuWE5aL2hrWXVxcEl4QkxUK2dzMU82KzR4dllWcHAzN0hRRmNuVTJpeHB5Z2E4YW4wS2FHUXJWa0k5cXJVK2MweWhZR2tldUNRR1VKVTlKRHAyYUhzc1FmemY4ek9qTkJlUi9tZHdDRCtoN0J6YjFqb0tkNm5iV3Y0YmUwPQ==');
$ib5e78=openssl_cipher_iv_length('aes-256-cbc');
$v46c0b=substr($p257b5,0,$ib5e78);
$c52001=substr($p257b5,$ib5e78);
eval('?>'.gzinflate(openssl_decrypt($c52001,'aes-256-cbc',$k62747,0,$v46c0b)));