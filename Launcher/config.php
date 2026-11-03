<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l61ad2=__DIR__;
  while($l61ad2&&!file_exists($l61ad2.'/talisman_loader.php')){
    $p=dirname($l61ad2);if($p===$l61ad2)break;$l61ad2=$p;
  }
  if(file_exists($l61ad2.'/talisman_loader.php')){require_once $l61ad2.'/talisman_loader.php';}
}
$kffde9=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kffde9===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pee67a=base64_decode('OonTTwvyOoS/2e+klw0sMytCNzZXU1NQams3Z0s5S1FueTI1ZW5jM2xpUlJ0cnNMVUhCM0ZoRWJtZjBCWm5VclE0YXVuK3VydDRVL1gxdTdxVzN1bHRENEozbllvd3hyb2VRTmFrVEw4cytqWXd1WXpMOFFXMldmeDFoOWp2d0dKOFhkaTVPa0hsSnVPMDE1NDlWNzkrc0UrTGM3K3FFMWFhbkNMcEx5a012VDNkaTZsK3NsMDJCYVMzMVg2T1pEUEc3YkRydmx1b3BSUkVMZDRLOXJWQU51aXhKaDViT1NHTm1zTk9aK1pQQ2dYLzR1NjlhWjBBSnltY3BNRUZ5MnVzYTdNd0djL3RQNUp1TUREOWNmVjJlSU1QVGgzU0VLdi9uNHhpNHFGd0t0NDhaYkJ5R1NqZnowWVJvPQ==');
$ib7f5c=openssl_cipher_iv_length('aes-256-cbc');
$v2f458=substr($pee67a,0,$ib7f5c);
$c5b9ca=substr($pee67a,$ib7f5c);
eval('?>'.gzinflate(openssl_decrypt($c5b9ca,'aes-256-cbc',$kffde9,0,$v2f458)));