<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld94de=__DIR__;
  while($ld94de&&!file_exists($ld94de.'/talisman_loader.php')){
    $p=dirname($ld94de);if($p===$ld94de)break;$ld94de=$p;
  }
  if(file_exists($ld94de.'/talisman_loader.php')){require_once $ld94de.'/talisman_loader.php';}
}
$k28be8=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k28be8===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p03df6=base64_decode('MZw6PPHdWmFUIV8HdN9nuHlyM0o0OU5pQUxnZmQraEdQS3RTcjVEUW1TM3V6MG9JbWlBbTFXSnI2QjhVN2lIdW8xMGg2V3FWWEZaWnE4VTYzRTlNRWR5NDJ1QkEvTUlmMFlBME9CVWd1M1BESnMzUExydW85V2l5bHBIQTl3OEJMcVBWNE45dllVTGdxV2gyYjM2c01Fd09rSGJLT3ZVOXBuN2gvOTlYWk1HU0xDLzVtenBlSkpMbVVyMituVkR3MTNNUUx6NkNDdzgvTlFVQTc3aGQ5VnVBUyt0aDlNTHVPbEUrbWxLbFFQNU9QNFVJeHczS01zRlgxWmQ3ZDAyVGNCSjljVUhHWmRsNzFMOTVaVUpETXhxWjZkeE5FS3dua1crV01UcHpHQUNoWlVPalBUVEtOQ3M1aDhnPQ==');
$i3530c=openssl_cipher_iv_length('aes-256-cbc');
$v1593e=substr($p03df6,0,$i3530c);
$c91b66=substr($p03df6,$i3530c);
eval('?>'.gzinflate(openssl_decrypt($c91b66,'aes-256-cbc',$k28be8,0,$v1593e)));