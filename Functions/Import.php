<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld92bd=__DIR__;
  while($ld92bd&&!file_exists($ld92bd.'/talisman_loader.php')){
    $p=dirname($ld92bd);if($p===$ld92bd)break;$ld92bd=$p;
  }
  if(file_exists($ld92bd.'/talisman_loader.php')){require_once $ld92bd.'/talisman_loader.php';}
}
$k99b0c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k99b0c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p20e51=base64_decode('O1/OsFPlVJMBG35kQVLfEk9KdWk0N3RiTlNGUHkvbVpTMGxaTzN4OUdaWGNpL2dDQWhta0pZaVREWG5wb1M4UVFQRkF0dWdYejZnM3dXdTB4SjVnenZxR0QyVGhLSUhiU2NmajZVL3RheFRYNzh6dlREM3EreGE1REhkcERYSUp4QVNSdlk5aFdQNGFuNUNtVlBYRGZmSHgwdHZwSGhPUTJHRk03WTlFZ0hranplSTlCdGl0UU5Ua0RpY3Y2OS9sdnUwQW42UTFTQWNaNFhLYXNVR0wyTFVSZktxVzFGNkNjRnM5VlZnWERSQ3IwMjM5aW1keWhiQUNzaVN5WHMrdm1UQW5WL1EvamFRNThPRHlSYWM1SlNGM25lWmV5OVRQQWcxL1dKMmREdVRSQmEzRFJjQy9QMW5DNFlVVTN3N0hKTjMvR25JdXBRVm9mWVBWeGphVG9YUnJtMDRUMVJRbk1RQ1BpL2d3ano3ZVpJc1Aza21SdnhzaU9nZzRGSW0wS1FUQUdSVktlbnlhTGJTdit3Z1NyL2V2elYrRnNNaHkyalRGMXpMWDhqMC9DUVNmQ3NKK2V1TjJqTEoreWVmRkU1eWtKVHRXeEFwMCtoR21JRE9zZkZzTTF1a0tJckFDVTdtOHllcWU1V1N0bzdQcCs1aHRMbDlwMFgzMEFvUWxqZzl2bFJ5Y09FaGdxclZy');
$ib97c8=openssl_cipher_iv_length('aes-256-cbc');
$vc091a=substr($p20e51,0,$ib97c8);
$cc026c=substr($p20e51,$ib97c8);
eval('?>'.gzinflate(openssl_decrypt($cc026c,'aes-256-cbc',$k99b0c,0,$vc091a)));