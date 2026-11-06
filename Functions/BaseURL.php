<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lae103=__DIR__;
  while($lae103&&!file_exists($lae103.'/talisman_loader.php')){
    $p=dirname($lae103);if($p===$lae103)break;$lae103=$p;
  }
  if(file_exists($lae103.'/talisman_loader.php')){require_once $lae103.'/talisman_loader.php';}
}
$k6bb9c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6bb9c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb23e1=base64_decode('KYDV4hQJnaO8RQVZyVKl/jIvekdLcHRBMk5SbEZoa2xJWENKYUtySHBhMWI0TmJFOEV6RXdiNklTaHVvdDZjWmJCRnFTZ0tvSG5DVWVwQ2xkV1dJZkJpNVlway81QmZBak9ESGdCMmVqQ2lzLzhTQVBoK2Y5VGh2TjBSS1lHNEFlcWxrRmpyVFRnL3ZaL2dGNFlEWi9MUFMxWm5SekRuckZCMUNMZzkwcko2WGJrdkZVbkFGNkhQbThzaFk1UThoYVRsRERadTVJWHNuUGMvQ0liOFM2dHJxaVZqek9rbE9IQTM4MytVSnd2T1Ryd05YdWlNaFpxL3c1akJtUzUrV20wNVBRUFlueDZLSHRLaHE2ZHJlWk1MblA2TVdKT2M5cGRyMm0ySDI0RVVGMGhsOFN0UmFkL2FvTDRDWHFWZnBSWjFRNGlJS3NUYkZzT3pVTUxBUFVlNi9kenFwYTlPdThGV3pxaE1XV2dCK0Z3MTF5cWtJaC9JaXFnY3lTSEVId2VBYlZwU0RCZlVpZmdGdG4wWUcySmZVUk1zL1ZrNGxjWVZ0TGQ4eGxHbzkyTHAwZ25xTkhWdUVEUlFRNG4zS3AyUHM3dXVMbXh4cDh5UUxIaTMvTTZRUFhDaWVRQnJyT01EODhSbnlLTmpvSlJtOUFQMk40V3YwOEUwMGFnRmNXSloxWEN1R1R0dE1zcElzeDlEZzdmcVMvdjRCM3JKcXIyODR3eG54WFpNSTdYV1NQQXNmVG50b01zMWsydjNNY2hCUTN5cExRenczZ3VucCtmQmg0R1VLL2V0dFRPakZYZ1BGazR6TUR3ek01TmgwMW9WY2taQnZDbUZkME9acVZ4RnJlMzlSeXBmOTR2aTg=');
$i7d0bf=openssl_cipher_iv_length('aes-256-cbc');
$ve516c=substr($pb23e1,0,$i7d0bf);
$c46db7=substr($pb23e1,$i7d0bf);
eval('?>'.gzinflate(openssl_decrypt($c46db7,'aes-256-cbc',$k6bb9c,0,$ve516c)));