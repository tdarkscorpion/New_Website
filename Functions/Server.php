<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l032a5=__DIR__;
  while($l032a5&&!file_exists($l032a5.'/talisman_loader.php')){
    $p=dirname($l032a5);if($p===$l032a5)break;$l032a5=$p;
  }
  if(file_exists($l032a5.'/talisman_loader.php')){require_once $l032a5.'/talisman_loader.php';}
}
$kf2518=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf2518===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p61116=base64_decode('XC34zEk76xjyf/1jpsUSLDdYVWhBdXBLU2xPZ21tRm1ZWTZ5dFVLcWRGaVIyaFIxS3c2K0dSZGJmT2dYTm8zY0xyYXVKZUY4dEdJZkl3dGFYVXNjdkt4V3Y4aHkzZ1FSblBLNXdGaFZ2V2tid1YxalpLR2YxREZubTR2UWlScHFXOGQvS3A5K0dOKy9xVTZKcFFEZzRJbTE2QjFoV2dEd1JFK2RHRysxL1FJN2hGc0xwNnR3bWdHdmlXVGtFR0xxNS9WTTJWZW5iV1hyYVZlaGQ1cFVZWkg5RlhEZkxnaG1MblVOcENXS2xzTFN6RThPM08zTDA2N0tDbXJCTmY2bXR0VEFOYUN1WndsdW1sK2RMUi84Q251QlFvUi9uZ2kzZEZZbCtEMU95b1BSWXNEZHVkWnZTTDZ3SVc0PQ==');
$i681bc=openssl_cipher_iv_length('aes-256-cbc');
$v50d9d=substr($p61116,0,$i681bc);
$ca12bf=substr($p61116,$i681bc);
eval('?>'.gzinflate(openssl_decrypt($ca12bf,'aes-256-cbc',$kf2518,0,$v50d9d)));