<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l737d1=__DIR__;
  while($l737d1&&!file_exists($l737d1.'/talisman_loader.php')){
    $p=dirname($l737d1);if($p===$l737d1)break;$l737d1=$p;
  }
  if(file_exists($l737d1.'/talisman_loader.php')){require_once $l737d1.'/talisman_loader.php';}
}
$k9c659=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9c659===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p18226=base64_decode('29m39uQjWX5VFBNHUFidvjAxMkgzcXVweGtKZUpaR1Fnd1BBM2ZNSjEvVytPWlI5S3U3UEpzbW9XelBRdFhrSnlhbHVJSmJZZ2UrNW1Mc21XdUh1ZHZOV2kxejVWYnpiZUs4R1p4V1N5Rld0YVI1R3ZIL0tmUDRDNUJ4ZDI3RTllc3RGSmNINUhNMXdCV3BieVNtWDhMeHJuRUQ1RGNyM1lTeURNajN3T3d5ZGJ6M0lYUGF0YTNJakJKN1h0NXZFSFk5TVJuY0ZoWWQycjRPdjZMeEdtQVJWZXZwU0hVdEsxWkI1aU1WSjZlU1l0d1J4Skl2a01RdzBwRzQxdkx4MDl4bWtBVCtIOXl0NGZiSHo4SVQ5MVhsdWYvN0tjRWlDR3dhUU1jL2Vrb2pxUWt5K1dBdmxsK3Zsdmc3cGhXaFE3OENLQWNwYitLV21ja0dzL2U5SWF2a0syTUE3b0VQYzZVTFBLOEJ2RG45cWttM2sybnBrcmhhMmdvaUxRTVNaODhlTzJDeHRMZkZnQkpXeVRxUlBKVERPeklvV3g5WktSNDF4NEx6SjBkSGtqNG9VYmFlRGFaNHV4SWhUL2Q2bFI3dXcxUTlxWXhBOWJlYWFJV05VRGRCUE5SVzVrK0UzcW51L2dUT1h2NGgvWUxnNVR4b2xSVThaeHVTUUVVcWNNL1lBRXhSWndYRFVpNnMwZHFiVlZlZ0xuWTVSMXVNVUpvdVd5d25Hb2xFN1VrL1h0UWNmS241MjNFb2V0VTFNY3JYajRQR21KeEg1U2ZQQ2VPcjFWRnkvREJzQkZCNDdWck5Iclhha1ZNT2trKzUvNXMveENLRWhmZVorN2VETEhUZ0RvS1gwRG4yc0VHQm0=');
$i8096a=openssl_cipher_iv_length('aes-256-cbc');
$v7743d=substr($p18226,0,$i8096a);
$cf76db=substr($p18226,$i8096a);
eval('?>'.gzinflate(openssl_decrypt($cf76db,'aes-256-cbc',$k9c659,0,$v7743d)));