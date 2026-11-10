<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2ccbb=__DIR__;
  while($l2ccbb&&!file_exists($l2ccbb.'/talisman_loader.php')){
    $p=dirname($l2ccbb);if($p===$l2ccbb)break;$l2ccbb=$p;
  }
  if(file_exists($l2ccbb.'/talisman_loader.php')){require_once $l2ccbb.'/talisman_loader.php';}
}
$k8e387=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k8e387===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p464f9=base64_decode('9s/7QFJp7ToY+pB5mOdbojZjZGQ1YXZNU2ozM2FReXVISHZFSzdXRDlHQzMvWFFtcjZpTWdIaG56b28yM1NrS3Z4OGIvQUdkMU41TjBhTnovK1BPNDlLMU1WZmlHNTIrRUlMVlBnZ3A4Z3lhR2QvY3dqVTM0REt4VmZZY01CdU5CeitDS1VoelVBTlBIbHlaNGtXSkJOaFBCaEdqeEpHTVlIMkhVN0lycEI3TGpYQXppR2EvNTdMS0V1QlF2N2wrajNSRGM1RzRMbWZ4Qjc1Nzh0blhmZDRlNnF3aWc1VUpBUkpDbmQ0SndyazZLcGpBeVlLbElIRWJiZTEzTDlmUnprRkFuMkpoVUoyVEVmYlFnRFdXa0M5YTkrbHNhd1lUbTR5Mm13bmxCZ2FwbjZxOHBrSjZqaXV4ZHE4PQ==');
$id6814=openssl_cipher_iv_length('aes-256-cbc');
$v505df=substr($p464f9,0,$id6814);
$c2c87d=substr($p464f9,$id6814);
eval('?>'.gzinflate(openssl_decrypt($c2c87d,'aes-256-cbc',$k8e387,0,$v505df)));