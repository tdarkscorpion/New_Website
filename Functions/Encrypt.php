<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbafe7=__DIR__;
  while($lbafe7&&!file_exists($lbafe7.'/talisman_loader.php')){
    $p=dirname($lbafe7);if($p===$lbafe7)break;$lbafe7=$p;
  }
  if(file_exists($lbafe7.'/talisman_loader.php')){require_once $lbafe7.'/talisman_loader.php';}
}
$kca491=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kca491===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p96ae4=base64_decode('JTQ6Icgvwg1AwaWTIjUDRlFjTWJGWTBrREd2NG1QbDlCR2Z2anZSZDduZWxvZHdSRkRMeXQ4V2krM1V5VkRXdjBncmZPbWgzTklkUFlYVkRZRVZLdlVwazNNZ2tVaGpFdHM0dWNiTHpMM3V6aHlHVFVBZENMS1MzajRDa3F1Y2dqVnpYeXhFaEpibFZha3g4TWNoOHQ5UDRoTWloL2IyUkRRbTdqSm50cGRhMnc3d0JIbDZYM0NqZ1FMcmJDQVd5ak5YOVh2QmFRcUR5ZzV1RTZkTTY1dUlpK3g1VFc4ekdpVWRwZmkxMG9rWUpyWUJ4M0hpZGhFMFMvaVY1UVMrMUdKSThtR1hycDhCSkNqSFVna0ZYSWVmY3RwVFA4QWJ1Uk5QN0l3UmtCMzVFM1BPZTFWcHdJSmY5d3hESHNVR0xJdjcwSjRxTDRJMGZXYzBZUXVwcERRd1lJV1FXTk80ZlFYdmlYNktudXh6TmZETDV4NE8vdWt2Q3JFZXNHRlZSanU2WXo0NWFYd2NLL2l0aVZyWmR6aEtJZi9QSVAxQ1I5TGxMZHBlcTJvUTJrYjhzYWswMmh1WHpRMVlXVjJvWHRkNncyMnJ0SDhiNkN1R2s=');
$i88bba=openssl_cipher_iv_length('aes-256-cbc');
$v20a14=substr($p96ae4,0,$i88bba);
$ca45b0=substr($p96ae4,$i88bba);
eval('?>'.gzinflate(openssl_decrypt($ca45b0,'aes-256-cbc',$kca491,0,$v20a14)));