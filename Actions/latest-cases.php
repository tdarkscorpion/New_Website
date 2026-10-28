<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l32caa=__DIR__;
  while($l32caa&&!file_exists($l32caa.'/talisman_loader.php')){
    $p=dirname($l32caa);if($p===$l32caa)break;$l32caa=$p;
  }
  if(file_exists($l32caa.'/talisman_loader.php')){require_once $l32caa.'/talisman_loader.php';}
}
$k924ca=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k924ca===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p83758=base64_decode('h40lMl4XGnvfUFMUWmuohklJbXdCck5aQUp1VTU4R2kraFIxdnlvWGR4OUVhWEE0cXQ0dEpzaE9GN1BKbnlHbloySm9PbndRdUpXRmNuNVc2QzRRbUVBQzBmeHZsdnY0ZVFzejVjUitLYk1NeGZoOG0zV0F4TTB3eldnZUtXUkczRlIwVE9JODNONGpTdXM0MlYxd3lsbWdqbU9mOFd6N3BwWUtiV3RVb2drYmNnaUx1d0xSbUdaRk95dWYvN3dmaXZPUm5ndkVWamtJME1oT3FSWFNJem0rb3lLM2RNblA5TGwwcTlLdEgzaDAwTkptOXNpZkpLSnRzMTJxbTlXR0FseHduMW9ON1BTZzUyblFDdWxCc0o3dXF4TFZzc2d1clBWRHA5TFRjY3UydWVsd2txN0lnTmFPZnJvZE1hZ3BQY1hjZ0RqS2pqaExqaktKNjNJdmhzcEFyWGRrTC9PRnZRMnlRa3JaT0txVGViNUVqdlp3cWlHaDRIS1dGUEVTUmVrYjd2ZUNpN1YrWXE5MmRCemZjaGJkYXdjUzVETS9VM0t4VjdwRkduNVNzMVFGQ3BNSnpseFhWQ0I1NW9uUXNoTHdQelFkNjlOckR4bC91cng3WFBNNUY3cEVwd0hyV1puOUxUcGw5aUg1UGRBRTBKL003Z3RsSkpGR3p6bk9PcnNWZCtrSXFYRTE1eXBKNW1qRTNSajlQSncrdXJhdGVGejFZU09JakR5czl1dklKcmY1dWFSVG1LRlltUWRxWlVlVGJsOUhNclRMeGRlcWlVQjlTazdZRS9RQy9SRm9JTmZnVXpyNW9LNnllT0xhemd6Qmp1VE5YRGJ0WlIvdmtLdS82UGZVTEl4aGtXRElRUjVOZ3hiS0oxRjh4eDV2WGM5em9BPT0=');
$i95f45=openssl_cipher_iv_length('aes-256-cbc');
$v0fe7b=substr($p83758,0,$i95f45);
$c4a1cd=substr($p83758,$i95f45);
eval('?>'.gzinflate(openssl_decrypt($c4a1cd,'aes-256-cbc',$k924ca,0,$v0fe7b)));