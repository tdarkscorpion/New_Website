<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6b2c3=__DIR__;
  while($l6b2c3&&!file_exists($l6b2c3.'/talisman_loader.php')){
    $p=dirname($l6b2c3);if($p===$l6b2c3)break;$l6b2c3=$p;
  }
  if(file_exists($l6b2c3.'/talisman_loader.php')){require_once $l6b2c3.'/talisman_loader.php';}
}
$kad6e5=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kad6e5===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p04b93=base64_decode('0AawhE8a4pf05wTg8FG27lJ5ZTl2R04xM2JwQWpKRUVuTVRJckJpUVljWWtQbGRSd0ZIZlBLVUNTdy9Va21yUno4U1d2aEdaUU9TRWlRUkdtZDNiQzBYcjc2ZGFVc2dIdFBEMmZKNk4rQ21aT0pCYXRjNWpKcVplVUIrSHVyRXJFK2hiczJOOEVEMExNZ2VFaUNBZXFSSnVXUHNxMHgyNnZzMXJPY1NkS215Mmk1aERzV1ZuMjNzQkloZEV1Y0xkZ05nOWlqdGhwN3lrYXp5UkhrRTRkSzJZRXF4cCt1bVdDV2VJVnRESmpzcUFjam5wckw2YS9yNncwSjhMcVBJS1BNcklhbk1ibENuTHZDS3pLSTVBYloxSHlBV21EUkx1dFhkdHNqV1J0bVpZM1hESnpNc0ZxVEpOV2FNcXZYSVUrb2xLZjJjSUlWU2haakVxQXpxdkpWUFhiN0FEZFFodSs5NERhYnByTVUyMG9VMGlCWjJDZzBUdkhvamVnME1MTDc2QzlWeDZ6Tm9kck1CUUZXSzZ5SjVMTzlzd1VKRWFoc3FmakNrRUxQRHlFb0JJOXdYSm1UVkFRK0RsVTA0WkQ3OWl1dnh5cldTTC9LdFpiNGVhVHBRb2ZZVnNWRzhPcEJtRDlmaUs5a2xqQnVhZnlJUDkyT05PRTE5ZU5YMmE5Rnd2ZkFXOXFEV2tQUUo1STdjUWFraUE1N3VIZGRMdE4zTGRtRVpIWEI1enpCZ2J2QlBWYVcxUDZBR3ZqWlV5bVBRRjA3VXNGdzZNYkZpS2tyYzhLUlc4NTBYSVEyaUtwTVJucmpXbDdCVUNGcUhxZnRvd3NLTzkvUGxyVzRrcE5SSzZtZTdwUVp4OFZuMWY=');
$i021a0=openssl_cipher_iv_length('aes-256-cbc');
$vbdc00=substr($p04b93,0,$i021a0);
$cc41c3=substr($p04b93,$i021a0);
eval('?>'.gzinflate(openssl_decrypt($cc41c3,'aes-256-cbc',$kad6e5,0,$vbdc00)));