<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l32e33=__DIR__;
  while($l32e33&&!file_exists($l32e33.'/talisman_loader.php')){
    $p=dirname($l32e33);if($p===$l32e33)break;$l32e33=$p;
  }
  if(file_exists($l32e33.'/talisman_loader.php')){require_once $l32e33.'/talisman_loader.php';}
}
$k375a5=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k375a5===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb6bd2=base64_decode('t19ErR/wxKdFNTq0rn7D7mtYK0xYN3N2eHFESm9GV0gvZThldFp4eGlLM1pjTGZ6WEJOMGF5ME1kYTdKdkZJOWdrbFA5aHhnMDI2YzNLbXVnWEhxbTBmc0V0M1E1VSt4VzdsWkl1cjEzLzcxUWFPQUYxeG1LT3AvNmR5S1pxUjgxazE3Z3Bia1p3K2Y4TXVaY0xqeVlQSUdpa3RvM2JEQmRvOVBsb0MwcUd1S3lTM2lmK1ZuZlBzUmdwSkZDTEdtRFNzRlY2T3JDeXBYRGRoSmd6WUtmQ1gxNzdvTXJNMlJtdzI3YVBJWVZYVjJQK2pKT2w5czNyd1RQTFlYTjlIenRSdDFjaElibVAxTTBZSzUxUkNJSEZDbVRZNnZUK21VSk05Z1RvcEtzN1ZkV1ZwVUdTVllVb0pCc2lvPQ==');
$i36429=openssl_cipher_iv_length('aes-256-cbc');
$v18f5e=substr($pb6bd2,0,$i36429);
$c70b44=substr($pb6bd2,$i36429);
eval('?>'.gzinflate(openssl_decrypt($c70b44,'aes-256-cbc',$k375a5,0,$v18f5e)));