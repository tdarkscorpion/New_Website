<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l23d9f=__DIR__;
  while($l23d9f&&!file_exists($l23d9f.'/talisman_loader.php')){
    $p=dirname($l23d9f);if($p===$l23d9f)break;$l23d9f=$p;
  }
  if(file_exists($l23d9f.'/talisman_loader.php')){require_once $l23d9f.'/talisman_loader.php';}
}
$k45122=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k45122===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7a8a9=base64_decode('fkSAhIblG+Mn3b8bvynIfUhoLy9MbE9BTlkxdDI0ZGwxZ3dNclduQk1aSHFnNUo1LzVJVE5VeTJoT05QYjdDTEN3a09Kb0QvTEpaNDdQV3JQZ29Rek5qeVJldkpnRmZwL2lUbnpHc1AwZXNjQjN1MXZKd0FSR1Z3QWNQNk9KUUhZT2xPSFFWWjA2V2EvQ1FaOEZGRFZqTDBjTk9NeE5CVFVtSTJ5eURyNHpBQ1JTWVFrK21oQ1ZDNjhwTWJ6STI5VitrVURjUkFLYTlpUmkvSkVrQnkwcmdGZUQ5ZnR3L1lpVVJtWE8xaW1TRUp5S3dIT3kwNlRLTmtPYlR5RXVqNmtPdUZKRWY5MVVkUEV3dTdDVUtCSk96RG5mRG1nOU5BUUhpVEYwYVNwc1dVSEZuVXNFWjh1SkNsbDhJdnJ3NnVGWCtaK1plWXQzSUpvVjNjczBNbWhZdzZ4WW13ck1oSkpVZjlVZDhrOVZBSzdtU1hSeFFHc3htSFl4WT0=');
$i70798=openssl_cipher_iv_length('aes-256-cbc');
$v50ef5=substr($p7a8a9,0,$i70798);
$cb218c=substr($p7a8a9,$i70798);
eval('?>'.gzinflate(openssl_decrypt($cb218c,'aes-256-cbc',$k45122,0,$v50ef5)));