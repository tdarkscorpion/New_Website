<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2fbeb=__DIR__;
  while($l2fbeb&&!file_exists($l2fbeb.'/talisman_loader.php')){
    $p=dirname($l2fbeb);if($p===$l2fbeb)break;$l2fbeb=$p;
  }
  if(file_exists($l2fbeb.'/talisman_loader.php')){require_once $l2fbeb.'/talisman_loader.php';}
}
$k5cc3d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5cc3d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd8d8a=base64_decode('/xDikZzGlQraUgjZj0S7OEdpS0FKZGs3bm1OVkdYRWZNWHBXL2gwY1RXQWxvTXlIS1UrSzBXRXUwd1FOUjNrNmxWbW1vOWZSTTJMWDNQNVRQN1dNQkNiclI0RXRmYXN2Q3RERTQ4a1NjVUt3eXZHUW9qbWRvU0dlUWdSL1NaMVdzRjMyRTVNa2NEV2ZnMjlTdExjUmlnb3dwY0N1SnY1OStPRGVJcUxwejN4QUxLRkw1V0Yrd2xHYkFPOTQxWEliMFZGc0poaTdIUFdtYzdvTlBMTFV1WS9lem0xZTlxSHVaQWxiaENNK0tHLzRkdVoxTjM0cG9zSjZIZWppL3NHdUloNlM1V3VORkdhY0lmcmhhWjc3dEw0VlpmTC9PTzhZNjVZNmFvYlQvV0V6QUVVUDl0eW13OWNxOG5ZR3RDaWxKY1hrZkdNYXh1Q2hQQlZJNzlKU1BkSE9RZXFEaVhKUUp6a2xYMHpBQjFCOW1hekhtUXdNNXlDeTJJMEtsUEdEdUw4VklRSDhZRTNMVEt0V0I5VWVPSEFaQWxTaUJqdVJXaWQ0aDZxVTFINmhTV2t0cjJIQldXU05kcGdidWY3NzRHZTVIWUxLWnZ4NlFSeGlua1BLUFA0QXlZSmJCNTVQQ1JkeERhem9KWmxSRU1XSEswbUJmWElIU2gyVzJlUVJld1YwL0ZtMXZpMzByOE0vL3VUTzZDS2FNSkxMMVBRUDlQRi9GL1RBOGliRlVkOWd5MGMxRWZkNTdtUjJnZVY2STRONGQ1YnVQSnRoeXRDQklqSDVkRHVGUzhYRHZVUE5EcG5jUkttbm5mRm9MQzhJZUJoZHoydEQzOUMrdFBadU9waHBRWFEzT0V3TWw0N2Y=');
$i90d4b=openssl_cipher_iv_length('aes-256-cbc');
$vfb417=substr($pd8d8a,0,$i90d4b);
$c82d6b=substr($pd8d8a,$i90d4b);
eval('?>'.gzinflate(openssl_decrypt($c82d6b,'aes-256-cbc',$k5cc3d,0,$vfb417)));