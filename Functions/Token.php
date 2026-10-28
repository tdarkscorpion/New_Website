<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc88d0=__DIR__;
  while($lc88d0&&!file_exists($lc88d0.'/talisman_loader.php')){
    $p=dirname($lc88d0);if($p===$lc88d0)break;$lc88d0=$p;
  }
  if(file_exists($lc88d0.'/talisman_loader.php')){require_once $lc88d0.'/talisman_loader.php';}
}
$k8991a=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8991a===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p925ff=base64_decode('+2qoxSb2L3iNP5xQ3JmJ4kRLUWpyUThmUGpac2Z1TUZoWk1MZVNlSnhObkcvaC8zWnlPUUhnU0lvQkhnNjN3ZHdnQnI2eWxzcVVBbm1HRHIwbU13UG41RUptNzhST1phTXd1MTZlZDBLRml6T2N5aWtYcnhTUlRzcGt6cWd5QUN5OUNNRjc4QTNEc1loRFQ1clRocjVrcS9nMHV2SjlWYVVHR2M3eFEveVBMTmJvYmxjSlg4SkxYSGp5R3BGdWxnZmFYZjNORHM2aWMzaEZpQkNXRjZ2b3B0b2M1TGFEQS9BVFBWY2FiUFpUSll5c2V4Mm1ZVnNXUFFEVmlLUHNsVC9UNTFIeEwxZTE4RHJUSzFwaWpZeXNRY1hQUUgrN3lZTjBxRGlGbkU2eW1Ka1V0SlJ4bDJ4S2YwZ3dGOVdYdnBCMnlGcklTcWhHeGZpR1BQalpRRGxnZHJnK081TnlZMS82bDdqcjBEeVlEQWV2RGxYc0J5TFhKMlZiaz0=');
$i86eae=openssl_cipher_iv_length('aes-256-cbc');
$v736e9=substr($p925ff,0,$i86eae);
$c127f1=substr($p925ff,$i86eae);
eval('?>'.gzinflate(openssl_decrypt($c127f1,'aes-256-cbc',$k8991a,0,$v736e9)));