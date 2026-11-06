<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4b371=__DIR__;
  while($l4b371&&!file_exists($l4b371.'/talisman_loader.php')){
    $p=dirname($l4b371);if($p===$l4b371)break;$l4b371=$p;
  }
  if(file_exists($l4b371.'/talisman_loader.php')){require_once $l4b371.'/talisman_loader.php';}
}
$k493ad=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k493ad===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p0d906=base64_decode('2pJ0FkVfvBqW2WIZcqvgME1oVHVMNnF3aTR2eWhRV0syZFA4d2NaS2Z3d0JOSlNNNXZ2SjBnNVZ2TElTblhJVS8xdERyOERDRGt5R2Zjdk9ZNVJ2OUplVXFRSjF6dUxQU2VaWVBLVUdiVEZsM0ZoTFI0Y0c3SllvNjI2ckl0V1Z0c0t5TEFoZ3FjRGRKK3pscjBWejRDUDNsV05ZS1N2eW50RElWR2dMcm5EV01ic1QwMFFqaGMxMmtFUitGYlhxM3l3MUVtVzNqUzR2Vk10YmlaTVhYRG1NRmhPRkNlenU2ZFBUSEg3dWpsZGJiU0dzcDk0S1Bvd1VLTUJJUFJuUnVFeHJlckRPVnNWcFFyM2JvZW9WWnBHaXFDaGQzQ1d1WU1UT0w4UFFxaDlUQ1N1OXFHeG1VTzN4ZzM4PQ==');
$i09419=openssl_cipher_iv_length('aes-256-cbc');
$v3e28e=substr($p0d906,0,$i09419);
$c08443=substr($p0d906,$i09419);
eval('?>'.gzinflate(openssl_decrypt($c08443,'aes-256-cbc',$k493ad,0,$v3e28e)));