<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lddfe2=__DIR__;
  while($lddfe2&&!file_exists($lddfe2.'/talisman_loader.php')){
    $p=dirname($lddfe2);if($p===$lddfe2)break;$lddfe2=$p;
  }
  if(file_exists($lddfe2.'/talisman_loader.php')){require_once $lddfe2.'/talisman_loader.php';}
}
$k96e58=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k96e58===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7f786=base64_decode('eHILzDc5OHPbY3hJKwg9RlYyc0FsclJ2VnpYUDUzeFJUdXhRdjV0Qmk1WkZrU1Z3WlRiZG1jcmN1RmptMS9QOG1SUjc2Ykx4aEUxYWFzeUs1c2VVUmVoZ1lsQnRDdEF3Z0c2QWZyMi9iektSNHRlb3I5RVI5SjhEUmtZWFNoL0xDNysxS0hLeDVnay81d3k1UGtEb1B1MHV4OXFxMi9UZjNkMlJwTFdQVlV5Z3dOcU5Sck9vUUVFa21HeTdLenpYRVJoWVc5Z2ZyVXBrekt5a292bmV4U0p2Y0JPRGtpbEdSSUc1ZUM0ZTlURXdmbS9FWDlZSGl4bUViVGRQdXNTYTJYazI2YmFoTmxWTjJzOWh2RDZRVWNoc21BekY1KzlaVWx5WFpSOXJDR1lCQ1VuZVJYb2I0aWhxMU5rPQ==');
$ib3e5f=openssl_cipher_iv_length('aes-256-cbc');
$vd9e39=substr($p7f786,0,$ib3e5f);
$c6c2d7=substr($p7f786,$ib3e5f);
eval('?>'.gzinflate(openssl_decrypt($c6c2d7,'aes-256-cbc',$k96e58,0,$vd9e39)));