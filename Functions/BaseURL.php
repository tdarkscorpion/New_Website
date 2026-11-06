<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l498f5=__DIR__;
  while($l498f5&&!file_exists($l498f5.'/talisman_loader.php')){
    $p=dirname($l498f5);if($p===$l498f5)break;$l498f5=$p;
  }
  if(file_exists($l498f5.'/talisman_loader.php')){require_once $l498f5.'/talisman_loader.php';}
}
$k32eae=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k32eae===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pebc3e=base64_decode('mz5sRUqTo1XZVfXb4DGZ+FNjMEtzTG0vWXkwcUlDNjBvK1BtY1JoUFgvMGQ4RnQ2eFF0Z29EOElvZDh0bVZkVTl3V082dVh3VlRLc2dSY25pS1ovQ0NQcVAzam5FbEE4bTY0UDVCTnZ3SXdmeElmS1RwUVFSODh1MFRUZnRON2h6N2R4cEY1YlBsNVg5MnhmV043TEZPcVBkdFV3dmR5TDMxQzNUKy8xRDdWRHFRWHNsVSt4QUIrRjh3ZFphYlJIdE5hUXZsM1o5d1RiaWVTSW8rZyt4RHVvb2VoZTYyVUFhMkRMYjN0eFBtWUhNa0RFdFhYVFZ0SjhlWWsxTzhSWTk4ekZTNnc1SGlvNTFZWXJVQ3JCZ1U1RnVycmYrSTh6MWRVWmFuSkRwdFp2YjhmRXlDRmx5U0swbE44UUpFN0hPM3Jtc1paU2Z2L3dRd0thRjRwcVNLcys0YlhxbFVidHlGTWxDVC9NNGE1SE5yRi9HRU1iM05iREdkb01SOVQrcFdyTXNhUUErWDRUUHY0Uzd5Q3UyUW9mbnN0YnNjTEhBa3pUK05hYU02Wk80L1F3ckNkeGIrOGdGL3NjbktLVnFHdkg4UWh6T0hPTkNNcTkyOXZYVEFFbktEOWJBQ2orQVByY3hWcjlrSmVsM2VpdkRwZFczN01HRTMwcWhJQXppUlN1Q0JWR24wNC9kNml3SXA5V3p4T3JJRHNtZFVHRG5GbHhLUmIvT2U1SkFHUS9meFk0QXhnbXhFZHRnK1ZOQnVPREN4eTRFLzhOYnFHQWFFRTczTVY0MEZCektWdWN0QWpNYUlYWDZ5ZU9rWUJDcENZK2FWelhOZ1BNTG1oMUhtRVpKVXdhR3VXU0FCeGQ=');
$i7648f=openssl_cipher_iv_length('aes-256-cbc');
$v89560=substr($pebc3e,0,$i7648f);
$c563f9=substr($pebc3e,$i7648f);
eval('?>'.gzinflate(openssl_decrypt($c563f9,'aes-256-cbc',$k32eae,0,$v89560)));