<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la5231=__DIR__;
  while($la5231&&!file_exists($la5231.'/talisman_loader.php')){
    $p=dirname($la5231);if($p===$la5231)break;$la5231=$p;
  }
  if(file_exists($la5231.'/talisman_loader.php')){require_once $la5231.'/talisman_loader.php';}
}
$k7643d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k7643d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p2ed02=base64_decode('4MuOI0q7nDXx1ULHyKxEFVZOUU1xOEo2WEFoMEFNTjFzVFhVS0ZzeHRHNC9uV2JVZXhYNnh4Q3dJVlJPOXJtRTJGSzQ0Q3MwQ2tXa0FQYlFURWRiRTRTQ2Y5Wi9JYzRUR3pIRy9TR0ZQcFJVSWdFZGQyZTFBSFlPRmdZMDV5M0VLWG5sbmZNc1JwSC8zNXRLWnhFbDU2UjFZci9nQ2lnKytTck9XQVFXeXp2SSthL2RSd2J6NTZZZWExK0pldjdDNXJtdk1OM2NRSXZTNnpOK29YRUhEZFNrWndvMHpnbEdMUlM2Qjc4YldLditva25hTVgrV2FwaWRzTUZjK29ZdEVsS2ZpVkRYdTFpa1dlcHFNYUtUNW93aFJjMjNzSXBsaCtQUnZyRm1KM21uZ2l3Z2o4NmUzbGdEbGVmZnhpVTBWcm5VVDBwOEtmQ0RCMGs3Nk1wa1I5dTF5V1VadVVoaXlVQ0IxL1BRbmRJZTd3TEFERXF1M2dSbThtdjlraU1EQUhiYkRTaTFjNnJQTWdyQUlyZzRZR3N2aWRVN0dMNVFyWVNEL0tMMThxQUJnR3hyNG5UNUtFOXhSZW5sdkx0YU12bWZJbmdKY0FGQ2xoWlFLMUdmYzc5TFR1ZE50cjI4bEVTNXJZZ3MvSzkzbjhydUJTRUx2T05ZaGJOaEE0UGtMb3oxS1FZUVRlNEs4QkJTbVRYVHVocCtFbGdHUkZ0VjFtSEplYWwwRlFRSkhBR0RWRTQ4YWlWWGlRc0VLakszUVZIVUJVRlZVTzNvTDRuSDljMS9hZ3Fpa0s4eWcvd09BSWhkNXc9PQ==');
$i96914=openssl_cipher_iv_length('aes-256-cbc');
$v98ecc=substr($p2ed02,0,$i96914);
$ca1ce1=substr($p2ed02,$i96914);
eval('?>'.gzinflate(openssl_decrypt($ca1ce1,'aes-256-cbc',$k7643d,0,$v98ecc)));