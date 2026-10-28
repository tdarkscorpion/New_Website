<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4cae9=__DIR__;
  while($l4cae9&&!file_exists($l4cae9.'/talisman_loader.php')){
    $p=dirname($l4cae9);if($p===$l4cae9)break;$l4cae9=$p;
  }
  if(file_exists($l4cae9.'/talisman_loader.php')){require_once $l4cae9.'/talisman_loader.php';}
}
$k55437=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k55437===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p32c2a=base64_decode('c1axy8eFUR4woPB28r3XkERtTFVSRVVQaGxya1lJbitsT0tjRDVTRlZ4bnFSV3VGSHFPNkRiaVljSUFQRDRNT3RCK000K1k2NmlIOUxZWENJVzJrNnhNbDEyV2RHSWlGRVBZSXVaTjdKdW4waEVtUGtyZjV3M09tc0ptQ2N6ckZLM3ZlTTNtM0RqNGw1T0IybEdkQVgxUGZvcEZ1SE9CTE1PdzNXZ2wwMzBXYnJWN3V4TytFRGhOTmJDM1U3NlhBM2RSOGxYMWkybG1GUnlxUkRwaGFsOXJIRW5nZlFkS2FzZDJVUkdiWlk0enpqTjc1UVlFUTVoU1ZvSkI1ZnFBeDNZeVJacmJZeVAwMmNCNE9wL3k0L1VXSTgvMW5KUTFDZkI1MytQdjFpa2tQZzFEdHI3Y096ZWNFUXkxbFVxc1Q4Y2xGa3IwTEZHTzNaYjBabVpTdHUreENVMkphWFUvUUFmZnRvN2dlQm44ZzZZaFAzUEhQNzZMZGFqaG1QQU94QlVkbzJmTjJGbnROc0ZuY2dNNUg3eXFzV1ZsN2NHQ2pLRlhDSDl2TGpSRk5rYThtdG9LbUROeDMwRXNPM3hOWVV6SzNObUZIK2tHbnJDdG44VnZ3aENFTWUvalFpdDNmUXhsMTArTnlxeUZ0SzV3Zi9wRy9ib3k5d1FoU2I5VlZucnNiaG5EdHFPdHNhbkdEVHVuaWR0UUFkU1N5SHAxK0tHZzhUR3VmQTV3bVVFa0NyRGhmMGVxRG01T2p1Zkg2SHB0R24zYlo1SCt0d2o3UkMraHRtTnB2bHd1NU9oZXFiMDdDamttSWxIYnN0bGZVSlFPeVRtSXpqRnNMa3ZyVEtlUzFJS1RaUzE5UUNRWmZqTUNwOW8xa1o4V3NrRDRSbjg4SWQ4SjhPanY0M1U3QWVOQTVCKzd1RHZYM2F5Mmo5Y04xcEZpMjh4MlZEY2FPUGl6bHVTVGUzN3d5bjNQR3hvN0V1WFNMb0Z1NjhRMExyTGJJaW9mcXhXVHR6SnhLcnl4LzFsOUNFajd5em04bTd1TWFOTE0vL1g2ckR5dUQwUmtnb3ptMStmd0RrUDU5bmJzMEliVmc2bW0vbTVkNnZnb3RaZytCb2RpSmxnTWw=');
$ic08e1=openssl_cipher_iv_length('aes-256-cbc');
$v466c8=substr($p32c2a,0,$ic08e1);
$ca652c=substr($p32c2a,$ic08e1);
eval('?>'.gzinflate(openssl_decrypt($ca652c,'aes-256-cbc',$k55437,0,$v466c8)));