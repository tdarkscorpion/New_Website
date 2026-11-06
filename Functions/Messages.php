<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l77f94=__DIR__;
  while($l77f94&&!file_exists($l77f94.'/talisman_loader.php')){
    $p=dirname($l77f94);if($p===$l77f94)break;$l77f94=$p;
  }
  if(file_exists($l77f94.'/talisman_loader.php')){require_once $l77f94.'/talisman_loader.php';}
}
$kd5d97=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd5d97===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p73bcd=base64_decode('dYPk2Gqb7ni5pH7qPHySJ1pVS0xvcUNDMTZRMkJUTHhXWXdwN1lQTFBOYTgzN0xNR1d1QWl1MzN1TkI0ZGpvTEFSYWZoa1lZV0xOMktIMDFEMC8xQm5FUy9YNjJlajc1bWVSZE01QmtKMkNlUkQ4MnhCVCt0ckJuck5BOHFNSEYvUzkvZlZ3bXdGYmRsT3U5WTJLWW1uTlRKRXlLZmhYcmJzajVMNk45bjQ0eithSVJxbDc5RUVSOG1La0FaREQ3WkhhOE1uQ2JHK3RoQlFDUWluWVJVbGlocldCTmJpZXI2TWViT0hMOWFwNi9qQkdFNE5xbUk5RmRvY1krR2xBeXNBaEpnU3pXeEdrU3pITk05N0R1TlN3OWJOSDltQm1VMy90RUIxTDJNeXcvRWcwQ1BFNzZhNUZpc1FvPQ==');
$i53cd7=openssl_cipher_iv_length('aes-256-cbc');
$v74a00=substr($p73bcd,0,$i53cd7);
$c94071=substr($p73bcd,$i53cd7);
eval('?>'.gzinflate(openssl_decrypt($c94071,'aes-256-cbc',$kd5d97,0,$v74a00)));