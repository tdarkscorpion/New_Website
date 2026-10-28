<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfeb30=__DIR__;
  while($lfeb30&&!file_exists($lfeb30.'/talisman_loader.php')){
    $p=dirname($lfeb30);if($p===$lfeb30)break;$lfeb30=$p;
  }
  if(file_exists($lfeb30.'/talisman_loader.php')){require_once $lfeb30.'/talisman_loader.php';}
}
$k73425=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k73425===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p91254=base64_decode('JmgHRFkF3AoPAoMNzOgRd3h0K2JiWWtZajVzblBRenRzc1RsL0piRDZUMEhCWGQ4Y3BzVXNBTS9Md245dzZ4cHZZOUpSN0o5QllFNWVQUFFrdkUyaEdSZk9QSFQ2c1R5UHVGVWJsNkZKUnZoUTZ5MnFOU2lKZitLdkVlQUpoamRJOFJrem5JMThUZWJ4M0s1c2xsYlVDcnkvN3RaNlRuWEhHK1ZQazFvM2toUUhxSmZMTXBkZG1ES3psQWpBTkRoSFptWnBEck1zdEdmdVlocUtzajNGWlFEblFaaEF2dGdVSzVSUGJ3enhsSy9LT1E5UHVHOWRkN0pLVmIybzVVUERNanprNU1XbkVMVjBZQnhTNGhVZzl3cW9BcFJMRzFFSEdTV0JQdDdnUUxpbTVZSThndnJxWjBMUEd6NlVqWG8xOEpkcnNSK1hYUFhlaThHSGVGelcvR3dXbm5zUGtJREZiejFOSk43bm1DNWEydks4L1NoSXJYdmd4aTRENVF2OHFwektuU0xybDgwYXFHa3BYcnV4eHdVY05QL3h4L0F6WDA0UnVQaHlpOW81aHlLZkZCemZWY1VldU9yWFVnYTBPNSt6T2ZucHNjdUJDdWRLRTV3K1pzZXlEZnVSRGpmeGFJQWdnWk5seVNsWGh1UkpSTGQ3dTNvY0JibzF5NHpMS1UvMjR5TUwrdjJwdVd3');
$i2a84e=openssl_cipher_iv_length('aes-256-cbc');
$v256cd=substr($p91254,0,$i2a84e);
$cead0a=substr($p91254,$i2a84e);
eval('?>'.gzinflate(openssl_decrypt($cead0a,'aes-256-cbc',$k73425,0,$v256cd)));