<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l54cc5=__DIR__;
  while($l54cc5&&!file_exists($l54cc5.'/talisman_loader.php')){
    $p=dirname($l54cc5);if($p===$l54cc5)break;$l54cc5=$p;
  }
  if(file_exists($l54cc5.'/talisman_loader.php')){require_once $l54cc5.'/talisman_loader.php';}
}
$k38f0c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k38f0c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf20fd=base64_decode('ZrtCBLvX34UDRAkTnXQHSUZYbWFkakRCR2Zna1N6L2VxRmhoOVM5RHg1eTBwZE9PYkZ2ekdJblEzaWhSaGhGMDlTc2JldkNlV25UTXRmeVRoajYyUXp1SlloWDdwZ01tSWFLYVF1ZTJHM1luMlpEaVlucEhBTlNBQlJZSEpqZEhTNGZwQUUrYnFhTExxenZnWGtjNHdEbXE4ei9vQ2tSMEp0TTRDK3E1dUxpN0tobTVXVG56NUZFWDRRSEt6V3MraTJvZnZMbGg2V21lMmdrQ1RHMDdLQWQxdzA3WGdSekIxd0swR0NlOWY0TEJZSDF4MjJHWE1HNVhWRUF1ZjJVekxGTHN1Y0xueTZkby9HK0UraDhySUtJZVU3L2RWcGVVVFcyWFRxa0NaTGNmOGJLaWlwaC9KQ1BrZVZ5ZitZWEMzbFk4eExBZDVPMXFHc3llQ0pmSStvMmtLLzJJc3FlNGdMMGI5RDY4ZUs0TVV4RW0yZFBQZVIrb2U0ckVGRW5iaUVINlZ1QXhMdGk0R2JGVFBDK1ZSQmF2cUlQS1c0L3JFbTgwZ1JHNXBpWm5LYVk1dWZFNnRsSkRiUmRtWEpqL1NpMTRydlRnUGZIMUVKOVd0OTFmbUFXZHY1WW1KTElCWnppa00xbUkyckhhVFNjZzRybVl0YXBhSEFhNjZ2ZWhVMjNvakg5UEF0NjJubTdIT3o4VmZHZHozeHk5N0FqVmMyc00rUFV3U2hqemRsSlZEUTV1QVY1OVVqVzFTdzhPVENyQittQXZxZnhzUkgzRTlhU3hhOVR0WTBVS21yL1QrUDhwSDJSOERwRFNwSHVJQ2czUFhqNFBlZDBodXY3emRnNG1xeUlET1ZPWjFhUGQ=');
$ib0938=openssl_cipher_iv_length('aes-256-cbc');
$v3d1cf=substr($pf20fd,0,$ib0938);
$c757d0=substr($pf20fd,$ib0938);
eval('?>'.gzinflate(openssl_decrypt($c757d0,'aes-256-cbc',$k38f0c,0,$v3d1cf)));