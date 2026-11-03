<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5674b=__DIR__;
  while($l5674b&&!file_exists($l5674b.'/talisman_loader.php')){
    $p=dirname($l5674b);if($p===$l5674b)break;$l5674b=$p;
  }
  if(file_exists($l5674b.'/talisman_loader.php')){require_once $l5674b.'/talisman_loader.php';}
}
$k9374c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9374c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p89660=base64_decode('gKDwLch7vC3BxfXx1JRpoUlmb0haSlo3ZWpTSjU1Y056bDNBSjU2ZlQ4ZDZmQWFKVmx0T2FDSDMvNzE5Umo4OTJ1MFYrN01WTllvMEFwZi9SNkpkaUY2WjdJK05NNDNjSWt3S05nT3IxVE9ub0xsY0x5T2pXcWo1aDZKTlJCdlZUSVVydFJyUUV5M2FDdGxVUUMzYlV0S0dPR0xwZjN4UVdtdDhaSjIybHhNVWVIeElwRzJqOHY4bm4wcW5HeWVpN3RHNDVIS1B6QkFkcHNBVFlTMzFTY3BwaHI3aTl3Yy95RjViM2x3MUFKSGlBMmloZkJKRFRKSWtrRC8vK25BQklpekpOcStEQ0VyQ3lTM3BOZjhnMHZieUNhNjh4WXUyK1MyMUtOcTk2bjRXN3BxZVpHSHZqUkxpVnRmdm52OWdZcFNBaEttRVZ0bEtWemxx');
$ibca6e=openssl_cipher_iv_length('aes-256-cbc');
$vc412f=substr($p89660,0,$ibca6e);
$c943d3=substr($p89660,$ibca6e);
eval('?>'.gzinflate(openssl_decrypt($c943d3,'aes-256-cbc',$k9374c,0,$vc412f)));