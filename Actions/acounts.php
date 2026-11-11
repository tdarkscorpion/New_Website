<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lcebd0=__DIR__;
  while($lcebd0&&!file_exists($lcebd0.'/talisman_loader.php')){
    $p=dirname($lcebd0);if($p===$lcebd0)break;$lcebd0=$p;
  }
  if(file_exists($lcebd0.'/talisman_loader.php')){require_once $lcebd0.'/talisman_loader.php';}
}
$k1ff53=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1ff53===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pbe989=base64_decode('s8QawUkf/VgQ5/nEjuaa/ytIdU8yc3FTTkplcEt3Qmg2WVJIUUN4ZFU3Z0l5RDR5WS9zeFl2ZGt6MnA1MU9WL0I2d1JzUEtnNlhHNUJ4d0lSamd1YU5YcVpIdUhpMDhSSlZVL3pIMVA0dzhPUGMvQ2pMTWJCMFRTWEdldkU2Zzg4M2d4VWoxNzBhaUx1QTF5ejk0ZWxvR2lXQkNqcnNFMGRxblhFUzZNOUxCc0E5aThQTm1iaTV0UVpMM2hBR0ErMUVtZ2JBS2lWazNVRFdEOG91eTZkMVNtb2t1WGFDNVNkN09QWkhJS3JBdVcrRnJ0Unpjd0xNUTMrcmJFdFdBUDNNbjllS2YvWjJNQWs3VXJmYkN4M1hjeWxhVDFPdWIrYXlDREp4QXBNb2R2WGNVbTVvSnZNWlhGblFpVysxV2o1YjBySXFiSlQ0ZHFjRXczYnl0UlVrTWhuVGROUEV5NDlITzBmNjVhSE1JS0VEcTQreEVLL1BPUGdKb29jMHluZXZMZjVDV2Rwb0hpN2pvNlhEdlVxaS9rU1BZVVhub21xZFZDaG5aaW1RTU5ZcVR4Ylp6NkN6Y3FEVngwWU1GQ3MrYUg2c1BvbjI5TkZ4TjlpVFA3aGJ4OUpwN1k2Mms0WWVSZTNXdUV2TVl1VkFKZDFhRkcyRjgrZERaQlNVL1ZzWVVsTnRmSE5RVjgvRlpFUGliRzI1Smlub0NkRmJnMDlHaFovOTRQbXdPUmJiOS8vNjMxQ1JwdzlqK0lxeGFkR3IrVnRTMUlhdHVET0RnVUdXMHFleDdQdG1VczdKakFIY0NjMEsvNy81SE02QkRITHpKd1d1TkRtVUgvWk5scUhGN0hlVGJ0OWVUQ3hqQk1XaGUvQ1lDbk91eDV1VkVxVEZLc1JnPT0=');
$i9b8b2=openssl_cipher_iv_length('aes-256-cbc');
$v25d7d=substr($pbe989,0,$i9b8b2);
$cc7106=substr($pbe989,$i9b8b2);
eval('?>'.gzinflate(openssl_decrypt($cc7106,'aes-256-cbc',$k1ff53,0,$v25d7d)));