<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l58645=__DIR__;
  while($l58645&&!file_exists($l58645.'/talisman_loader.php')){
    $p=dirname($l58645);if($p===$l58645)break;$l58645=$p;
  }
  if(file_exists($l58645.'/talisman_loader.php')){require_once $l58645.'/talisman_loader.php';}
}
$kc35d8=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc35d8===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb08bb=base64_decode('6/4aliz8OyH3DhEtS8Gyzm9MVG1wYTY2ZGtPaVZCR3preEY3Qy9pMGhJQjg1NVdJWEI0Y2c4VDFqaDgzYWloR2w0c0ZaK3d5UnVkOEVMRFlJSjBQQ1ZYZXJ1N1NxY3QxWXY5RmJWSWFReU5MNkFxTlZIYTEwbys4VEZBWnV2WndHOVRUdnVCNlI4MW5CWE0vTUFyZ0dBTDlZQXd5RUpUTktrZjNtS2p1cUxlejZ0OUVNMDV5d3AyUWFaL2ZiUERLTHpVYWpvQVlUUGx3TkRvYVJOL2dtVHlVaGdIYTkyYVdMRkkxc1dBaERxbW5wVCtrYjgzbVlYQlVSSDdkT1lhNVlwN0NHTS9LdTQwcThHVDBqdmxlUVFCTEFFTnRJZmdyN3hJWktFaElLZjFGbVlSRnZQWFBKemJjV3pMVGhjUzVKdlV2MFpaY28zSDVRZ1BsODYxTzNjcURzbTlFOVo2YUlXUGhlekVEeXhxbFpzb2Z2RU1OQ0w5QW12dkYrc3RZL1pTdFNQcWlsblNEUUJ1Vjl5RW91bkZKVEVPNkwzS1AwdEVkS1VUV0I4QVMyby95OXIrZU9GaXpDcEprWEw5bEpZT0ZWSWFld2hWMG1HbDk2R2RSNEcwSzVOSmZaOCttMzk0aFBRcTR2QnkxbXA4QnU1NnJ1SHoxTm01MCt1bFhodkNOVkd4eitEZWdHTjBtRnhDSFZvQ09BSWs5K3I1bkxMQWNCYisxaFVPeG1qUmJpMU5TcjJGV2FWQUpraXRyWGJldUEzdHdjejdoOVZXMnpKbWhzTUVlMzEva2pxY25hK0NLRFE9PQ==');
$i47fb7=openssl_cipher_iv_length('aes-256-cbc');
$v8c8b4=substr($pb08bb,0,$i47fb7);
$c12f93=substr($pb08bb,$i47fb7);
eval('?>'.gzinflate(openssl_decrypt($c12f93,'aes-256-cbc',$kc35d8,0,$v8c8b4)));