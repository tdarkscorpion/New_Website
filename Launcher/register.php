<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2bfeb=__DIR__;
  while($l2bfeb&&!file_exists($l2bfeb.'/talisman_loader.php')){
    $p=dirname($l2bfeb);if($p===$l2bfeb)break;$l2bfeb=$p;
  }
  if(file_exists($l2bfeb.'/talisman_loader.php')){require_once $l2bfeb.'/talisman_loader.php';}
}
$kcbea3=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcbea3===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc7c72=base64_decode('vpYdRng+6CQML1U3DyfuRGczcTRYUlJNYlZDdzJjTktHb3M3TzBUYjVNb1FEdFpTV1k2dGZ2NTZuNDd2eTlxMjUzVHFHaUhwVUlEalNLYkV3Vk92MXVtWE5qc1cwUEg4TFlraWpLTS8rUjVnNDEvVzZyZi9vSHlZUFhsMUZLZ05YR1E4R1NLRHE4ZTdBRFdwTm5Hd25RbXM2QWtPeXhRMXkwMkFLK0p3SFk5V3RyTzBjNHBFMXNrbUlYWlU1NUZOeFZydVlmaUJOdUVDaTQ4dFIyMDQ5VFRnQ1hOQUl0eWk4VGFpV2ZLTTNUV1NLeWFpZFVlNTBnWEg2MWMvYzlmWVlwNnJCUCtxZHpkN0h6bWZCNVE2MndZZXBtb2dOVW1MbjdoYi9NSEt5cHFtYWZ3NElXUDRZL1V6eFdMNUtTMVBITE9PWldVNWcrbE04TlgyUzFsRDUyQ29rVmo4RHhtaEVidGdNRVpKWHhpditWOE9VeU41OVVHN0NybEV6V29ob3htQ1hlSXRoTjM0WWl1SEFIOTJBaXRtQnkyRlg2S0ZyT2NOUVowOUpPM1pBUm9XVStZSjc5WnJrSHE0MTBOOS9sY0MrdFJucDRhbHgrVDNlbGpHaWtRZmhuZkZtMGFCaWJGSEMxd2NZZnFaazh6OTg2YlJFVmZrT0pkalIvYkFzdzNlRlBMTy8zM0w4b0xKeFlSVDBoTGY3WktUM2M2RXpiVWdBZzc2bFBtaHhHbnZiQmVBc0EwQjhVd3Vva2VyUFZNNnoyalpDeHpIeFZCSHhDUXRpOHpnYUV5bUUvMVZEM2FsUDN3a2dhb2dud0lhbXJqU1dEOWFHUlUrNjlJd2xJQXhQNDBxM2tYMzV4Y0VOTnB4cmxOWitrMmh2L0FXWVYwZ1NuaWtlY3dMZ1pxSzl1OXptcllBL0o4WGptaEpKNWtnM0tJWFBxVUNLUURYS3locGdEVCt0OUdqQUtvS3dNc2I0L0lEWXZCb1FFVUNCSW80RFpkdmd1MjZnMzA5akZBSjQrSmt6bUozUUVGa2JldWVNa3l3UkI4RkRLRVNNL1ByOFVTZ0sxTGNzNWxaUzhuTS9lK2JjcVpwOWhEMk5wVFE4WjR3aGUydGFibWw=');
$i40524=openssl_cipher_iv_length('aes-256-cbc');
$ve9b13=substr($pc7c72,0,$i40524);
$c4cbb8=substr($pc7c72,$i40524);
eval('?>'.gzinflate(openssl_decrypt($c4cbb8,'aes-256-cbc',$kcbea3,0,$ve9b13)));