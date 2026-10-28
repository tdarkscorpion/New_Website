<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l00f29=__DIR__;
  while($l00f29&&!file_exists($l00f29.'/talisman_loader.php')){
    $p=dirname($l00f29);if($p===$l00f29)break;$l00f29=$p;
  }
  if(file_exists($l00f29.'/talisman_loader.php')){require_once $l00f29.'/talisman_loader.php';}
}
$k05f15=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k05f15===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5b30f=base64_decode('LNHXAeIsJgk9kKSI9b70FUtldlhhS1UxSHh3c3RVY2x0VitIR0ZLVDVpbEZkMzNaOTFrRldJTkNuczRVTStuWkFScjA1blNSaE4zR1c3OThVcDdVRjZHMlY0VmtyRFRKTGFVK3dTRUJRdXkxeHl5VGlxWG1vYnJCYy8vTlJKS2JmRm5sRk9qU05rOWxkSG40b3dSUEs3MG1XeWJZZ1prOENKMXlkcStOYlpsNUFERFhoRmt4b2QwNDYxcEJZNU44VXZ4TlpGWUxrQ0MrNUFUMk1ZV0UwZ2kwWmlwRFA5SXlhMC9HSnlFK3EycGU3TU94MHllZ1JsM0lOQWk2WGM2S2RGaExneFg4dllFdjFxcHRQdkZ1QWZiazhVaXVPcEZXSW1Qenp4WGhvMFZQRC83YWU0TVFQM0NWL0dZVTNvR0s1bEQ0bHF4T3VndUFiTVVaM0lYZVBYYmtuMUpaVzBRalpkNkNkSVZ3NDc4ckY5TVVMRnhDWDNLK0hKMkdUV05MYWRkZy96ZVBQWDdPdnZzVU9aZjBQTzg4SlduaDNnYjEvODBjSGJPRUtYTTUveEd0Uy92M1RGZmhadnlMZEpIUC9wTU5FOCtDL3E4bE4wVVBDNUZMc1NzTkpOVkV4czVyUmo0RG9OaXpMOWpTVFNuUXRZVHFkRkk3WGhlTUFDSEh4OTR3elh0aUVLZDBhbHJRSElTYzJDbG45NGFXbmcvdlhrS2Y4bG1mdzlTaG5yYUFRVWsyNHVCWmZTMFViZ2RZSkhoMTQyQ3kwbVBxbS9XdlRvWG1VYmlkTXBrc1ZGZ0NUMTdDOFBYazlteUVEaDJHOFhEdFJDa2VheGZrU3dVcStiYm9sZk14UG00MEFQakRHTmR0OXlMY2FTQ3R2bGZDczdKNWo0Ym91eFVDbXB1Y3VyUDNvakgwTDhzVzh1OUNMUHpLY0pnZkNteHlockk5emFWaE5TdGpYdXZ2RXFackhBa1BIS2hzNHMyRnk3S0d0dmpsQUN4QURJQ2JMLytSSjl1YWQrT2ozb0d6MkE5dUFVNkREbHREOTVEK1pjOXExRjhxQnlQUlVYUys0MTUzcVpvOEdDL1dMZ3BOUXh3RVBwY1VTZy9uUS9tb0pvRXZLbzl0OW82SzBoVU5WdU55RTI5WWxpNnBJTVEwYjdRUVNlZmsrS0dwWXZ2NVNLWXJDU2lLOWhqM3pleWpEanJTMmo2QjZmZnBQeTFuazF2T1l0MkxNZz09');
$if3580=openssl_cipher_iv_length('aes-256-cbc');
$v21e90=substr($p5b30f,0,$if3580);
$c8ef60=substr($p5b30f,$if3580);
eval('?>'.gzinflate(openssl_decrypt($c8ef60,'aes-256-cbc',$k05f15,0,$v21e90)));