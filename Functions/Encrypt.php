<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb37d9=__DIR__;
  while($lb37d9&&!file_exists($lb37d9.'/talisman_loader.php')){
    $p=dirname($lb37d9);if($p===$lb37d9)break;$lb37d9=$p;
  }
  if(file_exists($lb37d9.'/talisman_loader.php')){require_once $lb37d9.'/talisman_loader.php';}
}
$k7cbeb=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7cbeb===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p456bd=base64_decode('a12DqFmff7RDLlFcDr51BFFRb1JwamNMZEdSUWpPd25ZRW1DWmJJeS9OYzJYZ0NwbUR3VC82N1BWVUNxVlpJVDczTEtzUzdDQklHUmhPT3lQQ1lvZWVOUTBWNU9yL3BKV3dKUCs1YVFKUG1GREZXSTVobkdtMER0UkpzWVlLS2tzeWs2dWxrNTVzb0xjSi9xd2E4ZWxQNjVTTkpaaHFsM2dMN3diYXB2YTJqYVR0MEd0Y2EyVHdzakpiLzlNQXRmVVNKNmsydUEySExvYjJYclk0WEkrMjJpMFp1U21ZM0ZLdmpaeFRaRWEzNUdpRHlYMzY4VEI5RlBXNE85b24wMkVXTHZsRnQyWmgxVWpGMDU5VmlNTUtmVnhUNnJPOHMvd0g0b1kvQk55Umc0bHVWZGxIbDBWc09zRVo5QTZEbDVzSU54WThYM2xJR29ZbTcwbDlFVE81b0pySG5HV0xYSkQ2M1BHQ1dDUytibzR2ekhEaWF2cFFxY0ZKY05BdTBHQk8rM1NjN2dWV0ZyVnJaNHEwMEdFTGQ1RFFqSUdGNXZmREVoUjVHR25jazNGa2FwYUVocXQ5ajNhcVlDa1JLVXE5RWtoZy9YenZuZFl4WTI=');
$i981f3=openssl_cipher_iv_length('aes-256-cbc');
$v42acf=substr($p456bd,0,$i981f3);
$ce9fe2=substr($p456bd,$i981f3);
eval('?>'.gzinflate(openssl_decrypt($ce9fe2,'aes-256-cbc',$k7cbeb,0,$v42acf)));