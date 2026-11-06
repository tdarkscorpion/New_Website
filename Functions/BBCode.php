<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l25bf6=__DIR__;
  while($l25bf6&&!file_exists($l25bf6.'/talisman_loader.php')){
    $p=dirname($l25bf6);if($p===$l25bf6)break;$l25bf6=$p;
  }
  if(file_exists($l25bf6.'/talisman_loader.php')){require_once $l25bf6.'/talisman_loader.php';}
}
$k9a6bf=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9a6bf===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdbd6f=base64_decode('G6uCGr4zaThVUJ17Do1+G1kyc3ROUWtJQkFFZjdBQ3FWQzE3SXZBRkpYdnUrNzVLM2JpUTRtRzJkME9NWHV5VEVocTlQbDNSOFhSSjhpSnhhenNENUVPZElXM1VlcE5TeHFGM3JiM1FDWUYzaU1KKzNsM0R0VFNhalRVVHpkNnFBN01KV1dYODRNTDJmNndRcEdoL3hXSnJ3NFQrV1BNTHFDQzZ0MkZUbGhSdTN2SkxEY1ZYZnhHVDVDUVk0eWh5RzdJdGZQanByQWVZc3NhMTgzOW53c0ViWU5zeExDRGs5bnBKT1JNQzlMRGM1cENubnlPUVdmSjM3SHBqNS9wVzlyTlBudWNMSkFnbHI4RUNNSXBYb09pTFR5eGFHTERxQzN0RDJETVQ4RjgzRVlnV05nQ2M0NzJjcmFIU3BEVXhZdDEwMFZYY1N4V2FtK2ow');
$i00a96=openssl_cipher_iv_length('aes-256-cbc');
$ve5bfd=substr($pdbd6f,0,$i00a96);
$c2ac2b=substr($pdbd6f,$i00a96);
eval('?>'.gzinflate(openssl_decrypt($c2ac2b,'aes-256-cbc',$k9a6bf,0,$ve5bfd)));