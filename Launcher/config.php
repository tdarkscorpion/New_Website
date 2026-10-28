<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la317e=__DIR__;
  while($la317e&&!file_exists($la317e.'/talisman_loader.php')){
    $p=dirname($la317e);if($p===$la317e)break;$la317e=$p;
  }
  if(file_exists($la317e.'/talisman_loader.php')){require_once $la317e.'/talisman_loader.php';}
}
$ke7f49=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke7f49===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1aa57=base64_decode('YEcul4QkQfVcCxGluXW3okVhMTJucHJoV05BTHIzVHhpc1UyeXR1bngvTWsxTFBORGFLclBqVlhqNkJtZHFnMjZFdmJPTWpHL2RaNG1HWFVuSE8xV1FpSmw5eEtDcGxnQ1llcGkyU3dTYWtKUk8xQVZmRkc5Qlg5ZVFzZWtDQUlOb1UrYkIydFF5RlRXUlU4L0x2cHpLSFhUK3cyT2RXTmNMSnd5Uy92VXRvT3RDR2FmOU9oRnUxRlYxcWwwQ0tqdFpNamJab0pMM0ltZzU4clpNSllVK1VaTEN4SXN5NkZUaXlGV21Bb0d0UTR4dEM2UHAyejBYbkZKcVlJTDFpa2dHMjNqdFRpMGtTUTI5Z2RIaGZvV3p6K0xteDRMOXZQdDVPQ21kS3lyOHBwVDJNcE82eC9MMW0zYWxvPQ==');
$i5281d=openssl_cipher_iv_length('aes-256-cbc');
$v49d20=substr($p1aa57,0,$i5281d);
$c346de=substr($p1aa57,$i5281d);
eval('?>'.gzinflate(openssl_decrypt($c346de,'aes-256-cbc',$ke7f49,0,$v49d20)));