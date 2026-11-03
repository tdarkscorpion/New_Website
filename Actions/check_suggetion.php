<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4efa4=__DIR__;
  while($l4efa4&&!file_exists($l4efa4.'/talisman_loader.php')){
    $p=dirname($l4efa4);if($p===$l4efa4)break;$l4efa4=$p;
  }
  if(file_exists($l4efa4.'/talisman_loader.php')){require_once $l4efa4.'/talisman_loader.php';}
}
$k39587=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k39587===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6df92=base64_decode('PUMvPJE7pbisNK7cf5PzZVZjYzBkWDlxMWNUWlBHaE1NLzNDUk56ay8zbXdBZDVUL2p0emdvUjFlT0R4VTM5MzhCWm9LTlFSNVBHdUovd05XR0dmNHdUYnM1bjVFaGhxVlVvbm5Wbk5PaERJQmtqSHE3RzNkajRUS1gzNzNLVjhKcUdFeXVRR0I4YTdHbVRyZnpjTTkwTE5FdDRYUmloMmlzRlkxTEtYZ3U2K3ZSVDBzRUNEcnJQQ3A3NHlIeHNlc28zTXBUZW5UY3ZlcmMydDJDQnlSZG1GQkVZcWNFRGVVT1NOeWtxZXl0TkloT01xeHB2MCtxZHBPYjJRdklRZmZDQUROdThDRjVpYjdrKzk1b0VMRG12QTFydng2N2ZiZTBqNjNETmp5MktaL1lxM2hEMjUzY3RlNDNlcVIrclA1RVRoajdDTCtyK0pqb0RxZ1JPc21mUEw3VUkzNzREbENJM2dtTzhhTHY2QkRvV1RCUnByTUc4alZJZndJbkVTT1hoSVZPZXE3Z3RHeUFxbyt0cXh0VTBsL21Mdm1sbFl2d1RyTndMNEFINmY1c0QwWE5CUnFPUlhNOFpiYmxNWVJJVWVjUGw5TENBMUQrcHJ1RS8yK2c4TXdkMElQdUV5NGNDVlh0UHpEdHBpdFc2bWpWdDdoZjA4ZmZxYld5K0VTSUtrQXlyMHVOcFdjaENUWjNLL3RFeHM3dEtIWTNNd2ZxOGYvN0NDVlQxNWR5MVlwOEdpUXpQRytQWGJuWWxDZzBOUjNwNTFqWTNpSS84bDROWjNrVytESllWNmd6eVZYdzFwZjlpZlBYQXMzOSsxdng1VWl5MVhWWUQ5WEc0OG1rdldBcXkrUnhmcDVEdTk=');
$ifb66a=openssl_cipher_iv_length('aes-256-cbc');
$v02f1d=substr($p6df92,0,$ifb66a);
$c3347e=substr($p6df92,$ifb66a);
eval('?>'.gzinflate(openssl_decrypt($c3347e,'aes-256-cbc',$k39587,0,$v02f1d)));