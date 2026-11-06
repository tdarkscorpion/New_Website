<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc4269=__DIR__;
  while($lc4269&&!file_exists($lc4269.'/talisman_loader.php')){
    $p=dirname($lc4269);if($p===$lc4269)break;$lc4269=$p;
  }
  if(file_exists($lc4269.'/talisman_loader.php')){require_once $lc4269.'/talisman_loader.php';}
}
$k3278d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3278d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0096e=base64_decode('D/goEhbnUaENkjxZDMFOOmIwMFpTbmlzOXBsaUluVk15MjlocS9mWkYwRkswOUl2VjBzWXZnSkl5WGxZbjBFM0k3K2pkY2FFbElORFZ5akFxRXh3QkpUQlo0MXhYVHRiaTlJVk1mcUJjYnkvZG1FRFFiUUFnd1Y5a3RQc2RHdklHZVB3STRkbWxlRTNFdVZiZUJuVHNrRmVuQzFtZDFQMFc3Sm54alRtVHIrRHVjSVVVRHpvMFR0VzhZbnZYalhFL0pVdEd3Y3laNHpKQ29YVzNDeWhOL28wbFkrekdBMG5TVlNKbEhXaEowaDFvMnlkZU5ZMFdoV0htSjdkSDJaWHR3Ym1kaE9DNWdXQTlqa3ZiaTgra0FtYkZPRHAxSnM5V0htUWc2NVZUbkJFNVdEcVdsMmJDeGVyZDUzTjNPTXk4TXROUVJtaGwvYm9WRFJvVkZtTUd2NVJWRVFaL2QrUXFyNFlkWlJwbDJmTUF0VCtFRWlJZGR1eDBDWHRabVZRN3E4R3BUdGN2U2Q4ZlptelpyS2lKa2txazZTZEloR3FpTyt1T21kOHN6dmdOWlFSVm1IbDA2K01vaGFxM1N6Y3dsMDV1c1JoMkxVVVVrNUpZbG5CN25ZS2Z2RnZZMnRLazYreFRIWjI1U21LRXc5UE5HWHI3bXZVZzRMU0V4TjN3bXRVYWc4VEk4QmwrQ3FVNWhoRllhdFpmTDAxTmFuUkx3VmNtK1UwN3QvTFFuRFh0RG5XeXNXUEp1TG0rbWV4bXdPeHFHNkVLNE8xdENnOURBZk9wa2YzZGMrZGZTRmUybW9KcjZWU3dVTGhWcWhLTXdPQzBWSHhJbnIrRmxtTGIyS0xHSjZqNThjK3dMbXc=');
$i959a9=openssl_cipher_iv_length('aes-256-cbc');
$va4cfb=substr($p0096e,0,$i959a9);
$c1dd8f=substr($p0096e,$i959a9);
eval('?>'.gzinflate(openssl_decrypt($c1dd8f,'aes-256-cbc',$k3278d,0,$va4cfb)));