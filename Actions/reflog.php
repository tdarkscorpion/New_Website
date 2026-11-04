<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l093c5=__DIR__;
  while($l093c5&&!file_exists($l093c5.'/talisman_loader.php')){
    $p=dirname($l093c5);if($p===$l093c5)break;$l093c5=$p;
  }
  if(file_exists($l093c5.'/talisman_loader.php')){require_once $l093c5.'/talisman_loader.php';}
}
$k00879=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k00879===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pad633=base64_decode('wCGWdEM9r1zzxX8eOz2lc1J3ZG1hWFBvamR6WDBJcEN6U0JqSEQ5RmxkRnpkbjk2aW1vcXN1UTZOUzRZYTZYM0w4VWowSnQ0bmR4bjFRM3JsenYxTEVVSjhVY0hwRXNETmNQWW05bGRIcmNBQzdiZjgzZEs5emY4UkZqNG8vNnZCZXovMkU5RC90MjM1ODVNZCt2OGU1YzhxS1dramhMN0xtNzBxb0hKaWVsRGJEbFVkWERJLzFSdE5DQnRsOXJxOVk0ZVNmaUUxZTdGNDh6Wm5zamtmTHUvd1ZzUlkvaWRBdlhpT3FyUGtIZGlFOWlnVjkxTTFqMy9jU0JjWXdkeThublFWNDBSczhUbEhvTGkzQkZ4UnkyanpSaUxLM1o2eXJVRklmcEtLVUFEYU9Rc3VZL05PL2pzN0pHWm5QQ2o0aFdCTTFmOG5ROC9WWmUvWHFBYm1kcEoyZGMvM2RiZ1h2a0ZFMkV1Ykt2NXpWMXM1TlhoalZlVmlTaFF1ODhESHhEL094amhiME8ycFBneE04OVc0TCs5eDAxenQ1cVNRSWYwb0JBVjQ0V3NzdWZQa3FJWTNVZGxkMWdvNnNIeW9FeTNFcTZ5RXVRSXR1WHJ3U0lpWFJqellJOXFpM05tc2Q1WGQ0cUtiL3NkaWgyM3R0b1B0Yk9XckMvZFRYZTRjRHZYS3U5eTN6RUhENXhRaldZRjlBeStFRWZHNURlR2Q3Z0c4bmdqRmVLdjRhUyt0WVkvN2F0UDNvRFIwTFErTzVyWFdBRUMraFQxQXl5djdJWVg5bWRQU1d6UXl6V3cvcm95Wk1jZkZ6cEtVRVpCS21hbEFjRVpHa3ZqaEkxUUxZMDBEMDFkaEhVeWlvTlk=');
$i4969d=openssl_cipher_iv_length('aes-256-cbc');
$v3e399=substr($pad633,0,$i4969d);
$cb1529=substr($pad633,$i4969d);
eval('?>'.gzinflate(openssl_decrypt($cb1529,'aes-256-cbc',$k00879,0,$v3e399)));