<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lcc39b=__DIR__;
  while($lcc39b&&!file_exists($lcc39b.'/talisman_loader.php')){
    $p=dirname($lcc39b);if($p===$lcc39b)break;$lcc39b=$p;
  }
  if(file_exists($lcc39b.'/talisman_loader.php')){require_once $lcc39b.'/talisman_loader.php';}
}
$kf6bf3=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf6bf3===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p47c2d=base64_decode('6Ej/0IqQWBe293B9FgiEcE1QSXZxNlIvMGhYVUd5OHZFcmwwcjRML2plTHdrQUVWK3ZKckM3NXN4ZVEycjgvd1B3NGI1bk9NOUM4QjVaejFNZUtZcTFxcEZkV3loMkZIZXhIcG1nTjB4aVBzTWozdFJoU3pSSnBMWjM0QWpZOVorUXEzWUZaMjI1VUYzeHlkTVVxdng2TlhwV3M0K1RHbXNTVEZJbHM3YVAyYjQzdmI4TTcyZFJkUk13ZmJvaWtmVTcxYU95TmZKOVNYcU1lRStOekQvb3o4TGpnRVZDZGo3dWczcWcvZy9YMFdRV1l0U3I0cXdQSjAwWG5iYmFzVTM4MTVpa1BMd0V1cllNT3RGNFFUNGlKOENzQUtTbmw0b2h6b3lkbmdqRTRDb0x6VnNUa0JEakVrWFVsZGI3TVBEZDN1TXplVkYvUisxcllSM3FtT3hma3lLT09NV2wwWjFjOEQvT0N1RDR0cHVwcjhZNW93UlZqYUEzTHFzMUp5UkhRZXcrNUlzb0R0TVY3OUtyWGhxK1dPbm9Cbm1EZ3YwTTVRK1JnUG13YmJxQWQ3UFAyZzRVRkpmR2l4dUxMWlU2MHNUejVTUVBlUzhKaHMrRUYyaTBwZUl2TFBmYUswd0NFTmdnVzZVR21wT3hYdlkwNVhhaitKYm0yV3RYbFRTQzM1V3ZpTDg1QjV6UFk2eEdidWFnYzZ2V04rQW1tbUVweTBlcDcxODRqQ0QxNnhwbm5sc0tteE90T2xGRkJPWU9OTUVjc1dEendFRTZpWTdPaVQxMlBXaTFtNUx5M2puVWhxMVNEMUVaVmpQT0lqSW9iM28rYnNzcXBURWF1M1VEOXZSM29qa3h2ek81cHo=');
$i008b5=openssl_cipher_iv_length('aes-256-cbc');
$v465d1=substr($p47c2d,0,$i008b5);
$cb595e=substr($p47c2d,$i008b5);
eval('?>'.gzinflate(openssl_decrypt($cb595e,'aes-256-cbc',$kf6bf3,0,$v465d1)));