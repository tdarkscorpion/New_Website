<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc76af=__DIR__;
  while($lc76af&&!file_exists($lc76af.'/talisman_loader.php')){
    $p=dirname($lc76af);if($p===$lc76af)break;$lc76af=$p;
  }
  if(file_exists($lc76af.'/talisman_loader.php')){require_once $lc76af.'/talisman_loader.php';}
}
$k1ce45=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1ce45===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p2aec9=base64_decode('pBIyi4YqD2Up3xKbS/T6c0FqOXlsZEw4OXRmNGpzeTI3L2luZ2thVGcxenJVNFcwZjF6OGJFOGNIYmhxdmpmWVQ3QUZtNG1iWCswNGNRc1RUYkZTMTZ5bHZmM0taL1oxLy9uRmpNMkZycFFtdjVJUWNGaHhKVDFwZnFPaDZ5YmQzU29BYU0wcmhPTHk2REFRNVBQWlptck9vbHliNVdQRkNPTWtuOENrTWk2Njc5eUlXYStxTEx3SFVhWmhUR0lWaThrNTEvNHk5a3BSUzhUa3pWVzlhR3lTdlFtSXZKTE9VWk1rZXIrVSsrTDhKbjVsOElwYTdtYk5vRUlZVFpRdjY4ZHBHc3ZNZktOTnRMYVhHTTN6a0tvVGNnd0U3WS8vaW56Y2trell5cVc0b1pqeFAvNUkvYTZnanBLTzZaV05QWUduZVYwVk1BTll1R1pnUmFsMlJWVURqdVFsa3RjYjJseEd3SFUxYUNDMUZkYXo1QVh0RkpWaHFmSG1DZDRUUFF5Y1BzdWUzMnlkdzhibGcwQWRHRFYyTVVBck5TeXlnaEJqMlpjcHI3S3Y1L2RtNmNBU0tveWRKRGxzOXl0eEJvUFR2M3lwRjBESHI0dU5jWEJxTERjVTUvazltOUJaZFdUR1lLMyttbzZTcjYrSHUrUUtkWnJIeFdYWmxncmhjRnNnTHdJUHlBekRqRDhwdS9EekM1UHp6WHhUOGg2a3M2T1RPVjE4bjV3ZVYxNDdxUzA3V283U3ZKRzBjTWpuVkdUTmxtN0pvZUFSbm43emdGalBQQWFxZDJ2T0Z3RXlMcWVuN0dIenQxQys2c2Zwd3FHK3BmajBuRTRkbXNLaDlFYUhTQXBiTzBnSk5aNDd3R0tLSGEzZTFYWndYQjNwMkoxZEIrcWc3QWw5bS9iTUcvZGdhZjBVYUZaRmsxZGI0eWg1c0YvM3M5ZStRNUhXcUVBSmJsUTFwSlVySXU1S3lKaXc4ZjNFWTJQWUxNZVRmVms0OGVNM3ROdnZITWsxbW8rU3c2MHN0aU5vcTE2MEU1MkxUZmdLVnpIbTg1a1VVMXhCeEE9PQ==');
$ib7d63=openssl_cipher_iv_length('aes-256-cbc');
$ve6642=substr($p2aec9,0,$ib7d63);
$c9e3c5=substr($p2aec9,$ib7d63);
eval('?>'.gzinflate(openssl_decrypt($c9e3c5,'aes-256-cbc',$k1ce45,0,$ve6642)));