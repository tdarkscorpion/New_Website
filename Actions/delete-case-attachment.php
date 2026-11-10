<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5aebb=__DIR__;
  while($l5aebb&&!file_exists($l5aebb.'/talisman_loader.php')){
    $p=dirname($l5aebb);if($p===$l5aebb)break;$l5aebb=$p;
  }
  if(file_exists($l5aebb.'/talisman_loader.php')){require_once $l5aebb.'/talisman_loader.php';}
}
$k6b5a6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6b5a6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd4ba1=base64_decode('SBKhiDEz8ZSZ+tWP2bJ8KkpWR3ZVYklnL0h0ZGxtYmphSEhWWkJrSElrNkFCdGZPL0J6V1ljL0w5UCtLd05mbGsvUGtNU0lPeWtJa3lxZ2lMQ09ESFB4ajZRbURjRXdacFlIQ0VORTRiY0VZYTBsNWRKTzhWTVh3VmVrWFhGQUpSNFhmWGZFSm90WUNNTEJJRUQ3Y1FqSjRqR09vS0l6d2syUm5waE5sWGxXRFliNmluZ0xXNFJaYjRkZFptbEF0MjBMbG45OFRwdmpqcFJuT2tqbnVFSkUwa0JKQUdmelNmcXBJaGRVeTZDaml2QW4wQ3dkR01MT1BlRDVlWUxuMWNkalFrNFJuQTZxRVJ0a3RoL05qWXdhY2tXNG1Oa1kwb25mR281OEVtUnpLNjQ2T2QvQnI2M25vaXMxcjRpZkhVRTNKQkNMSGZ0OHNEQ0RJ');
$i39864=openssl_cipher_iv_length('aes-256-cbc');
$v20c47=substr($pd4ba1,0,$i39864);
$c389b3=substr($pd4ba1,$i39864);
eval('?>'.gzinflate(openssl_decrypt($c389b3,'aes-256-cbc',$k6b5a6,0,$v20c47)));