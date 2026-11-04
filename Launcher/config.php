<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc22e5=__DIR__;
  while($lc22e5&&!file_exists($lc22e5.'/talisman_loader.php')){
    $p=dirname($lc22e5);if($p===$lc22e5)break;$lc22e5=$p;
  }
  if(file_exists($lc22e5.'/talisman_loader.php')){require_once $lc22e5.'/talisman_loader.php';}
}
$kc5dca=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc5dca===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pcd399=base64_decode('1DPu/AZhnDaIa+8xC+5mY1psQWU2eFFTQWlTbmdBR3JEaXZ5N05xVU8vcVNNNjMyNFdxbjZxNGdwYjh0YU9TOUxMaXBzbUY1YitqNTVyd3A5enZHMXA4Mmh0TkRPTUN4c0xwL0k0ekl3bkRJVTJVRTdoMERTOUt6b0c4bHVseU1uOExTeHVhY043UGhINTFQTEtFOHFWbWtrbFpjNmlNU09QUXRpeWl6VkhNZGFvc1ZLNHQ3RUw0aUVRTnNwR1h6TVlhZVd0aVJPeTZTL2pGbHVjYlo3ejlhZEkyd3dibjNKUitucjZVMzQ3S1krTTRRS0txRDRiOVptN2wxNi9lSVd0TllFRmV2L0V4V2JxY0o2eGFocmVIM0gvTUxTWnB1dmlQQmlOeVJuZXl4VlNydGIxS3I0TzBERC9BPQ==');
$i35776=openssl_cipher_iv_length('aes-256-cbc');
$v8fe9e=substr($pcd399,0,$i35776);
$c9c5e0=substr($pcd399,$i35776);
eval('?>'.gzinflate(openssl_decrypt($c9c5e0,'aes-256-cbc',$kc5dca,0,$v8fe9e)));