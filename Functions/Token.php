<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc76fc=__DIR__;
  while($lc76fc&&!file_exists($lc76fc.'/talisman_loader.php')){
    $p=dirname($lc76fc);if($p===$lc76fc)break;$lc76fc=$p;
  }
  if(file_exists($lc76fc.'/talisman_loader.php')){require_once $lc76fc.'/talisman_loader.php';}
}
$k7c6d9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7c6d9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p56199=base64_decode('r0etFC7PdFaOQtJopViJezJQVk5IOFVRUEdlM0MwSVRLRTU0dzhEdlFQMmNFTExxWXdsQ2NTSzNGYUVyWHdEQ1p0R3pWakE5UnUxYnEzWWpETXVzU0lWdlFidk85dEE2M0hVUmgwaUIzTW03ZFhESmtTV1ZIcTZoeHlUYWVSWTdQZ0lOV2tneVBpbElZZ3RqUEJoNVpZeVBEZlFIWEt0U29RTTVaTzB3ZkZialBIU1RKLzloT2w3bkZBYVZxWWNRa21xNE85L3RreXlsZk5PbnhEdTVVL1dOM2FCOXJRSTNMNkZodTJSVm9wYVhLS1BKTUJJK0RHK0xlbEx5dkVOZi9HYWZmUG5LWENhS1p5c0VKS3Z2UXpiRTRyS1VRT1lUOE83dW9PQW56NXovUE9aODc1TU1SNllrRmtac3BiTnIxK091WlR0MExyYXRpWTVJcU00c25kcFNTNWxEQ3BzSm1KY29jQVZIN1NoWUJRQVRDdExhK0ordDRQUT0=');
$i7d9fd=openssl_cipher_iv_length('aes-256-cbc');
$v3ef42=substr($p56199,0,$i7d9fd);
$c574de=substr($p56199,$i7d9fd);
eval('?>'.gzinflate(openssl_decrypt($c574de,'aes-256-cbc',$k7c6d9,0,$v3ef42)));