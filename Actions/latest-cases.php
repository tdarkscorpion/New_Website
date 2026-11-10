<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld34f1=__DIR__;
  while($ld34f1&&!file_exists($ld34f1.'/talisman_loader.php')){
    $p=dirname($ld34f1);if($p===$ld34f1)break;$ld34f1=$p;
  }
  if(file_exists($ld34f1.'/talisman_loader.php')){require_once $ld34f1.'/talisman_loader.php';}
}
$ke1a8f=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke1a8f===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf9e8e=base64_decode('GH7L8inIuXDVgdFoVJy4cUVKK00vbG5LWHVLdFphUitTam1BVU9xbHBNdmZVbDlMbmpFWnNHQWRzalNhZXVyWmRDVzhVbC95Q3IyVitUUGJZZldiU2JVQjlsd01OUThBbEdSY3MySTNBVG5QeWRZRGdnQmhLVjlyWHJzSzBXMjdudUtjbHZVYno2NHloQ2NHQWVFYmUzNEE0QlIwTHZBaHFPRk1MSU9MR2wwNmNFb0xwQ0lCMXM2QWt1bHMzRFZjbmo5YkcrR1FwVFIrZTJPYXlrK1UyejMxb1NvU2NmUFljSGUxUDJYYVczZEowRXFlbm9LUWJWVGY4VUZJVjQwcVd0M29Zbm9xb0dHUUNONnZGQi9iWWNMZ3dnTlg4VFR0T29BMjRaS2FoYlB1TFVuRkVPeXRvRG50bUJoV04xNlhaN0dCY1IyRHFhVUdzVm5uVmxWNlZ1NzlXZzhsNGdGM0lJUmVQdG1scFVzWjhBRGlkVko1SnhYZU5UMTVMSEo1cTVrYTlyWStuSDRONEh1UHRsTWh0NTVlS0d2RExybGFUeVQrK3AvY0JIcDdrMGIrZkFJYm9sUkRuNkhZbjNrUllsTFFlZ1RGZVdUSFRMS0NyeGkvUFJYa3VUNWlFMHNyY2VGWXJYWTBFZmRqNEFKSkc0ZjRTTDNBeERISlBqam45Zlprcjg5WXEzUTdLMTVqUUtrYlY2S0Vtc2E1dmVKejgxTll1WUgxRENxMnNYUCtNalByaFJqU1BUajJ0b3NMSDdqQzhjYlRuOWVKSWtibEgrampuYjEzaTI5bExIYjBSY0o1RE1KWjhvRFhYWHFrS0I3L01CWXprYUpHSTU3YUw3ZFpLdVcvcEtZdkpSUzJtYVBtYVdPYmtSSlhaZ2pKcnVGWnJnPT0=');
$i09bbe=openssl_cipher_iv_length('aes-256-cbc');
$v54a88=substr($pf9e8e,0,$i09bbe);
$ce9127=substr($pf9e8e,$i09bbe);
eval('?>'.gzinflate(openssl_decrypt($ce9127,'aes-256-cbc',$ke1a8f,0,$v54a88)));