<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la774c=__DIR__;
  while($la774c&&!file_exists($la774c.'/talisman_loader.php')){
    $p=dirname($la774c);if($p===$la774c)break;$la774c=$p;
  }
  if(file_exists($la774c.'/talisman_loader.php')){require_once $la774c.'/talisman_loader.php';}
}
$k2a5ce=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2a5ce===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p12917=base64_decode('nPRatKFHsGnFJMEYr6VoCkt5WXN1OHVDNXYvVFFZNVEzbkx5VHgrSHRlVW9ZMDdKY3RmNy9JYTNBUXI2K0dDSVFKZHNTV0lhRm53U1lVa0IxUzlMNXpjRlV3SHplSWlnK0FucjVyUXRFaWd4cEhCNjQ2cFhTa2RkSzQxYW11RUZtdFgzM0YvK2RkbS9BMi9qRDVzRnYxaVdqZGZLWDA4UjJoWHB1Vk50WGQrRTJGbDlNNWo5aXg4QTRDZlVyT3F0SThxU01FQ0xPZDVnTzQwMmRiem5CZUZtamo2OTFhOWdnZDdseWZuS0lNcnlTTUZ1RFQzM2JScVh0U0hNK2x5TU92dDlhWXI3dnRVcUpYU1lBQnd4ZFFNa0JZTDlvRXZzdTgxUHZmbStkcVQ3YjZvUjVOaEJ2cytmNFM0PQ==');
$ic245a=openssl_cipher_iv_length('aes-256-cbc');
$vdbfea=substr($p12917,0,$ic245a);
$c2ae39=substr($p12917,$ic245a);
eval('?>'.gzinflate(openssl_decrypt($c2ae39,'aes-256-cbc',$k2a5ce,0,$vdbfea)));