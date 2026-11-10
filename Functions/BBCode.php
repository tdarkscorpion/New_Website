<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5b56b=__DIR__;
  while($l5b56b&&!file_exists($l5b56b.'/talisman_loader.php')){
    $p=dirname($l5b56b);if($p===$l5b56b)break;$l5b56b=$p;
  }
  if(file_exists($l5b56b.'/talisman_loader.php')){require_once $l5b56b.'/talisman_loader.php';}
}
$k1d16e=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1d16e===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pddc2e=base64_decode('U/32J3dFkvYEx7Gn98GS01o2L3hJSTJXanZSUUcwZXdrTml4SDNwcUNuNXZDdXVVZXFQOVExekZ4NW1LeWpPNExvRGJzdGg1NDFMSExKdmdYYUExeXJtVHRVam9zNm1WeWpoQkFRWU5CMVplaTA4TUVpaXhjdUFaSSsxUnRZaTgyNTJTaDV1Qk5vV3hHUzZFMkJlU2VmZkZPTkxYaHdZekdibUdMR3l5Z1o1SUVvcXQvamtpUjVvY0czNk5hK1FWd0pVbmJ4dDAzZEpmaVREaXZIdThQN3NNelFTVmdNc0FEN25ZRTZkN3R3SDh3RFRuT3dGK1I3T3ZiSjFWN21kREVPR3RnZm5jVXFJejJUaWF6dmFlQnd1dkxLcndzeHc0cjFkdzM3bTR0emhRd3dUUTcxem5NN1NOb3lOcWJxbDdxZE1FNDVldTB2Qmw2dzhY');
$i99981=openssl_cipher_iv_length('aes-256-cbc');
$vbb993=substr($pddc2e,0,$i99981);
$c5a5e7=substr($pddc2e,$i99981);
eval('?>'.gzinflate(openssl_decrypt($c5a5e7,'aes-256-cbc',$k1d16e,0,$vbb993)));