<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l15842=__DIR__;
  while($l15842&&!file_exists($l15842.'/talisman_loader.php')){
    $p=dirname($l15842);if($p===$l15842)break;$l15842=$p;
  }
  if(file_exists($l15842.'/talisman_loader.php')){require_once $l15842.'/talisman_loader.php';}
}
$k86773=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k86773===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p12842=base64_decode('1vh1pstqlZkTh8zEuaUmSFFlcnBkWWsrQWF0bXY3cDU4aHlycTVRYUtyWkdDUnZaSVpVbWVWaTR4bzc1TFV5ZVUxK0NyTmwrb2FCOS9BcW8yOG9kWmtkWnFuT2RLVVdSdnZRaXhRcGRLUk5UR3cvdG50SWZzTm9jQVY2SW1aZTJPYlpOcWNZdVB1MjVuYkZ0LzdkWkRDanA2cjI1dG9yM1lIalkrNGlKeWVNTzRjNzlhdTFacTJhQVJzcVVlaEJ3SEVMeStQdDdYUGgwNHk0YWUxQ201cDdMdnM5L2RwK1QwUWEwTXltM3FGMmV1VkVoQWMxZXhoSTNpMXErN0pNL1lVcUVXR1ZidS9hdU5HaFlUS2xMbTljSWVUQ0hTN3R2a1lTZExMUis4L2YrTkJxRDA0QUJ2OHJjK1BjPQ==');
$ibe56b=openssl_cipher_iv_length('aes-256-cbc');
$vf6374=substr($p12842,0,$ibe56b);
$c5b085=substr($p12842,$ibe56b);
eval('?>'.gzinflate(openssl_decrypt($c5b085,'aes-256-cbc',$k86773,0,$vf6374)));