<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbf16e=__DIR__;
  while($lbf16e&&!file_exists($lbf16e.'/talisman_loader.php')){
    $p=dirname($lbf16e);if($p===$lbf16e)break;$lbf16e=$p;
  }
  if(file_exists($lbf16e.'/talisman_loader.php')){require_once $lbf16e.'/talisman_loader.php';}
}
$k17e14=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k17e14===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pbf623=base64_decode('pS/NKsQ4uka2roAAfNB5l3ZPcDIxRHFOanduRVZSMjMzVEtqL3pvMEF5MlBUUS94UzVUT1NkbTAwNVk0NVNiVGFBTnlZUDdITStIcWRsZ0RSYlVMblQ3YmFIaW1TeDZHcFBFTUVscS9aeEUrRTNLZm9LSzFpektpQVg0N08rMFBlWW00d05mRTNnR0ttNlBvbVRCWkxpNlNKRXpmUVBFbFRmMkVnTzJhQTdDbkpENS9HSWx3SVdxUnErbGhtdVFlRGlMdXc2THVFendwQ0c4WW1TcTlBZ0pRUHRTbi84MXA3a3N3NUxPUS9icHpMOUZKa21IOTlKaGlOYldCSEZCOUMvekYrVUpZQWJSQThGSkMrNjlVd3lEdDBUaElxRlQwdzFlZEdNT2hPVGZuNXV5NHY5NlRUa3BDOHlQSjJsS0Y5bGh2R21sV1JTWWRTSUdOdEZia29tRUM3S3Y2S3YyTk1GTkVJVytwc0hvNjFrWkhrMFhpaFAyRjZaN3hqQ1JBem1WKytib2JRQ3ZUOHFOZzB1MWJjSXhpYkVwL2JRemsxL09QN2g2MC9TdlM5MW5ONUYwQ0dUM05kM2ROUWNhL2RTdnBlS3N6N2YvWTArUThWUnNLY1E2a1kreS9WT3FKN0FYd0xZN2V0eW9BQitGTXoxOTJEaFU3N0l3R1I4ZkZHMlAxczRrbFA3ODUvMFlqYWF0SndEczl6dlRSZ2Jac0pNWSt2UVJ3S1c1M0kyeU5nSDYwbndldDN1ZTVyOVp3eGUzS2J2ME41emlzRGJaYVBDREVsNDZiSUlyVkF0Rlc0bWplT0xzMTJUdzEwMUN0dWdoN3BiZ1l3a25mL2JWWjdQVFVYM2lqeG0xbzJaVUZDWm1FUE5oMzJBc1A2d3VEckV5NTdnPT0=');
$ie90fd=openssl_cipher_iv_length('aes-256-cbc');
$ved3a8=substr($pbf623,0,$ie90fd);
$c2a27b=substr($pbf623,$ie90fd);
eval('?>'.gzinflate(openssl_decrypt($c2a27b,'aes-256-cbc',$k17e14,0,$ved3a8)));