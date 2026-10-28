<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5ee94=__DIR__;
  while($l5ee94&&!file_exists($l5ee94.'/talisman_loader.php')){
    $p=dirname($l5ee94);if($p===$l5ee94)break;$l5ee94=$p;
  }
  if(file_exists($l5ee94.'/talisman_loader.php')){require_once $l5ee94.'/talisman_loader.php';}
}
$kf15db=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf15db===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdfeb5=base64_decode('LRMrReKF3FgQWnO8xKn+sGlkQUFldHZNRVJFSWJUbFhFcEpQdnZqTitaNVZRRldUTldJTGtGVUxzV2ZSVTh6c21JWG9sekxMeW1UVjNlT0JPS3RXRnVJVEdWcEFwSFZkRkUyMjF3RzV1akdOVklBZ05sZk9Ib0IvRTNveXgyZTVFWHRhR3NVc0RhdmJUbk10dE9STUxMNGc4TFI2SldqKzY1ZWpwcDJlb3JHU0cybTkwd3E5VHpPam5ldEhSVTgwZWJRMmNsbXI1NDladFY2Y0oyL3JseHpvalIwTy8xZ1A5NnIrTXFOMEh3VTJGYVJpY1E5Z1ovUEZ1R2gyUmc1aGhpWGZ3M1RZZXlUMkhHQWlWckFpWC9qUXZ2SmVrRVQwTXJxZDd3MWJlZUhEbWxJL2Z0RDlrQUZXQTYxSHhGWnYvblp0WmtXYTNBL1VaNGVCeXBBaTZYZjl3enF0VVN0UXZyN1pGOStlTUNWbnNwaGRWd3VONkxDUGR4dTRLTmNBeTEzRVZaVlNXeDBlZHBHRWNrbjBxdlRxbkJnSmZObEh6NWxBU0JPSUZMcWVFelBSVUd1ejlPNVU3aWxDdTVrcDB6cjAwdnphNzN3d291d0IzeUJObGxvbWt1c01ocHhRdlJlN2pDMG9OMXlKV01qWHdKU3lubGZlS3Q2MU5Kei9ZNTJtbElvQUdoTzN5NTg4UU5uWUsyd0MxVWRVcWNzckhsYXZoOUUvc1lNWlM4WjJHYlpYd2ZUM0hSemxWdkdXT1oxNS83VHhHMXB4d1VDa1ZPRnQ5aTN2c1IrdmVwWjFlME0wU1E9PQ==');
$i63bf6=openssl_cipher_iv_length('aes-256-cbc');
$v6028a=substr($pdfeb5,0,$i63bf6);
$c3363a=substr($pdfeb5,$i63bf6);
eval('?>'.gzinflate(openssl_decrypt($c3363a,'aes-256-cbc',$kf15db,0,$v6028a)));