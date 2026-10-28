<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l60756=__DIR__;
  while($l60756&&!file_exists($l60756.'/talisman_loader.php')){
    $p=dirname($l60756);if($p===$l60756)break;$l60756=$p;
  }
  if(file_exists($l60756.'/talisman_loader.php')){require_once $l60756.'/talisman_loader.php';}
}
$k174e9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k174e9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4e872=base64_decode('m/ASB9VeyfwpqpgrUmVJYDU0SWttM2FGQmZNZG92OVNiN1FBS0dKNm5mTUxleFBZbHI1Qk9RbWhJRUZWZVU0SEpmeHZObS9CQlZ0S0d2eHQzdm5vcHd2TG9QNmNvTi9PUGhsdWZ1OXd0QkNuZGRSMml1R3A4SmtqZGFhcWoxUnY4UFk0K1h0VWhhaTBzK29jK0F0NEpZNHJnMitIWG45MUcwUm8xVnNLUSszbURGRjNxcno5TXNueEFrek5yeWE3c0gxR1Nqc1JIOU9ZbXB6VSt1WjZOOExDVGtDRlkyUENETWVhMkxpbGtwMmJmWUxtT1ZxemxuQmNUb1JSY3UwNU9ncDZHSzRpUGhNNURsNXljSTdITjY5SDRwcG9WZEtlcDVBNjc2L2RxbkQwYUhJN2FXTHdmeTkvbktXbmpLeXo0NGF3VnE5Z1JwQXRsMWE4UTljcjVXN2lIYVpSOWo4UlZqMEJjSGJoakNlVzMrZlNacUduMEpCQ21BY1FXVUFZT015aDdQM014c3JaOFJ2aW95ZENtUmd0K1E2RFZoUDN2WXVsS1RBb2dhZDgxVE9sREx1MVVKMFRtZDhRZ0pOTWtZVCtHUG9mMHBCOWtvMFJXNXgzd3E4Nlk3MW9iaGpTZVJFNkNUN0loZGRIWmlOMjNKQjkwV3Z6Ny8rZjhJWitSYXJobXNrd1VKaWpndUExQXJpS1lvczVaTXB4c0VBVTBPTlljYXhVRWpLOTFMSGxSUHlZc1hBZ1hNS3lmTWFaRGtjdHg3UzlQa2hpZUdhZ0lJcXUzbENGdExSL0pOOFRzaFZWQkJmaXhRaWdEaldVbk9jS3dTMEZubEorWGx6VUdtckVBUmF4bzFUL1l0dDYwMTUvamk0ZkZWV2FuQWNocjRPYW1JbXBJRjdQdDZSOFNsTWtvQlMxa2phcCtuenJ1UVYxS3hKQU9rRGJOZCt1YXI3cVF1emdVUWtXVUtvMGE5Zzk1c3djdUpXSis2VDJPS3pROWtMTi8xQXBSNFVDUnJMVkhQUjJFdlZJYk15bXRnbVFveFJLTFpjWnlaS25MWVUrUXpSV1IreHROSnMwdUVZNlVCUWF1QVpkV2VMU2VpMHdTSElORFAyejdHV08=');
$i1e394=openssl_cipher_iv_length('aes-256-cbc');
$v9f21c=substr($p4e872,0,$i1e394);
$c61966=substr($p4e872,$i1e394);
eval('?>'.gzinflate(openssl_decrypt($c61966,'aes-256-cbc',$k174e9,0,$v9f21c)));