<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l809e6=__DIR__;
  while($l809e6&&!file_exists($l809e6.'/talisman_loader.php')){
    $p=dirname($l809e6);if($p===$l809e6)break;$l809e6=$p;
  }
  if(file_exists($l809e6.'/talisman_loader.php')){require_once $l809e6.'/talisman_loader.php';}
}
$k3850b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3850b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p767e2=base64_decode('GNE+MAkgLf4Qecpi5RGMH3FqUWppOEJZVGVHcno4VzFrYUhnNG1zNHBWcEpqVTZKWUw2bmVZcHQ1SW9oeitBZWJvczZqT1lpcHg5Wm9KTEJ5YzFrcjVPMDAzUWF1c24xUzMrUlB4Tkt2R1dRN2NFT3FiUTBMNmQyNVlBQjE2aU1pcEJsZVcvL2d4SDVqczNYZU9wVldUVDgwTEZaTHRMWi93ZU9oUkkrM255UzhlV3AxMFJBMjdwdXdFNWFUellXSXF0OGpra2pKbWkzWTBCS2t3VE5WTDdtMmxadi9SRloxc3NacWExMHhoZUJlYVFvVkUrblNYVjZXcldhZ0NSaTMyOFhiYk1taVBFdzUvQVNzWFRJaXdsNlNwUjBCallDMXNTZUwyOEpQVlh0NUxXNFg3cTk5M1VNa3BKcWNzR2ZPMmc5YUdHOGtZWEJYcmt0');
$i0b280=openssl_cipher_iv_length('aes-256-cbc');
$v1ddee=substr($p767e2,0,$i0b280);
$c2e68a=substr($p767e2,$i0b280);
eval('?>'.gzinflate(openssl_decrypt($c2e68a,'aes-256-cbc',$k3850b,0,$v1ddee)));