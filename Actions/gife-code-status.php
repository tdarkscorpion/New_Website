<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0c06a=__DIR__;
  while($l0c06a&&!file_exists($l0c06a.'/talisman_loader.php')){
    $p=dirname($l0c06a);if($p===$l0c06a)break;$l0c06a=$p;
  }
  if(file_exists($l0c06a.'/talisman_loader.php')){require_once $l0c06a.'/talisman_loader.php';}
}
$k7fc63=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7fc63===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p70688=base64_decode('0UQijuT+xHuZW0RzSYv0cy9vQnJzV01JMEE4YzE2dnJ2MDllcWkwL1lFdXFCS1o5a0RQZ2VwL2xXZmJxQ3R4c3R6T01KRXVqd3lBbC9hK2RYc1d0YnZtaHZWanUxcGtoa3lGSjA1VmswVTZwV294dHhMOUVNSCtUWEF5UmNHMlhMQWo0dVV5Qnd2bnBQdXFVNW1Bc3VaQ3I4RWlYZTI4QzZJRUIyaDdtWmhxWVhnYjhRRnZwRkpGUmlkUVpRV2wrczFyaUdDdXhqWWZnVWplYmpYeTUxMXFDVVQ1aEtudnFGRXlkUjNoSEpwV3BjQkp3d0w4bkVaN3VEVEE0M0lzVndxZVNTeDV2ZlNSMHN0YVgveEJpMTJHZGh2enZLbDNqeExSWDhzbUJOK1VlVHAzK3dHMU5VSUdNcXdVdWNoUEZ0OGx4NmdGcDJBdUg3VHJmaEdWSWpUMG9vTjRFK3luT0Z3ei9MK2NGVE51U256aEtvS2F6ZjY5UGR5ZitBNk5xbThDMWttZTlpaDArL3g1RGRnNWJ2SHUzcjZ1ejB6SlU4bmk5RldmbE9Hb01LT3ZPbTNOZmhYeUptdzlHQlBtdWtSdk1aREl2ZnlFeTRuSVFJTzJyWkhBcDlrS3pBTHFvMUZEckU3RHFnb2MxKzQyZ2I2Q1pXZGRzVlFmc24vNXQrcXdmUlY1YzUzSHV4aXYvVkZOM29tTSswcituZWlWa1RyOUwzN2dJRjhVWW5MMzFxYlE0Z1NFeVkrVFg5UlVhdmVmYmpUVDNEcDZVSVZMUDVGTUlFQVhVRTFQazFFa0oyTUVZY1Q3VE5vWkM2aFZFaW9XaTRxSWs1aXEwSzRCSzBteXZCRHZaWGRCbFhMNzQ=');
$i30d00=openssl_cipher_iv_length('aes-256-cbc');
$v133e3=substr($p70688,0,$i30d00);
$c4e7d0=substr($p70688,$i30d00);
eval('?>'.gzinflate(openssl_decrypt($c4e7d0,'aes-256-cbc',$k7fc63,0,$v133e3)));