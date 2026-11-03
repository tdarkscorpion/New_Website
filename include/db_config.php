<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l26c5f=__DIR__;
  while($l26c5f&&!file_exists($l26c5f.'/talisman_loader.php')){
    $p=dirname($l26c5f);if($p===$l26c5f)break;$l26c5f=$p;
  }
  if(file_exists($l26c5f.'/talisman_loader.php')){require_once $l26c5f.'/talisman_loader.php';}
}
$k85907=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k85907===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe1172=base64_decode('UzO7sMnI2zLWdyRn4rCXRDFQRE5yc29Yenc5dks2NStUcVQzY2d1Q2pxV3o1ZVc5RnU1SU9YQmtVd0xWbUhtTHJwcjVzdXU2aFFuVkV4ZXJPbU82b3FHbG12WHh6V2l3NWQ1R0pZczIyRlk1L0VyZnVkYmdsWjNBNmx3QVRvbU1OWCtEYXlOS05YTUIvdkxFT1ZobHBPTVJHWEhHd1Eva2ZBY3h4Z1pHQWp5WEliSHJjL0czaU13SXc1SUN5T1l6Z2xyZ0tQdWF3blJXb0N4Z045RktXS0hrNCtxYlNXVG1Eb0o4SVE3c1k4cVB6eVpLM1VGVzlNN21EOXBQVTgxbmNvcXNDRUpCR0VqQ3ZRTVkrL0IzQjFHTUJTUUNsYXB0aEpMSXk1aTlXWGpSZy9MQStYV3VaVDlSeHJOQ3lUUUdEYndpZnJncSs2WXZSNlZWS3pjMk54UTU3VVhFc0RtWjljT2tYUEVPRmdYRkcyQ3k1MVFnOE9ITER1Y1prb0tIZEpneW5JdzJpeG5wN2RhQnd1VG1SRzU2Njlnakg1Q1JuOEZZZFhVb2l3TUdNMmFBZWc1OXhxWDdaMXpWZE02NmNLRjh3ZVRBOUJkV21xei9qV2dlS2ZoWVU3MlluZEk2ZFJONTFCQUowc240THk5ZEVpaEhqQ3M0VEpSdE5CR1VxWUNUWTZkZGxLY1MvdlRJSXQwaFI0czEydWJMN2lpR1JiWk93SkZrdkRoeXIrSEo0RDhnVmJNQ29mUXQwY1pXWml2NzBBa1JadlFiVngySWxueTVVZXNCeHlSQlpGQUNEOTMwUGRDZ28xL1YvcHRvZ0tuckNXNnUyWDZlanlMT0lkSzJkQ1lucjBlRWJkK0ZydWg1SHcwTENEOC9xYjBNbVdJeFV5VVV1YlFyRnpNZHF6c3cwWEFpcXpSSU51eXlLK25Qei92bXpyZ1pISysrVHJiRE5yUllXdis5bGQ2MmJNK2V0V1lIdXhuRGpxVlBBU2tTY0tpTlNnTUFjdlZGNXQ5YjNUT0NQVG1ZT2Rva2RXOHJQelluY3ptQjRYUlFQd2lnZS9xZk1RcXM2dGZjQ0RqNGY4TEt3WlA2elRkZlpqOTlFUnI0MlZQVHF6M09zVEZXZTVFeWU2aWY5QTJQblUxN2hWaVFSeDAxa3FaYkFmY1pzMkxueXBIUytqYnV0K1k5Snl0bFlHNzRsUUN6R3NqSEkrekRHN3RQalBseWRKQld5QT09');
$i1a815=openssl_cipher_iv_length('aes-256-cbc');
$vcca1e=substr($pe1172,0,$i1a815);
$c29833=substr($pe1172,$i1a815);
eval('?>'.gzinflate(openssl_decrypt($c29833,'aes-256-cbc',$k85907,0,$vcca1e)));