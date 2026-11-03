<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4ce5d=__DIR__;
  while($l4ce5d&&!file_exists($l4ce5d.'/talisman_loader.php')){
    $p=dirname($l4ce5d);if($p===$l4ce5d)break;$l4ce5d=$p;
  }
  if(file_exists($l4ce5d.'/talisman_loader.php')){require_once $l4ce5d.'/talisman_loader.php';}
}
$kfffe0=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kfffe0===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf9c66=base64_decode('JkWXMbp49VER/P39cu+pY3RDTTZlL0Q3endxbllIN2VINTJxdGtWcHNQdkoxSHNvMWVLT05jb09Icm1jcVk5MSt3ZC84WCtNek8vdVQwL2FEQ1FtRTR4RDZvSDNTUTFQVy9vMlF0VkFLUlFZV1R3ZkU1Y3dnYTZlUHlhNkdRYmQ2OS9FbXU0SnFtTWNoOWNPblo5WWtpbHplQTdrOVJMbkl4WXZRdUcwTGVDQWxYTkZKcWZmSmJwd2wvbHMwdUovMWZLQ1Z0SGxDU0VFVzQxU3gzT09XYXpzWDFhL1pLVmU5c21IcEdxMmtsT2FrVG5JbC9iUlVkYktSSTFJbWxDZXpUZUEzcm5jdTlScEFVaUM1U0h3OSs3YmxrTUUwU2JmYmlKUVk0TStoQnIyT3Bqc2Z6amtSVG13VmY4cG45YzVtY0ZmaWJTYUtPZm9aalhLOVJrU3o4SjZEVUJ6U09jOGp4MlVQZjM0bTJMQ0ZjbzFGbTQyS0NsU3Y0bWZORnBBeG5yUHBMNXhYUHV3Z3pkMWpZNzQ0QnVUd1M2Rys4Ry9BWVlMNThJL2V1aTRESHI1cGdvTkN6Y3hicnRxUnZMUXVlQk93cjROeGRNVkJSeVNHTGJUbnl4dVY2VUZHbTcyd2JMNE9KUmFybEtCa0JSWmVKZzBtMEtrbjJ4WE9ETVZid0N3YlN4K01INUVXZ1V0');
$i3b321=openssl_cipher_iv_length('aes-256-cbc');
$v091aa=substr($pf9c66,0,$i3b321);
$c83892=substr($pf9c66,$i3b321);
eval('?>'.gzinflate(openssl_decrypt($c83892,'aes-256-cbc',$kfffe0,0,$v091aa)));