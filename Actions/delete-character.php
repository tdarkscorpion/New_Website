<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l752c3=__DIR__;
  while($l752c3&&!file_exists($l752c3.'/talisman_loader.php')){
    $p=dirname($l752c3);if($p===$l752c3)break;$l752c3=$p;
  }
  if(file_exists($l752c3.'/talisman_loader.php')){require_once $l752c3.'/talisman_loader.php';}
}
$k0e865=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k0e865===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe57a0=base64_decode('34dJTHmPDUXceS6kWG1QfEhYNDNGYTBtTDlhbHpDT0JzSnorbi91akN4a3Q1YmdkTytCNnd4TjNoWlBGSExqeDJndWx1WnNFaE15SXpudHFvd09iR052clFoYWRDQUVGNFdjdjNwb2ZFTmxrdlFLYXgvdXZzdEk1ekMwSHM2ZUp5Ui9Nd3pyQ1FRVmVtUzNBbTNMdHBIaSs5OW9BMWNaNStVL0Juak5VUGo5b2ptT2Z0dkFYNks1N251TkNHNnZGZTI0NTBYVW5oM09qSEU5enU2N053UVo2RDdYOUsrbUpwT3hjUUtkd3BBMEtVM3dKL2F1UHU5OUtlWExKb0JxNld3cEFaQVRXT0NsWGhCcEpHSFYydW45bU9NSFo0dGNqMHIrbkdWcHViZ1F5dm5FNGJFVDB1aFNjVjQwZVY4cTMxUUhkQS8yZHNtNlcxK282VU02U2FtUDNERCtmdWlwM1ArMjlNQ3V0T3V1NWhmZkNOcjhuVmZRUUxsNTFyZmlyTHJzb1A5eC82RHh5V1VzVTlUNXE2YU5vVGxpRENKZW1RYTN4Qlp6RVQvdGpCUndyQzZuZEwzUkZrUE9qaWVkUmMyWmU5YjVKUVlEWHd3bldBWktmbitKWnBsOVZLRHRydzJrUEpYZ3VEbFJNZHl1a1Exc1REWCtWWkRXTERHK1lzRmhybEs1d0NEQjJWS0VRc0h4Q2ZBUTdnajAxOXQ3UDZpcnFnYld6LzRVNVJpTkpJUnJ4RDZobzRvR29mUU80eG96ajYrRzJaSWlxTXU2SE5pdFFaenprdzBlbzVuSEZPYlVLMEE9PQ==');
$i574f2=openssl_cipher_iv_length('aes-256-cbc');
$v39a64=substr($pe57a0,0,$i574f2);
$cd8829=substr($pe57a0,$i574f2);
eval('?>'.gzinflate(openssl_decrypt($cd8829,'aes-256-cbc',$k0e865,0,$v39a64)));