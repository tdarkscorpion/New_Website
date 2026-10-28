<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4bbc9=__DIR__;
  while($l4bbc9&&!file_exists($l4bbc9.'/talisman_loader.php')){
    $p=dirname($l4bbc9);if($p===$l4bbc9)break;$l4bbc9=$p;
  }
  if(file_exists($l4bbc9.'/talisman_loader.php')){require_once $l4bbc9.'/talisman_loader.php';}
}
$k56dc7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k56dc7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0d28d=base64_decode('DWjqYlpuLKNwSZmPxp7u8WljRUt6Y1lQVEI4NEVBWG52YjNPelF4K3NyY3MweTRzS1JsdmZUYzZkVkpESm9aV2kxVG92bWN2cTlzNWg1U2RjbGYyV1dVSGFINDFLRXhJc0UveVdwVVVqMC9xakJOdzZkaDBmUDhxZ3ZKMnFubGpwVlg5YkJ6VDNtT0tXREhjbTFta2ptQUd2SGVzemF1d0FjWmc3bFNxSm5xdHBDV2R3OWFRTzJRbHFpZTByQXU0T3VHVDdYSXU2d0p1SUlzUnppZE1LNUNCNmxoeU90SjE1QlFkYWc2UXhqeFkrQkl4VWZTNDFPYys4OUpOdzhuYVphNDcxMjlRQnloTm9yS3AxVDdVK2RhQ3ZIanM5ZUpIeThmcFNWakptL20xT1ZZWXJnSklvdGMwNFl2VFNtV0FFQWdueEgwbDB3WkFLZGZoOFlocHhUdEhZT3JSOXVGQWZaNFBlNUdjeEZYemdDUmZmZWZsRzBlTStjYTFubTE2ajgwd1g1cDRXVkVaWU9tSEQ5dmN0RldBRDdJclB1bDZPNnR3K2hVZHBvZlhlNzdUZ3M1eXVhTFJBdWRaWWdxU3QwQ3BldFNhandjVjJ1M0tMaTVNWEM5MnhnaW9meWtlU05jOEhXTHpnM3lFOFBQVDlLK2tkREJ0QUpYcEo3SGF5Sjh4ajBrMWZud2tpZiti');
$i8859e=openssl_cipher_iv_length('aes-256-cbc');
$v80106=substr($p0d28d,0,$i8859e);
$c6eddb=substr($p0d28d,$i8859e);
eval('?>'.gzinflate(openssl_decrypt($c6eddb,'aes-256-cbc',$k56dc7,0,$v80106)));