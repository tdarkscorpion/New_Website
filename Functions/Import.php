<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8387e=__DIR__;
  while($l8387e&&!file_exists($l8387e.'/talisman_loader.php')){
    $p=dirname($l8387e);if($p===$l8387e)break;$l8387e=$p;
  }
  if(file_exists($l8387e.'/talisman_loader.php')){require_once $l8387e.'/talisman_loader.php';}
}
$kf66b1=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf66b1===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p79d80=base64_decode('GINunKVUxNTXqruaYxk+/TRKTWd0L2xsQTdLMGFmcW1nc2xYM2ZwWkw3UnFuTndldXgrbFdjdFVKK2tCWVhoVmF6aDI1dWlUN1V2Mjh3L05TZ2piSW10Mis5V3hqV0ZXWTI2cXJvdzdlditNclQvMlNIV0NWcHErMjlRMVRtSVYyK1M3SHpmK3J2WHpDWnhRczVRa2VZcUp5RzFMM2UrRFF4Ri9TS0hxVTk1dVR4cWs3czdyN3lvZmhTRWVQdHNINXJUL3Z4eUt2VUZEaHFHd2k3eE9tS0l1bm5VQ1FIbktWdHJPZDdKNUYrR0U0bVVTTzNvb3d4WXdOeWw5ZU82NGlTeDNURkRLWE1qYU92UFlJTHhnTlp6RHB2TUxqSnJFTjBzNzJTNG9HODdPTDBhcjVsbUdSMmo1TEFBRmtQSjkxNWVOblJ0NG5mMVNrdlVxYzNjWmhGSzFyLzZrT2Q1UjB3aGhsQ2VFL0swQ0pvZHFtSUduM00vSGdvS1BIemlFR0JUQWQvOUwybDJ2UEJaTmN4SFUwN2ZEV2dHNjhnZUZCK0JTeERwSGI0T1hGNFo0QWQraUpCdnRKMVFRM2hhR3o2VXNialNZUnp6U0phM29TcU0wMGljd3RHNzRldk85WWRPb0ZsSlp3U2dLdktQN3JoeWRZWFJqOTBxVTdub0dCUFpzYmtCWGJ5K2RxVDVP');
$i4892b=openssl_cipher_iv_length('aes-256-cbc');
$v7cccc=substr($p79d80,0,$i4892b);
$ceed4e=substr($p79d80,$i4892b);
eval('?>'.gzinflate(openssl_decrypt($ceed4e,'aes-256-cbc',$kf66b1,0,$v7cccc)));