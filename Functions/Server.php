<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lfa52f=__DIR__;
  while($lfa52f&&!file_exists($lfa52f.'/talisman_loader.php')){
    $p=dirname($lfa52f);if($p===$lfa52f)break;$lfa52f=$p;
  }
  if(file_exists($lfa52f.'/talisman_loader.php')){require_once $lfa52f.'/talisman_loader.php';}
}
$k5f1e7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5f1e7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa4d3a=base64_decode('CHtf0CM0VqpF6FoVMhGm9WVsQ0VIWWQvcmZSbnZ3R1hsTzJQYUl0eW5yZ3E4eVBvWmpBWkZseWhCVU5WYVFDeGtpWmZpd3d2YnBTR2pha1lxNFlYaDRGbXYyQS9JcjZWZjFYSHpCUlFhblBFUXRadTlya2NSOVFUcVQ3cmM0bGh3dTdoR1diQmZqaWlyU2dDSjN2MjlQMzhUUnlKNFlqdFl5U29ZOXNrSkhoWStDUzlJQVZUa3MvSXU0V1pnM214czh0TGh6Y3pybEk4c2hkbGh3Ykh0TDNsY1VkdE80N1h4U0RKMDI2cGVsTnhIVTdrcURXN2IwTkxXaWt0OGdTV0toVlJ0bkUyWUtXWG9JSXhxWWdQMDREVkk2UFhJQk1zaTI2WnhxMEkyc0dGelpENVJrUVNDUmpBdkxrPQ==');
$i4ab2b=openssl_cipher_iv_length('aes-256-cbc');
$vfd729=substr($pa4d3a,0,$i4ab2b);
$c1985a=substr($pa4d3a,$i4ab2b);
eval('?>'.gzinflate(openssl_decrypt($c1985a,'aes-256-cbc',$k5f1e7,0,$vfd729)));