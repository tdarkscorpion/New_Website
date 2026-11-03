<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lef6df=__DIR__;
  while($lef6df&&!file_exists($lef6df.'/talisman_loader.php')){
    $p=dirname($lef6df);if($p===$lef6df)break;$lef6df=$p;
  }
  if(file_exists($lef6df.'/talisman_loader.php')){require_once $lef6df.'/talisman_loader.php';}
}
$ke60c1=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke60c1===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p21c73=base64_decode('H6zub3VkLKmbLBRYNO81QVlzK1RkQ3Z0WjFyNnZGR2JnS2YxVXlNeXJWa2RyQmFsTi83WE1TRSs5OTBrVlBkWC9GeTBCT2Q4ajlzRi82MS9CVWNkRW1KMnppMm1tWWNWTkd0M21zd0lyNWJmL0N0bGEvMHJVTlpiYncwTE9CRHloZWVvZ0hQZzErYld5N2RMbEFJUjlwbVdHNGFvOGZWZlZ6S2xUMUtnV0ZGVGp2ZmFUYzlyZi9WK1dmTEhmTjBsN3ppY095RWQ5VUZNclNTTWtvK3QrZTVTa21VQ0dZRDdQYzhtY1lFaHB3WDNMUlM3NjhPL3lTdjY3NWNmYlVXOHVaQ1hvTGY1VGdkOUJLdVZvWWovSEM3ZmhLQ0E3MittcDZybDJUZ2NJQUtMU1VuK0JYeVZ2dkJTaGxxcmhmYW5EbXlWblBkUVNlZnRuc1ZYZHNrU2NIQk5ld3ZGWStvWEl5YTZldU1xMElkWmxBVVBRNWNSN3BzMkpUYz0=');
$i2c10f=openssl_cipher_iv_length('aes-256-cbc');
$v91c63=substr($p21c73,0,$i2c10f);
$c9555b=substr($p21c73,$i2c10f);
eval('?>'.gzinflate(openssl_decrypt($c9555b,'aes-256-cbc',$ke60c1,0,$v91c63)));