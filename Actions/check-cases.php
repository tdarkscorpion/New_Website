<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l58c23=__DIR__;
  while($l58c23&&!file_exists($l58c23.'/talisman_loader.php')){
    $p=dirname($l58c23);if($p===$l58c23)break;$l58c23=$p;
  }
  if(file_exists($l58c23.'/talisman_loader.php')){require_once $l58c23.'/talisman_loader.php';}
}
$k37c14=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k37c14===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$peeb2f=base64_decode('A1WjOkAi8vssgsLMMa6593BJUUNiSDlELzQ1UE5kWktKL3ROaEpFZmpKTzc5UWtZTnlyN1pjTkZjaUlQSXpWWUNkVTIvNEpNS3A5UDVnVDAzeUpFekRDM29IbXYzK0RnNDAycVNobkFGZ2o5Qk9VOUlhMjkwS3JZY1MwRVNBSHV6Q0J0VTNpT3JHOHlUUTNWWmhDYlIyY1VOTCtLNU1sZlNXOVZ4RngxdWJ1a05sbnJDOHo5VkVpWktkTEN1QkxjTUZVU25zZm9vV0Q0YmZSeE5rbnZ2SURiS0Y0TWFJS3JjMUV3alpPVDBMSUJRS2ZRNzNQbURLaGFZbENXd2pMZk5tRHBTZXRzNEtuRjVhaDRFVHE2eHRDWGVjUW5EMW55ZlB3VnpJWlpmWkNlMFBCR1dQdzNudFJ2WXFvRmpYSzR5dUpBWEJvQlpDbkZ4Q05uWlJOUGs1anZnMGJuQnNmT0xFazliY1NMN2EvZ2pWckNINEUxUnRGdHpFSG52dnVkWDM2ZkYvQkp4NFpFdXZKMDZTZ1BjdXJMa3F2YmRqTExia1dkaGxSVmVkTjJJYWI0b0x3SExiTWEyZHY3TzhycUdoalVYLzFiRVFabnBHMzBySFgyaExvUkM0MUtWdUVNVS9DZGl2dHRwNXlleU94em1xdnF2S1JDUVBkWDB6UldnUEtNaTJpOVl2dXZyaUxvSTFCS2xXdGRGY3NYM3FYeUdNOVhuTkROL3BsR1VCQXYyVy90ZzM5aWt1WXVGeFoxeGhBMFVPUGYxSThmbGRhcHJBQkZwdDBsZHBwZ0xWdTZwMjBKWmE1QzNnQ1dnM05JTDN3TzIyZldqa2tIaGp2Rko2UU1jNFJRR3lncEJuVHo=');
$i75e49=openssl_cipher_iv_length('aes-256-cbc');
$v28228=substr($peeb2f,0,$i75e49);
$c513c9=substr($peeb2f,$i75e49);
eval('?>'.gzinflate(openssl_decrypt($c513c9,'aes-256-cbc',$k37c14,0,$v28228)));