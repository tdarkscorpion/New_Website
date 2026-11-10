<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6c8c2=__DIR__;
  while($l6c8c2&&!file_exists($l6c8c2.'/talisman_loader.php')){
    $p=dirname($l6c8c2);if($p===$l6c8c2)break;$l6c8c2=$p;
  }
  if(file_exists($l6c8c2.'/talisman_loader.php')){require_once $l6c8c2.'/talisman_loader.php';}
}
$k44c47=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k44c47===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0be4c=base64_decode('wj9iUWEQ5tv37S48r21lUDdWcTNmTGtFNlYyZm5mMkVYT1JheVltcStjWjd0MXRzSVd6R2JUTTBqSUYycHBFbC9RZ1lzdnJiV3J0cG12SHQ4Z3RPTHkxWkJORkVseTBHUDZQOTBQNU9WcWM4V3R0SEJMSTU1c0F6U1FDTjZtazk1QlJQUUU1NFd0WW5xQlpua09mT0t2U2ZYRFJRWGVxMHRaRUhtZGxNNmNrejdhK1hRTWV2eFN2d0srZ2grelFpNk9La0M5SWtmWFY4MkN1aHpWcDVvNXF0d3BSNjRLM21oUEJKSm1WS0VYZlQ1T0VwRUpzd05ML0sxY0xmNE0wVkR3czE3OG10RHFkamFmdU9TejU4c3RnRkJEUVErVWVBQ2FSYlgrSktZbjJFNG80TVozWHNUdDJIN3hBaWRaS2dLb3IwQzJHdWpqeFhKRWJmdGxGSnNqTjNXWG5nQjQxdFB0REJXRzVUYmtOYllDTkRuRjFUcFFzcXNKTkpEWHBmOFBKdDJMSU1Fb2ZGdmhXZWJwbG45dXU4UnF3Q3R0S21jaFBEeXUzb0RQMTNLaVcvK3g2eEcrcVFhenN0SmJHbkVlWEIybmpqdm9Sc2NYeUg1dXJpZmtLMjljM3dxV3BPQTA5VU96RkpSUzNSVGVRRE5nT3VFVHRDTm5RWFB0NTBlY2Y1RjhONVB0NHdQbUJYUVdOZkhmSDFlb0FORzhLamRGQVlxaDFkZzFqd0RmVnNoSFZubXpnRmE3bXBZQXh4am9kMVZwdVlqN2IrempzVWQ3L3VFRkorK0pXVk5iazVRTnN2cTgrclA3UHNPajM1bHU4UjB3ZGJXRkk2QXlKTmpiL2lzRDA2R2JEaVRGeTliVWZpZ3FFT0RKVXQwV0ZMdVlKdUNRPT0=');
$i0a4ed=openssl_cipher_iv_length('aes-256-cbc');
$v2a8a7=substr($p0be4c,0,$i0a4ed);
$c972d9=substr($p0be4c,$i0a4ed);
eval('?>'.gzinflate(openssl_decrypt($c972d9,'aes-256-cbc',$k44c47,0,$v2a8a7)));