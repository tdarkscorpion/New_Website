<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l08f68=__DIR__;
  while($l08f68&&!file_exists($l08f68.'/talisman_loader.php')){
    $p=dirname($l08f68);if($p===$l08f68)break;$l08f68=$p;
  }
  if(file_exists($l08f68.'/talisman_loader.php')){require_once $l08f68.'/talisman_loader.php';}
}
$k23437=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k23437===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p001e0=base64_decode('cDSiYOBrfBaKfWGG9Oj9aVUwa2haL2UrYlVZSVlPMnZ1dkw2VFdxZkNpU0tPcWgvSlM5YkcwWU42Z0tuNVBibm5JaVVsWUZYemgvTSt2aVRSS05WeDNUY29nVklWVGRGQzh5aGFVZi9nUDZSYnpBQTZqVmdrMERvWFhKQWlrZ2o3MVY0UGJDK0RURDdidnorcDVpTFRRN3RYQytpNG5lU0pkUENnTFNFU0Zydk9SUzNLNlBaTkZoSXh5L01nKytrMHIyd2VEejZHVjJ0aG1lNiswbURyVlhjelNRTGZ2UGp3KzVlS1VNTjAzSVUyWXlTazJLaTY1eHk3VmJ5OUY4ZnFNOS93MTBCU2NrWSsxVDNrekhaVU91eHMrbVY0dnlVMWNaVXp0KzljYXZCdjNNL0RtbVl1RURaMW1VPQ==');
$i79e1d=openssl_cipher_iv_length('aes-256-cbc');
$v85dcb=substr($p001e0,0,$i79e1d);
$c9ccf9=substr($p001e0,$i79e1d);
eval('?>'.gzinflate(openssl_decrypt($c9ccf9,'aes-256-cbc',$k23437,0,$v85dcb)));