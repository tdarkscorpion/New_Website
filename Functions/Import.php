<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld31c5=__DIR__;
  while($ld31c5&&!file_exists($ld31c5.'/talisman_loader.php')){
    $p=dirname($ld31c5);if($p===$ld31c5)break;$ld31c5=$p;
  }
  if(file_exists($ld31c5.'/talisman_loader.php')){require_once $ld31c5.'/talisman_loader.php';}
}
$kf73bf=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf73bf===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p43b91=base64_decode('VubtfWCyeNeD3c0VzDoNhzB1SHp4WHhOOTZNckx1VzR3aUQwbVNXVFBsTUU4UmFsSmhpa2YyeWFhWTJTeFdWNjVrZHo0c0lESGVGc0Z1WkY4SElEdGpGMmpueUw0bWFGb0RIK3J0V2xRMFU0dERQTExWUlBLR2VxOFhUZmQ2NGd3SnNkWjZmYUlWbXVtVHNod000L3hmKzlkM0tNanJhczBRdFlkM0JQaFhueUtabis2OHVtdVIxbXFqRVpZcUlvOU1ac0JKRllodGZ6VW1xMXR3QnJXSURPVE5aT3ZsVzFGN0o3cTR3UlBqaVVNOW94eDZvN2NyUzFUbjVRVUc5YnlOSnVCUlF0MFUyelR5bS9Jd0x1OE1iV1hiN2dHanRUSUd1Uy9NK3ZmN3psT3hxSnJvZE9iWEI0SVV0dy9CNHRxOEZWUmNlV1dxK1hEeHFRVzJUYVJCL1VDcFI0MkhKNkNMRlJzZ0d5WGIxd1JwK1k5bnRwWERYTW82blVwc0ZGSGxyQmZuVVNWNXZ4aVVEQXFHbVV6VzhkY0t5WnQzRElZNGk3WVBZdVI0VGcvMWJvSFFTYjVCa3ZXK1huQklrWU9TcU9MUUlnMGJxeG9tdU9mcmgxdE5lZVRHQUhRR21YK3pVUzBUSXd1RnR1UFRPLzdOZWhhbTRrRlk3ckdhK0h5dmoyYzF1TG9TSkI5UGtP');
$i73208=openssl_cipher_iv_length('aes-256-cbc');
$vc2f27=substr($p43b91,0,$i73208);
$c10f99=substr($p43b91,$i73208);
eval('?>'.gzinflate(openssl_decrypt($c10f99,'aes-256-cbc',$kf73bf,0,$vc2f27)));