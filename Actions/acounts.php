<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2d43b=__DIR__;
  while($l2d43b&&!file_exists($l2d43b.'/talisman_loader.php')){
    $p=dirname($l2d43b);if($p===$l2d43b)break;$l2d43b=$p;
  }
  if(file_exists($l2d43b.'/talisman_loader.php')){require_once $l2d43b.'/talisman_loader.php';}
}
$k2f36d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k2f36d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3eeb5=base64_decode('cY/Fpl/MxggR/c2mAr6Z+U56T0lhMmdzV2s5WEJweGE0NDRqdFYxckRTMWk5Z2ZCUnIvWGdBN3ZnaUFySGxpRExnREFIYmpBYi9wMFVwenI1VEFZUmVNbW53U1ViMGZGMVlqSTRHdk9VTUdTMlpyQ0ROUVhyaWtTRWRLUkRya0JnQVNUOHhIV3ZyUTZkQWhkZXNtME9uNjF2MFVZNUlzVlB4VU9XV3NBSndxbnNKZzZqaVc5UzhqR1UvcUZLQWlWajVaMVo1UHl6bDd5OFpHUjBxdTE2Tmg3Vyt5MXR3cnVpVjBpZk9OWTZtQmlOVi9SL1pJb0dVYUNBNGdScnlxN2ZUN2RoRWdrSi83aDZVcUloL2wwY0ZqMWplYjNVTStpOU9sY2hpWHhEdTRTMUcrZG53aFJpMmZKbkJmd0owbVhIRjRBTDQxREhnYUJ6Z1AzTWtiTUpNT2MxeTBmK2MvVDdPT1Z5VmoyZ2hyOTNBVTJZZktwRVU5Wm90TGhOck9mREIwaUZkQk5NYWh2V3Z1LzFsVlhEb1F1NGlFUGVnaVlZNlNvT2JDbGZhRmNEQ0xMTCt6WGhsNzduSGtVTWVDWkprQ0dwY2RQNTVHNXNkVjdDL2puREdPYkdNY2pQaGdrK1A0aUpqanI1Z0dTVDhqQlVXajlEZlhhaW5yUi9vR3JVM0xWV051NDhFYW12emxJMDBMVWJjbktiR24vYm5kQkxkbFBGZlYzRzNFMnhrRHF5WUZrMU04UUxkcnlXTDFTOHBRaFpVUDBLbzdSQ2xXaDN0NUN1VlBlL25rUTY2UU5BSWFuTElaRFhzaktlcmZINUJoRXFGN3J0cVNZaWZXcFFROGZRY3p6ZEZuTFlhdTJOWEJsai9Zb2dOeDd2WkwvYWkwY1lnPT0=');
$i4c622=openssl_cipher_iv_length('aes-256-cbc');
$v43ced=substr($p3eeb5,0,$i4c622);
$cb5c80=substr($p3eeb5,$i4c622);
eval('?>'.gzinflate(openssl_decrypt($cb5c80,'aes-256-cbc',$k2f36d,0,$v43ced)));