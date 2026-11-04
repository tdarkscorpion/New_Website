<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4816f=__DIR__;
  while($l4816f&&!file_exists($l4816f.'/talisman_loader.php')){
    $p=dirname($l4816f);if($p===$l4816f)break;$l4816f=$p;
  }
  if(file_exists($l4816f.'/talisman_loader.php')){require_once $l4816f.'/talisman_loader.php';}
}
$k50199=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k50199===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p45071=base64_decode('+TJSZ798iQmjTME0fo+ArjZNek9LVlpVSjBTa0VwZXo5Rk5VQ1FFQ2xGU1ZJYStzczg1QTFqcjYvMGYvTE84RWhzOTVaQ3VSVUlESU5NNHcvRGFGODkzUzVpeE5RY1d6TW1Hbk1HQWZjRFQwRW9YTWM0SElMTm5ZeW9id1RpMjdMeVU1MEE2RFI1bVFvWFFvcUk0TFNpcCtzTTBMUFg5NEhXeHRWQTJsdjF5U1JLVjViRHV6NXdyNWMyM3l6S2krQ3lpSGMvaWZybmxBY3ArT3pyRWNpOC9mRSttZk1ZcUN4eG82elc4ci81RkVkRUtiM1F5eDlmaDlyWjcvazc3bHFKRU9aZU1tUjRGUUlkQzA1eEZaVit5YWVMQmY2NXBvcXR5VnY3emdjUERBOGFGWmIxbjdFY3JRRUttSG5naW9zT1U0d04zQ0IvVC9qamlGTzY5MkNveGZFeitTMCs2ZUEwdVpJVUYxWUtZTWE0bkZRdTArY1hiMnY4WDNvR0FWUHRMQXdBWFF0R0dRWm9nbEowbDBtQXBxTHFyTVBCNUtJMVVWTmRRcG5aNmJadVlQVWUrU04zZkxVQjFBbjFqMEhpR1BndDZoaFR4dDJqdWFaRWw0TkY3b1hiWTBmdVJDOWU1TFJtdXJoWmpFdFd4OVh3VXVtQXZEcC9Xakl0cWlMNmpYc0YrTjdIVm1xNE15MVhyZVZIMXFwS3dMVTFmcm9JUkRFZnpVb0NTOWJzcXdjZ0ZMdTQvSVRiVW9kdXNCQUFncjVhWUw0Nm0vWXRpeS9SVis4WXdiR1RBaVJOeC9KR2JpVzB5Y3RweStGZmFZUm9XbXozcFY5c3lvZEtnb2NtbWF0QVNmSXJwdGtoOFk=');
$i1942d=openssl_cipher_iv_length('aes-256-cbc');
$v0d35c=substr($p45071,0,$i1942d);
$cadac8=substr($p45071,$i1942d);
eval('?>'.gzinflate(openssl_decrypt($cadac8,'aes-256-cbc',$k50199,0,$v0d35c)));