<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le4ddf=__DIR__;
  while($le4ddf&&!file_exists($le4ddf.'/talisman_loader.php')){
    $p=dirname($le4ddf);if($p===$le4ddf)break;$le4ddf=$p;
  }
  if(file_exists($le4ddf.'/talisman_loader.php')){require_once $le4ddf.'/talisman_loader.php';}
}
$k4c723=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4c723===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p93f4b=base64_decode('a20u4bPmBzwsww6oYI56KUwxN0VpOXNyQ241VzJ0NU14ZjZPVG40NlBmLzJ5Zmovd2tmbTR5T2ZtMU1ZY0RHTTZPU0R4dHpvTitXQXFNMG43dVFaWWRqd3dDelJlWDIzRXNoS2RqQTJSSUNFVzJqOXNSRGpZWWM4YnFVa1lQRmgzRWN5ZFZic01RR05HM1dZeW1lUnNBa1B5djRXTVZVamFSL3FOZGZYQnRVRWRxcGF4V1NINVV5SDM1QnZ6VjNNaG92MWxxL3Ayb1IrWE1WR3k2SVk2YkkxdlZBdmpzcEl5TUI1MURaMmlmYW90YW1pd2JXblFHN2lNMTR1NDhpaXZoTVc5VTBpQWhZOXBiVmtaS1BycWxZa01GSFVJYWxLMEZ3bVdmaFkyYXowZXZ2Tk01NUt2RnJRSmt5V3JWeVhFQ3M3Q2VqVTV1OUttOVVTYlVnTmt5WStjK1M2TDZwak5LVHpSb3BDTkNjTDl0YkhUNzRmdytONGFldVdrSDJyOGE2RDRWM3Rrd1hud1JVVit2WmhnTHdxWUM3cTRlSmdVTVRXSEhMa2ZYcjZXR0V6RjQzaUVXbE9SYXdDUDhLTHdRMzhTY0wxVEk3bS9aYzM=');
$i3d989=openssl_cipher_iv_length('aes-256-cbc');
$vae7c5=substr($p93f4b,0,$i3d989);
$c30378=substr($p93f4b,$i3d989);
eval('?>'.gzinflate(openssl_decrypt($c30378,'aes-256-cbc',$k4c723,0,$vae7c5)));