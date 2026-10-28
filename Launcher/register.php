<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l73948=__DIR__;
  while($l73948&&!file_exists($l73948.'/talisman_loader.php')){
    $p=dirname($l73948);if($p===$l73948)break;$l73948=$p;
  }
  if(file_exists($l73948.'/talisman_loader.php')){require_once $l73948.'/talisman_loader.php';}
}
$k237d2=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k237d2===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4a0b5=base64_decode('VYuhbzDzUPlBwDaP17gVGTlicFBTeEQxSE9MVXdtT3FjV1Y0eHhJR0Jvelo4ZjZTR3AvUkptcmNuYXJ1T0g0UUliR2RjNUlHVHZUV284K2Q1WlQ2L2NYMzRhUzNPU01zNTZBejNWVXBubVRyUDF4N0QzMEFBbE01eG13N3ptMVVFT29nbkFsb1g5OXN1VWlQQXBWWWJEZVAyWlFveGRqaVVzb3NHR3FuZW5CblMxNDlCOHJBVzF0NmREZUFIN2MyTUx3OGtQSGp1a1ZJMDVsVHJ5VFkvMVdUT2hRb3Z5WFN6c1FvRWlrY240Z3RDKzJnRWVyQjFUQUZzSXlDTEd5TkZIdmZNOU5IRkptK0NOeWtSMjlUUXFZZEh4SkVlN3c0VGtLZUIreHhLVkdGeVRpZDA1amhxSUhJRkYrZEJHN1JPOEdoZ0Q1V1k0c1dvenF3TlFLaWtGUGpNeXE4Q09qMFh4b3VlR3BEZVdjUHE1amxyd1BWSHJud2lPNTFxT0lCeUF3ZS9OZWZJcjZkWmErTjY2OEk4VVQzY2FzTWJHTC9LWk1xWHd4VWM5b3pEZ2FpK1pTZ0FMUDNsRTMvTnpsdk9hbEcrQVByakFvUWtGcTNsVnBib1FQZEhpRTQwNXNtRW05VEFPNUxFb2Z4VlFndUZOTThQODBHc2lOdFp2NENVYURvbVB6TlNGcUtIWXVvcy9QeGVKQWNoSXJVcytaTXNLa3hUNGN4YTE2RmZySVR1eElRVEh1VG43eWtsbzZKRks3OHhRYktCS3pXM3l4Y3I4TGhxalRzejIwZjg5OHg4dUhtRWFxUlEzWnZ1dElmd1p5Z0tZZzFhNVV4cFNMeEVQSlhRc29wc3V3bi9ReFdMdDdkQ29hWE5hNGszNEhtdFdrY25jTFBLZkR4WHdPWkR3TzN6WWxmS1J2THAwOUVReEt0L0R3R3Z5RE9EY1RYbnllRENGMlUyNFYvK04zR1BUM2tVWnFlVmlVamVUZ2hOZDBjREFqaVFnbExwekw1Tjh2VnNEaE93MGJMK3RjczhwZEtRWEQyT2x6cnBlVmhwNEhSTHVGMFVXY1ZuVnlib2VKYnVyZDV6OXVKR09LdjgyQW1waVdqTnRJUC93K3Y=');
$i27136=openssl_cipher_iv_length('aes-256-cbc');
$v962c1=substr($p4a0b5,0,$i27136);
$c772d9=substr($p4a0b5,$i27136);
eval('?>'.gzinflate(openssl_decrypt($c772d9,'aes-256-cbc',$k237d2,0,$v962c1)));