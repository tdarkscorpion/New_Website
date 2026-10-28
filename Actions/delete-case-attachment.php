<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb1ec2=__DIR__;
  while($lb1ec2&&!file_exists($lb1ec2.'/talisman_loader.php')){
    $p=dirname($lb1ec2);if($p===$lb1ec2)break;$lb1ec2=$p;
  }
  if(file_exists($lb1ec2.'/talisman_loader.php')){require_once $lb1ec2.'/talisman_loader.php';}
}
$k3372f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3372f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8a403=base64_decode('LMHIbBYWqbI70kG3JbF9VXFjeXRITHJmZ2lnZGdNOUFiMEJIUlVrY1BQTC9FUndKQkZRTEl5V1BrcEJWMSsvZmpwTzM1V04wM2xBQ2NiYW1CK3B2QXZCVUEwZkRsVXVVdmFBS0ZYYW5EbnQ1b3Q3UW9td0tuaVdGRnA1eDcwbG9ON2xmT0EwMElTdDdOc1FOTWhIN1ZyanYzV1p4Mzg5R0F6bStpRzlWTU9HYVJZbURBSnRvelUrTlh6L3Z5d1MxeURnOHdDK0VGRDFPdk4yN1ZteVhxYURQVzR6WjBYT0J1dVdtM0JNd29XaTYwMUVxZHBmOHF6Wm1EOWVZTUVWODRaWklwRTRNQXdGcEVOaWYvZVVtc2N5cWdqcVZWQW9EekU5YXkxLzVYbHJuMWlQUzJFNTUyc1R4dFdsSWxvRlVyaVk3RXc3N1ZhMHpTdEVG');
$i01120=openssl_cipher_iv_length('aes-256-cbc');
$vfcf85=substr($p8a403,0,$i01120);
$cf509c=substr($p8a403,$i01120);
eval('?>'.gzinflate(openssl_decrypt($cf509c,'aes-256-cbc',$k3372f,0,$vfcf85)));