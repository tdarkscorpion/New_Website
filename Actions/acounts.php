<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld8d42=__DIR__;
  while($ld8d42&&!file_exists($ld8d42.'/talisman_loader.php')){
    $p=dirname($ld8d42);if($p===$ld8d42)break;$ld8d42=$p;
  }
  if(file_exists($ld8d42.'/talisman_loader.php')){require_once $ld8d42.'/talisman_loader.php';}
}
$k05cd3=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k05cd3===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8d980=base64_decode('98rqpLIwBUBLkRxIyfq0AmpLZWpxKzBhcEJSVVBBT24ydC83SmlFYW8zeHR4MkdiMFptbEU0TmZ2WXN3WllFQ2pGV1RPM3BMcDB0bTZEOStlbDBydEp3c2QycFlwYk5qaUkwRTNua1VzRGNmWXRzN0hNSklhOUlyQlYyTU41V2hQckRSWWJydjZMN2tMU2JKK0VOSEh5WkVmY1kxVWJVRFdRRk1jS1pVWTRHUGpUSXRCTHBONCtnUEg3R3dBT00rVWlXTG9lOHQzdEJETW83TnBuNm5iNFdLVHozU3lQT2hpekwzZHRjM1h5TXl6UC9CRjdGbDFBRjhPUVREcGg0eVpQRUwxakpnYUt4bmhtckJWa0EzVk9GaEg0aHVxVjBJV21OMk5aWGtoNWQ3dlBaYkFHVTFhbkNtTFUwY25GanF5UmZkQXBWVEZwd21LL0RhNmc2R0QweFhUTXdCMGYzY0RYVFMxc1pwbkpnckZPWWxuZlZleXg2RnBKampvTkRqUzMrdkl0NmNMOVhMSnJUWDluZVZJOUZRUThlektaenhscmNGcEpwR0doS281M3RMR3RESEdBa3JZbjVXWC9ETDhUR0JoZ1FSQ1JNcllMTU1VaE9nVU1FWjNyZWYvL0FTRml1R0Z0eDhzQVNRc00vSHBoNFgzbDhVNGcybWhIbm5jMjEvSnJTaklRU000WnQxUmVDa2Z3NkFmcTRlL3F1NEpSc2FBT1grbmZhUjRibHIzaTBQRGYrTS9EaHZQbjRuRWplaTJjSUxhRW1xclcrQ1QrR3g4N3NHdFkxSVpMWk91WjFyN3ZKZ0k3eFdMd2tuSTJhdVh2MXFCdDVDbDlEUzBlUHd2Z0lQbHpMUjVpbEtzb2NRcXR6K05XcGJ1ZG03WDdYSUF3PT0=');
$ia820a=openssl_cipher_iv_length('aes-256-cbc');
$v90a2d=substr($p8d980,0,$ia820a);
$ce695c=substr($p8d980,$ia820a);
eval('?>'.gzinflate(openssl_decrypt($ce695c,'aes-256-cbc',$k05cd3,0,$v90a2d)));