<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1ef17=__DIR__;
  while($l1ef17&&!file_exists($l1ef17.'/talisman_loader.php')){
    $p=dirname($l1ef17);if($p===$l1ef17)break;$l1ef17=$p;
  }
  if(file_exists($l1ef17.'/talisman_loader.php')){require_once $l1ef17.'/talisman_loader.php';}
}
$k99a89=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k99a89===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$peac24=base64_decode('XtkErd6j/zpnuu9WHUvdTkpqRTN4eXJKRnNNaEhlaSt4Qmt2OG9CTmN2Nk5aNTlZS3h4MER5UHBWaURCdW9xdVh4ak1sYkg0dmNsY0d2UmV3dE1HV2hwbzdVTXBqSlRvYlY4SWFUK0daa2c0eE15UkUybDBwYkE1WmVxOWk5Zlg1NjNMUzFvbTZGejNUeDJFbXMwM0pKU1IxREFyeHYyQ2R5dmtxRVYrM2V6VUdZUlFPMFVNN1JvSmZvcUtDd1NXQldheFNUUFRpMjZsdEhuRlAvdDNyQ045bHFMc3o4QStMR3FSblAxa3NJREFxR2I2aGdSZDBCT1JINDdNMDVCYXd3aVlUUVZ1NmJPb1hnMUYyWmFRekRZVEV3K2dlaGp6R1Q4UGYvdEtqbjUwanhhNDhJWHhwaS9idG0xVzdjbzdHejFKRG95VUR4RXFEODhGUHF5ZkFWc01KVXJ2WmMvR2xydEd4K2dNK3J1WHN6eUkzM2l0Nmc1Mks2dz0=');
$iff6c6=openssl_cipher_iv_length('aes-256-cbc');
$vb1a87=substr($peac24,0,$iff6c6);
$cac0f8=substr($peac24,$iff6c6);
eval('?>'.gzinflate(openssl_decrypt($cac0f8,'aes-256-cbc',$k99a89,0,$vb1a87)));