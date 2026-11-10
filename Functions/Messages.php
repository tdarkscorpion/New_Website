<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4bcf9=__DIR__;
  while($l4bcf9&&!file_exists($l4bcf9.'/talisman_loader.php')){
    $p=dirname($l4bcf9);if($p===$l4bcf9)break;$l4bcf9=$p;
  }
  if(file_exists($l4bcf9.'/talisman_loader.php')){require_once $l4bcf9.'/talisman_loader.php';}
}
$kee789=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kee789===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p33111=base64_decode('yVHIc7OQu47LSVf0oSlkLExlYTVVS1hHZzBVQjBaRHhydUJEbDJwVEt2RXFlYjNJNXE5b1o1TmgyV2hUSGRTTkk2ODU3aEl2aklQVUkrRWkvUFYwcVhrN2JsUlRleXVycy9LM3FhTi8yV1VhM1pLWjFna1ZCT1UrMzBkY3p2dDd5ZkN4YndLQi9WWFVtNmRPejkreVllSExEdlBrMUlZN2swWG4xQktpOGR6S0x6SlpPc1A0bld2cGxWSGt5SlFGTGFoTlc2SDROKzY0Q0JXa2FqN0JpN2RLVTBTbWZqeWxsMmptUW9iamFyWWdlcUFIQ2o2Y2pBSk5oMnR6YnVNejViQTBqYXdYRFltbmNmd1hQMHlMcHpMZXo1UFRjNFNrS00xby9oS0xPa0dHY2dJdzQ0Rjh2RXdmLzJjPQ==');
$ic5ea9=openssl_cipher_iv_length('aes-256-cbc');
$v3ba9e=substr($p33111,0,$ic5ea9);
$cf6ae0=substr($p33111,$ic5ea9);
eval('?>'.gzinflate(openssl_decrypt($cf6ae0,'aes-256-cbc',$kee789,0,$v3ba9e)));