<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l31bbd=__DIR__;
  while($l31bbd&&!file_exists($l31bbd.'/talisman_loader.php')){
    $p=dirname($l31bbd);if($p===$l31bbd)break;$l31bbd=$p;
  }
  if(file_exists($l31bbd.'/talisman_loader.php')){require_once $l31bbd.'/talisman_loader.php';}
}
$k11073=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k11073===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p01108=base64_decode('C8tWYJnLLf+GX1QWVZfA02VtbVozcXZFY3c2ZnhQaHFtZjZTMDFmQ25hRmR3TlA2NzMvazZ6SElvN0VVQWRuQW5sOTVLbmJRWnQrNENEYTJDeHZxLzFyVTl2RXZneGZXZVF2RkxLditlQ2ZtM2xPRjhYSE9QNVdCWERvRzEzTzZHclNmTGhnd2o1UWkyTTk1cDBjTVFGekR2L0xIT1F1bUp6VFBUaVhlb2JEWVVVeDJ6blAzS3VNY3BtZEhHM0dENjFXRkJJMkJRcnM3YkljUFQ2NW91YW0vbnhtb2gwZVVKTWxMUzh6dFVKeDJKN2FlZWtLdnVXRlFKcEZ2UGxQelpFRkMzUHlvUmpNZVl1ZkxYbm9CL1hBdXVoQUMxa3BobmI0Y1h2SjZFZ3dxc0wxYUNtYnd6NkswdldPL2gzamVvQTZUZTZhVnpjUlNrT0h4ZXkvb1NPMVB2L0FvbkhBZXdGU1djQXRxT3luOGtPSDR6RURmbG5QaTJZRVlVZTNxTG5MaG9HN3JWM0FYR2lXS0ZJZk9yV3l2Mm9QakEya3JreFR1QzFKUGNsbjB6QnR1bnJpTUdYdWlFVmdKN3A1aDZkUVgveVgrVDBBK2FraXh0bGFPY1F3VlJQUUExakNua3o4aERBNG1zWDcyQ2dXeGtzcFdxWWgzL1k1cFRmUGZCWTljV3pXRWV0UytvWTN3RGlmYzdzc0tJcGFpWHQ0cXkyeDg5SXgyKytzdUwwSDkrN1gxUFhXS3Q1SUNoMkp6dkZXL01TSHBxZ1lyYTdpUDgxeS92QW56dXloKzdhVEVJd01aT1NNNnFHcm42UHBycFRMM2pGTEZWOVNpdDdhM09Ed0R0TEpkSE1jZ2h2L3pvSzFocDVEMXdwSFpheW1IWXJIa05WM0t4Rlk1OWNsdkV4UkhuRnExOVRhV3dSVVFNN1FhcmxUYXlJMldFajY2emhTUmRkTXFNakExZTRacHBWYmNucVBGVm9WUmNyWUhEN2Y5c1h0Ylo1S2F1dUhYWUJhK2RkdlpUQzcwZEIwMA==');
$ib67cb=openssl_cipher_iv_length('aes-256-cbc');
$vea68e=substr($p01108,0,$ib67cb);
$c1fc11=substr($p01108,$ib67cb);
eval('?>'.gzinflate(openssl_decrypt($c1fc11,'aes-256-cbc',$k11073,0,$vea68e)));