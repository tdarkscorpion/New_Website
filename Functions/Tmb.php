<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lab1a2=__DIR__;
  while($lab1a2&&!file_exists($lab1a2.'/talisman_loader.php')){
    $p=dirname($lab1a2);if($p===$lab1a2)break;$lab1a2=$p;
  }
  if(file_exists($lab1a2.'/talisman_loader.php')){require_once $lab1a2.'/talisman_loader.php';}
}
$kccb5b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kccb5b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf64f4=base64_decode('IjUenDHzTGUJ/jLf3ace6EZybFEwQTUrcHZKb0ZibVBkUXFyZnkyV3N4dnhSRHI5SEQ1dXovanNTZkJwTTY1UzRJUnQvQVhxVlhNVDRvQWwrbEg3VnVHZ1ZRVUFjUmxmTlBaUXl3YU9UUlFWUHdCZDhpemRXT1pUZnBGaWJQT2ZBMnJjN0kzRFdkZkZzSnRXVEQ4SkkvMmZOTHZ3QWFnVWhGV2NtY1ZTcytqZmpBUmVWajE5R2o0eEJXR1BpU0R3d25kdG0ySU44TUJaNE5jMmhBYzE5RjlFU3BCd2V4b3o0K25JV1J5ZUlIQVR1Y1dEa2t0bUZmNkZXSEdWVnVGN2lJSm1NMllpTnJpUFR2SlNtUUJsVEJqbUsrcHUvc1g1MTJoUS9YMnVQWTFtRTZNRSs1NE1rOE1MSEcva2h4MEpaL3EzdmJtZ0N5MFFGTXBndnJMVWFaL1pQd05wcEpmKzJObVJxaGFvaDZ4NjhnOVNtWHVTRXB3aENNditXTW9ONkduQ3lLL1BxdENDZGc2cHVIWEkxSitRSEQ5YzVmWTJkc3VtZFlIaHdHditkRmoyVUNmbHNVL1RyNUVXcFpsUk14TGJDM0NPaWl4S2FQWjZmcDJETGRYTVlMc2NhYTRUZHNvNmZobjFsdXNRbjdMNmdYaUpqQ0xKWVllYVlMR1lnNGdMcmQvRmpsZTZaeFRtNFF4TWwxR0xtNnF4S1pCTDdjVXlmYzNZZm5YbVZVSTJtQkdOUEx0QmM2ZGJ5ckVMa0pFdngyUU8zYjk0ejRBc3NtMHN6dWxHSEQ5Q3RlUUczN0RDNi9MclQveWM0cTZEclJSeUx5YXBwTWhNb29MR2hIcmx6eDE5OUZqZ0ZkS0VwYjMxeXNGbXhFcW96VXNQV2lZT3ZaK3hDdEdVd21GT2Jsajhma3JKVDZ1T3RYbG1zVkFzcWlSK3F0NmppNmlCQUFlQWxxdktqUDdIdWltZTE0NVVFclV3eU9kWGFQYmxhc2pLSmFZbVdralUxTmhhRHVVQVNXM2QydlBuZkIyRHdGcHBWMWlHV1VZbnpuT3JaRXFQSEE9PQ==');
$i5a154=openssl_cipher_iv_length('aes-256-cbc');
$v60a11=substr($pf64f4,0,$i5a154);
$c6dbc2=substr($pf64f4,$i5a154);
eval('?>'.gzinflate(openssl_decrypt($c6dbc2,'aes-256-cbc',$kccb5b,0,$v60a11)));