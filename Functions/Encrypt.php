<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l44cd4=__DIR__;
  while($l44cd4&&!file_exists($l44cd4.'/talisman_loader.php')){
    $p=dirname($l44cd4);if($p===$l44cd4)break;$l44cd4=$p;
  }
  if(file_exists($l44cd4.'/talisman_loader.php')){require_once $l44cd4.'/talisman_loader.php';}
}
$k8f2f1=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8f2f1===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcba1e=base64_decode('6AubrmEeNRG8cLzInM2WG2dKeHlWeUl0dVFaUDVqWlNkL2JpQ2pyUWR4RmtIa0VoSlVqeDUzU0VaYnhGM0FqL1NEMnpLbDh3YTJMV0VkSGI0cEpFU1VsQ2xHeUNCeDZ1UmtWQ25iQVQ4Z281ZnQwU0pjWVRXakNIS3VFRU1LSFBLeXpUKzIzTDkzQzNKWGlOUnBNcVFQdDQzeTlFUUpvVkcxN0F5Z0JPU0JWeHk3Z1ZLUHhxa2RjMU96Qy9kNzRuOWZQT1pwWmgxbS83dzBTcG1zaWY0Z2JYRCt5TWFXQXBRbDhkUXV4SzlOUHE1N2xMSWZEWmtxeWRXbWtySVNLeFVQVGZCNEhsb2ZJcHFRRkZCYWhzNzdnTC9DMVVsMHN4L1BXdG15eGR4U2Z5QU01eUpDNDc0MkNXUHcyVUNJOVhpWmJDYW54UWJ3QWRROEM3SVdjK28vOWJqTk5HNzBjZmdrVTJmU0N3YnZ6M2N2SWJJM2VKbDNGdW9EenVVOU9NZlB3Q09lcTJKQTc1aFVRT1BYUDd6amNSbkJYUTgvNHpncW43QTE1ZWVMOXBKTHYvbVhQaWRubmFYdGIzMTBnc0JGcE1iaXo5Wmx5aE9HTW8=');
$id9132=openssl_cipher_iv_length('aes-256-cbc');
$v5e348=substr($pcba1e,0,$id9132);
$ccb9c2=substr($pcba1e,$id9132);
eval('?>'.gzinflate(openssl_decrypt($ccb9c2,'aes-256-cbc',$k8f2f1,0,$v5e348)));