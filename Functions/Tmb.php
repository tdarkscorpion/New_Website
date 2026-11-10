<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld1c24=__DIR__;
  while($ld1c24&&!file_exists($ld1c24.'/talisman_loader.php')){
    $p=dirname($ld1c24);if($p===$ld1c24)break;$ld1c24=$p;
  }
  if(file_exists($ld1c24.'/talisman_loader.php')){require_once $ld1c24.'/talisman_loader.php';}
}
$k869ba=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k869ba===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p97466=base64_decode('1/pNKo8xR1wpzMLSy/SlC01PZUh5aXdsVFF5RU5OUjgxTW44OXJkU2cwaXdhaDliRnJxS21DMFNhSTlxQmoyejI3aHNOeitmVW9rRzJITVlCL29EU1VndHY1Q1c1b2NkSHdzWWhZWEdrVFZGK3Y0NWVRWlhZS3Z5RjA4MmhXV3FPbWZLRnhSMENVVkd6ZTBsQUxUbzA2VDBTUVhyOHJxR3NQcWZyb3UwRnE5NStkZ3EvZ2ZuY3NTOHlzK2pLRmxGWnU5eUlDekUrTE5lSzZvUXhvWXNyZnhmS3ZvdExRM05KQlNJdUhrNWxTeEdkVXhCSnkxamhqWjY0U2dFa3BWWWZWbWxodHV2cUxWS1V5Tjk5SVBPZ1FCV0J2RE9yalJ0U1V4RDB2SzhYdVA5MTM5c3daTDdDUlVPNlVDZnAyQmxXV0daQjlZZ2c2Y0NlQkN1cXE4Mzl1dHFGcTBoQU9RdEJlTHdIUExxdkduc1ZGMURGcXcxbW1LcnhsRlN1cGRXQ3M0RFR5Z1VhS3pWZzVham5GWlFYWHNveDBpTzAxdEcvNmZXRU5wMUtqeHdsQVFPWmdEa2g0RDQ4dmZBZHM5SnNsQmEvZ2RlaXRLeWtRSkRqMGIraDltTTJuTjBrcktQTEV2dm9DOHA5T2E0eGgxSk5USEJld0MwaFlvbTY4cFNqVnpGNTJQeEd0WUxXMnB2Mk9NWU9hZVhzY3FUMko2ckRiU0oyNGRaN0ZWSzc3L0xMUHZEZUZZdzVDOEFDZ0dGMmd4dEh5S0x0MlpnOFcwV0wva1A5ZkZDWlFWcHdEcGU1c1NPQVV5VGVqUHFCMktpb29xei94Qy9mOXZKR2dJYUtkZVJYVXlKazk4Rys1RCtVZXlQZ0h3N0Z1L3B1UEZjQ05qcm5jZ3VYREhjc3JXRDc3Rk92bW9zMTBkam9xY2ZhOEd4UkN6VVBzWHNKZ1NPU0VpcDkvT2xNbVRLcjZzRmZQOHFYUFpTUERucUlBbjhYM3RQV0V3ak1CdENBazRta01rRkdSN1NIT2FlVkI5SkxJdjR6TnJ4TGxpekhoQk1nOWRGZFE9PQ==');
$i22925=openssl_cipher_iv_length('aes-256-cbc');
$v14330=substr($p97466,0,$i22925);
$c75f68=substr($p97466,$i22925);
eval('?>'.gzinflate(openssl_decrypt($c75f68,'aes-256-cbc',$k869ba,0,$v14330)));