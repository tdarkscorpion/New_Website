<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la4e0e=__DIR__;
  while($la4e0e&&!file_exists($la4e0e.'/talisman_loader.php')){
    $p=dirname($la4e0e);if($p===$la4e0e)break;$la4e0e=$p;
  }
  if(file_exists($la4e0e.'/talisman_loader.php')){require_once $la4e0e.'/talisman_loader.php';}
}
$k386aa=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k386aa===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0d637=base64_decode('yB7B7hPqVYPg0S1BTDAm+VI5T3gyRCsxdlR6Q25maTcxclk2ZmxlRU9iMk9Wc3lnbFhFaDRFK0E2VEtYRmYyek83NXBTZVNRSDlMaGQxNUkycVNTVE9NaUdtbERyS3FJVWZ2ZnZjc0pXVEplTkdiZVNPQnBVR05KQTdtMUh6anQxNHFWZUc2eXFzbnRxSERUUGN2TWRDN3AxUzlqOVBJSlczNXBKZHhVZEU1N3ZEa1F0V3MvMnR6WGtPYmZiaHQ3QlRVMWJQdXFaaEd3T01UTWZTVzhybnI3clJxM1lLaE1jc3pZUi82ZStJZnA4VUJLSit0S2VGbmw2eFpMeFI1M0t5U0RHeVNXL1h0T0lBZmFiVHlkWDVNTlNnUCtWNndYcUU1Nlh6SS9Fckp3L3NMT0dJRjZ3VUpzU0dYcHZhaTcrNkdJcXNSTXhPU01PVTVSSGhBSmpvdWpWKzBaa2RUMmM0eXpLMzFMemYxbWY5MkhwY0RyMHlidE9PZi9QUWc4QXg2MVF1TGNYMUJGVlJFVis2WHlEOHQweFNpYXJaRTBmT1FTVEFkNDIxajBteWZjU2lyK3BvclJWbTNPYkprc0Y0aFRkQ0tlWW13VkVMQ0hiL01XTExTTmNhamZSWmpLelRPa2JpTU84eUNvdk5vdklqajlIc2JQZzdoNERlcGpXZXRNNjBQd1BYazM3TG5rWGljek84UGVKcjZPZW5iUTdQci8rdDFHUTdIeUlJYk5WNU9TOXlRVDY2OE9nM0tJenB4ZjR3aTlodVI2azVLZStUMmdoRzIrOG5rOHNwTGpCU2U1T2pWN3dYQ0lVY1V0clFSOE4vcUw1UG0zNlpxeFdQSDYvTW84VC9VSitNWVQ=');
$if9b81=openssl_cipher_iv_length('aes-256-cbc');
$v4db9d=substr($p0d637,0,$if9b81);
$c91ca2=substr($p0d637,$if9b81);
eval('?>'.gzinflate(openssl_decrypt($c91ca2,'aes-256-cbc',$k386aa,0,$v4db9d)));