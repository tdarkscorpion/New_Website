<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l221b9=__DIR__;
  while($l221b9&&!file_exists($l221b9.'/talisman_loader.php')){
    $p=dirname($l221b9);if($p===$l221b9)break;$l221b9=$p;
  }
  if(file_exists($l221b9.'/talisman_loader.php')){require_once $l221b9.'/talisman_loader.php';}
}
$k579ef=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k579ef===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pad27e=base64_decode('PNnteERI50jDUWGOyUvqXW84bWhyUkFmK2ZHVGN0cjV2aHowby9vNlltSVdXcUxiVkNLNmJsVkx6OEh1UnBuSkZFN216MGdEWjkvU2pKYTRMeVkySURNQUVhVWVhNlVLLzQyb0JpUm9mTUFqUVVwTi9tZU1OSFRpRUtNPQ==');
$i97f82=openssl_cipher_iv_length('aes-256-cbc');
$v5ae60=substr($pad27e,0,$i97f82);
$cd1cfc=substr($pad27e,$i97f82);
eval('?>'.gzinflate(openssl_decrypt($cd1cfc,'aes-256-cbc',$k579ef,0,$v5ae60)));