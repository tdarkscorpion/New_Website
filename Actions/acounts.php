<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l3f54f=__DIR__;
  while($l3f54f&&!file_exists($l3f54f.'/talisman_loader.php')){
    $p=dirname($l3f54f);if($p===$l3f54f)break;$l3f54f=$p;
  }
  if(file_exists($l3f54f.'/talisman_loader.php')){require_once $l3f54f.'/talisman_loader.php';}
}
$kb3287=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb3287===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p00fe2=base64_decode('saXjh9DvA0hVDg/nj2kI3VhnaU9PRzFOUkI3TWNibjdsQXh2UkFndHk0b0xBZlNIME54Qk1yQURpem1hUmV3OGVWRlQ3NCthQ2Q1ZGFrYnNyY3d5bFBSREhCTndFaEdITWY4N0JlU1c1KytmdGVqY0hyVmlWQi9xR1BTUnhjREVGVnFEblV6RlhiR0FNTTZhcDU2c09qUE1wSlJvV0x0UTBCSG9TWmIrcUJIdTFPdUR6alJkT2duZE1xZktSVHBIRlVxQ2szd2xva1pNSEN1ZTliZU9KT0syQW83a09wMjBoUVY2VkpNZlFaWWt6N1FtaFhqdTJkclJZYzNjV1dQUTdxY2o0ZTBaVDlRSHdqOGFFcnRlczJSWGpnUjF4ZFMxZjlrSkpOQ2wzWkYvM2d3d1BvS0xwTnVBWG9tZ1loODdjOStNNVJhbXU2U2k4ZHdBVGlHc1UrVnBSL2lrUksrejNsTTd4VmVSdjNsbXJCOUs2OEc0RFhsVUlmY1dodXJYYzNXYnVEQk5PdHVtRE5tSmdmV29qdnl5dXN4WTJFZzFza3l5M2FDV29DcUEvdGN6b2lVeUtIZHlqajVWRVB6SUJ4RVlxZTlFTCt3STNzS20rTGxWdkFxK294S1hDaEpQb2VXckJSblZGT2tVRlNUQUhBVWgzRlFodXloUmJ0MDhvb2I1SzBDWnRvU3V0Y1JsUnc2bHk1eHV3UlVDT2diUzJPWDdLejZwUEtNUGdnMHllZjFGSURhR3J0M0RGU2RZZjRncFljaUtOWG12ZlNvVHJxMVBSWnE2RzRGek5lMFFDTHlSZGxLblhadkdqRnZza1c5WEFrV01ZWHVGcUoxRGtSeHJxZ1Ara1FSVjVUN0hlay9sWFZ3VEdudUUwM1MrOHp5UmhBPT0=');
$if3bee=openssl_cipher_iv_length('aes-256-cbc');
$vf6544=substr($p00fe2,0,$if3bee);
$c68d85=substr($p00fe2,$if3bee);
eval('?>'.gzinflate(openssl_decrypt($c68d85,'aes-256-cbc',$kb3287,0,$vf6544)));