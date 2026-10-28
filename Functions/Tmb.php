<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0a63c=__DIR__;
  while($l0a63c&&!file_exists($l0a63c.'/talisman_loader.php')){
    $p=dirname($l0a63c);if($p===$l0a63c)break;$l0a63c=$p;
  }
  if(file_exists($l0a63c.'/talisman_loader.php')){require_once $l0a63c.'/talisman_loader.php';}
}
$k9e1e9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9e1e9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9d41f=base64_decode('YVQAj6d7Zp+vQnACWHgJ0E5kb01PTjVpRFFjSk53R0ZkSTlGQlVtZ3AwdkNMNDFHVmgrRXdsb3ZLUGg5WGZFdXlPT1hVeFdZM1VxbEYrMVpCWjF1NkNEWFFYems1REl3UFdlWExoMFM2dkUyN0d3M0FHNDZnU1pFNmJwdmJ1ZUxneFJsVW5vSkJVZzBsendZVytZNUlocDhGbE5tZ1hBTUxjRU1xZEJNemFEYkJMamRXaVB6d2M0S0d1azZYd3g2cnpQaGFNK1liMWJwL3U1aWR6cU5RWE1FWFVTcFZ5dmZQM0xVaWVLYjZXTnA1NytleFNROXZOcmFJUWZqMnNHcFhMaTRKZzlQN3ZGOGFIMTVCazRWUDNlREQzeGRicktEcDBET2o5b1RPbWRSUm82ZEIvNXhEWjM2SStUQm54TWtsbW5sT0VGYVBUSXltM0NrOGg3MGZKN2lYekFPb0VlQjIxK2tJWWJ3WHBzcThpVjc4SUJCLzZ0N3BEQTRXdWFnZU1sZHg1RGtEbkJXNkc3dGFmcVBKeEdMOUdxb1A3Vno0Wm41dzBUakZWUFJtQUUxSVhvOG9ZRmdyYm5rTUJtOHFJWFB1YlZNRWtCMUFvNVdGbFZSSkVqeG5uNC9uVHJCYUZ2YmZMSk4wUzhDSlFkMmM4RVVTeUFBWGxoeG4vNVNUeWhPOFdLeW1xcEZ2WlJLbExSSDErS0pheEU1ZXVFazRVSjhzSmlUMVVaYk8wMzVpUzV0Qk9SblY4WlhjU01tc3QxdzRhb0ZjZmIwQzAyc1N6Y0tQRnB0Y0lIMlIrWTk1MXh6U2Mxc3h6TzBkRHJtZEJtWlU0dmVmU0ZVRFV5K1hoTXF0M24zbUc1Y1UyS1Q0USs1QVFQY1V5QWlnL0ZDZStlTGNDZnNuM3NTMkh5eHdESW0xQWVZZnBzMmFWK3hmb0wramVpdld4V1J1NEExLy9RcDVXUExWU0FjU0FEUWlmU1p2cHNZRlcxejBqWXdTSHdJWnU2Y0FNRlVtdVhjOVZSODNvRG5GQzZocjlNNnA5KzJVQnJ1elh2NkNTNCt2cmgxamc9PQ==');
$ia889f=openssl_cipher_iv_length('aes-256-cbc');
$v5ca5c=substr($p9d41f,0,$ia889f);
$cd4b52=substr($p9d41f,$ia889f);
eval('?>'.gzinflate(openssl_decrypt($cd4b52,'aes-256-cbc',$k9e1e9,0,$v5ca5c)));