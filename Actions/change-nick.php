<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2615f=__DIR__;
  while($l2615f&&!file_exists($l2615f.'/talisman_loader.php')){
    $p=dirname($l2615f);if($p===$l2615f)break;$l2615f=$p;
  }
  if(file_exists($l2615f.'/talisman_loader.php')){require_once $l2615f.'/talisman_loader.php';}
}
$kd82c7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd82c7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe36b3=base64_decode('ud+Q/LK2ocN6+B1D93mFW2VDTEI5WndOZ01qYlFrSGFYUzYxS1JVb1djMzFSZ0l3T1I4NnZFYW5taFNQa0hoUnFTbHgrNW95L2Qvbkw3WGdUOXRIa3FabEswSmhQY3hiZlpmWUVRc2ZrR2gxYjQ4OHZRckJtUURXV3F0MEc4dnJrc0daK3BlSVBqdCtVeWJ3ZnVoUkp2YTZaUzV3VkpMRzRicCsrbVNWYWpDU2VNbFhuMXQ5dEJnaHQxOXIyN2lKQlN3dGRCSmRwUFVRbFZpUlExblY5RkZZU2U4T2wvbVh3LytVQ3RnSm50a1puc3BYMFpXczNOaCtOcUR4SkFjbUF2Nis0NTRNUGZRdklKWVUrZFViSzkwSUhRekN4d2FWdm8xc2dBa0lETC9Hc2YzSlgvUTBwamxWTGNOak12cWZxb2J2SHhmSlFSZCsrTSsvZlNUMkZvWnMxR1JEdWp4VVZJd1NPS0tXMHBiTVJHVlZ4Z3V1VnJwamxCeDFZY3V5aHN1M253WXBZelc5bXd6OUYvbzhKbDBLSFlFdm1ERGJzL09MbFErOXN3dWR1WU8yeHF2cEcrczN6dFB1T1F1UUExeUZxYTNFZ2lSMldzNDdOL2lsS0FzcVJFdHZsQ3hFT1N3MnZWNVVPckJRNjR2b2ZsQlE3Q1orU1ZXSll0Z3FPTGhtNE83Wjg3Y3d3MU0ydDhmOFFCTkI4cXY0RG9YaG9CZmlXeEJadWJ1TzB5V28vVjc0d1NQQmFOUHJDOFhxcGxlaUZMSVRxNFpyVSs4bTVtS1gvWFF3VVY2bktucGk4OXNsVnk3MmZiNTdnNGNkRytLSTl4Z08rZUFRZTJRcDVXMXE1YnJsN1E5QlNjMllaai84TERTSC9UbUx5UGorWkZWYk12d0VjTnltQTVWUElrdndkVlRBa3NyVWtaeTlHalBIRXdGa2MxdHVVMEY0WXpGeHNFTGM1Qm5nblZQcC8zekt2SVM2RXBPekw2N0hncCsyK3BUcFZ0Yz0=');
$i1fd1f=openssl_cipher_iv_length('aes-256-cbc');
$v3af21=substr($pe36b3,0,$i1fd1f);
$cd6275=substr($pe36b3,$i1fd1f);
eval('?>'.gzinflate(openssl_decrypt($cd6275,'aes-256-cbc',$kd82c7,0,$v3af21)));