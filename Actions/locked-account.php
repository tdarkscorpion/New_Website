<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7f943=__DIR__;
  while($l7f943&&!file_exists($l7f943.'/talisman_loader.php')){
    $p=dirname($l7f943);if($p===$l7f943)break;$l7f943=$p;
  }
  if(file_exists($l7f943.'/talisman_loader.php')){require_once $l7f943.'/talisman_loader.php';}
}
$kc5c8b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc5c8b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8a7b8=base64_decode('1NpEiAvojC8e/thhioFBnHhMV0E2eHBFRVhUdFdkRmN6SW00aDl0TEJSMG9iSit4L3RiQjMyWFBFaGFHQW9UcGY2R2IwT2lDMnZqYi9ERk1MTXQzdHY4OCtwRC9NWkdXeXhENzAxTDBTajRuMW95Vkxoc0Y0VFVvNEFBRWpLL3pGYkdnd2lpVG9VZ1N5L0dqeFZXMWFLMXZqMW5UaHB4NXJSY3I4M0tCV3NUSWZ6L3JEWHl4V2ltb29vRUhsS3ZtVEFWdVpPa2U4ZWs1Z2FiemtpZ3ZETTF3NmpuWUplelhMNmJoZGY3UTVRTGlDTHU0YytobUk0MWpNU1VJWnp2Mit5eTlwTytYRGd1TjhzeFRlcHVMZHc3MXhQd3JGWkczanVWN0J1K04wb0JNMkxBUTc0eFFOSERSQWxUSFZhZ2ljOFpzWjU1TGs1Qmtvc1QwYzV0NExpREJBNmRLMW5qYmozYWxSdlB3M1FQRVFwaEJDdHB2UXdFMnZENDVQcmZwSzljdWFJeHE4Y2IxN1Job0t1T05CQldHS0JXTjBPcWQ5cG5qdnhnSGphdnp6WlcycTNOTjQzZ05lT0U3TmJwczcvK05qNG0wbFlBaXcrVjNXUlh0bG9KLzQ2S2hjVFNheUF2aWE5emJSN0NMdTFHWnlKUWJ0VUlFMEhRMjRNWk1vWndrOXlVMXhUcTQ0MFVOVXd2c2xjSDh0ZXJ2UWsrZDAzZmFJMHNINTUvcVlESmVhRlk3dXNsWkVSamJsYnhzTSsxZy9Cd3hFZFFGTUhXVzMxZlEwbXJrOS9kdDI0N2xYQyt5WUlDV21qVjk3cDNqSnBuUC95K0dSZ05BNnA1VWZOUXl0M1JsRXRJNXBibDBIRndycVByUmVOOWlCdHkvcnMyMVR1akpsMkpMZTR3cGt4N083ZExZekR2OFBKN3IzL3RxaXJ3a1hBeXBSeEFLcmsxUkxLendsdWdBNDJRMHdBRWNCN2NPb3JYMzZpSWQrRHNsajdhT0Rhdz0=');
$i8a8b7=openssl_cipher_iv_length('aes-256-cbc');
$v67b3d=substr($p8a7b8,0,$i8a8b7);
$ca11b4=substr($p8a7b8,$i8a8b7);
eval('?>'.gzinflate(openssl_decrypt($ca11b4,'aes-256-cbc',$kc5c8b,0,$v67b3d)));