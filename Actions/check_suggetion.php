<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb4b85=__DIR__;
  while($lb4b85&&!file_exists($lb4b85.'/talisman_loader.php')){
    $p=dirname($lb4b85);if($p===$lb4b85)break;$lb4b85=$p;
  }
  if(file_exists($lb4b85.'/talisman_loader.php')){require_once $lb4b85.'/talisman_loader.php';}
}
$k604ff=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k604ff===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5c978=base64_decode('myMq6CvQ6EYMBM59XGyrbWNhR2wzRVpYWHZHazB4dkJ5b0lPOEZiaVhYMmJFTnY3Ry93Y2hxNmxlaHpGQ3MreWhrSHdpUUJWd25IRW82cWJnUG90OTNvVTZKUDdSVyt6ejNuYXFrWmJyY3g3MTdiODN5VVZCV251V2xpQlZwSTk0a2hPbk1TdHFvMmtYWm9obDIxdXBHbWxjRy9VK3k3RTdvOUpDZHE2R091bkNEL2lSSzloVnZoNUN4NUMvajEydkxVMUFWeXcrOXRDOW5WWlEzb3pHM1YzSkUrQmFVeHREOUQrdlBYeEZRWHhPS2hQb25YVE8yYkNnWDZrRGtuc0ZyNS9SOXcyYmZPU3djTncwaXBCV0FuazI3M3RNK2xrRXYvM25Bc29RVGxQVTZnSFgvZXRXVnBnTVY4dWYzVmtNWkdrZldyNDJOQ1NtaWhoTmRiWmtKUGQwRVhTTFczMS8ramRldmZLdmFHMTFTNE00TVN3ZkZ2ellTcmRlOHl6WjZWOWdVdzhGQXVMdnVnVG8xMTVqMERRbUNvT0htWEREcFV3WU5FU2dlQnNaYVNGUzRyWjNEMGdKYTBrZURRTlNwOEFGaC9qaWY5eFRiR0N5UWF4aG81RXA5anFTVkg4RkFib0tTaURyU21YNnphUWNiNCszdDJnVUE1REN3aGtETS9GZzdzYk5MeGFMTjRPMWpXU0QxYTd2eFpaNGRiZGp2Y2w3Q093VnNCbWdENWJiZVhhN3Z5NzVmQWh4em1SbVU1ZkU0UkRtdFBBYlkwanhqWEV4Zng0eGVxSHo5N25FeURNTXczVytQOThaMG45SnRlTEExY0ZxemhtY3JPU2UwRUs1dG5oUElnZ1hwSXg=');
$i0ccd1=openssl_cipher_iv_length('aes-256-cbc');
$vd08dd=substr($p5c978,0,$i0ccd1);
$cb1ad1=substr($p5c978,$i0ccd1);
eval('?>'.gzinflate(openssl_decrypt($cb1ad1,'aes-256-cbc',$k604ff,0,$vd08dd)));