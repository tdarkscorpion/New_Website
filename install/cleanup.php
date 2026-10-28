<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la36fd=__DIR__;
  while($la36fd&&!file_exists($la36fd.'/talisman_loader.php')){
    $p=dirname($la36fd);if($p===$la36fd)break;$la36fd=$p;
  }
  if(file_exists($la36fd.'/talisman_loader.php')){require_once $la36fd.'/talisman_loader.php';}
}
$ked58a=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ked58a===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9b291=base64_decode('PAvPT9h3sZQLSjCvj0RHPlBLdFc5SVhMOGN1NnhWQWV3RUJFQjFheDkyWXdIRGhZOHlDZEx2c2xUSUxPUW1nbmNXVUhGVk1sWUErZjF6WitBWjFoaW9kRnhjMkgrbGNUeEt5QkNtR2tIUDRKMXBqZFJUUEhOTEpTdGpSQXlPRTc0bklzSytEZ0FzRjJ5MURGNTlva25jVkhJdU5hNndCNnRPMnQwUVRRTzBzUjFPbURyckNWSkx0Mk92RXNpeWM4OU04M2M4YmNiOHl1U3NzWkZDUzVTek5YWVBuQmo1ZVAzS2xyTUF2L2IxL2NyUDVzcnZiK2tOSXhrSnF1dTZWbTFSVCsxR0M0Yi9lKzJIUUZ1VnpMZ1g5dktYSzNWdnRkRExsVDN4bmhURFg4V2w3cmE0Y0tGMHQ3d0Q1L0tCZFhZTllGeENoLzhLUHRRbWVRVk1oSjM3TlZKc1NJR2ZjZTQvYWVhZWdEWlJCeklxNmJsZHRQRkx4WkoxelNtaUVSWDRlRDU3bUNUTTdYSWdDbnZOTWowSGZBR3g1RGlJL2lsWUNXUUVxTFh4VFVRYmtteFZPOG1BN1EzM0xuOVJZUE9FSEZvUG43V1RxeEVuV1l1ajN0YzhFQnpVNDFneWxkU3VoNElWRFYwbWxUTlkrVnJnVFlBME80dGJWWWRnM1MxUkNRbWlrclB3Y3Z0cFdDZEg1SlFjN3VZZ2xjaDdmSGhTbG9rQThXMkFsNXpDaFpVRjAyQW9GYkVpdTZReloyNDFWakdVVWcwdGh3ZHUzbTFYaGcrMFRvcHVqUHU4Q0ZETUJGS3NrVzFJSmJaYTNFWVdJOFVCcHZqdzc4aE9OampBc1hIT1VZMzV6eE1KVkVlaWE3RHRzS2JaeTNEb0szc2tlQzRVaUVGdlB3YmdEYmtZY1pTUFMzelYyYnlqUEVVOElYQzJJamFHVUxCY0hoMzBYOUsxQThlKzVxQ0pjK20wcUxicmZVano4aWRIVytRTE9iZ3paMnA2RmxaNyttZUp4Q01DOUFKUEpaamhOQg==');
$ib0e83=openssl_cipher_iv_length('aes-256-cbc');
$v94f4f=substr($p9b291,0,$ib0e83);
$ca2c0a=substr($p9b291,$ib0e83);
eval('?>'.gzinflate(openssl_decrypt($ca2c0a,'aes-256-cbc',$ked58a,0,$v94f4f)));