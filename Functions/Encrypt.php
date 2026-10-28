<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7e393=__DIR__;
  while($l7e393&&!file_exists($l7e393.'/talisman_loader.php')){
    $p=dirname($l7e393);if($p===$l7e393)break;$l7e393=$p;
  }
  if(file_exists($l7e393.'/talisman_loader.php')){require_once $l7e393.'/talisman_loader.php';}
}
$ke789c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke789c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p18390=base64_decode('k4DBJOxTxn6t8/3820ZPqmpvaG9lanpUZ3B0Wm92Vy9VN3B1K2JnWVdUMkhWSzFxdjA3aFEvaE9MLzNxTmdUWDkxUkFDbkZVWWYwZFNjYlI3L3krMVJ5aTRDR0RMZGRMT3V1YS8xNTdoRGc4UU15TkxpMWNjRHhDRkFyMUNzbDdDUlVCdTJnSkZLd0lxM3VDOWMrYlpsd0hyUUxVL285N2s3MUlmWlVjV3ltZlU0QjJwVzlndG8rZndpN0xmaldFNXpFenRjMUZ6eXFxSDlaNm9VL0xQck1XK2NRVVh0MVd1SStwYjJRSmRlUm1qSE5WNXY4cmtCK2JaMUxNcmt2eEFMYU1pcUQ4L2hFRXVscFU2Tmg1VGhDTC9PdUYzakxzMVhFNjVIWUZnMFg0WHE2bVdjMlM2WVFqQXBIUXRVSWpPV2F5Z29yWXVxaVlzRDN1UkVvSXU1WGJKdWlvSzBIRDhYZVd3eEJTNytmOWpZUC90N1dUQS80OHBGczFSZ1dyVlVGNFZ3RHk0NDJoazB3MjNmMFJ4OTl2Yy8xRDgwL3o4MHlHWjNmbnI0WXF3QzBPVWpxUmN4QTNwYXZkQWZDdkcvMGYwUFpIeUhLQXBwOUY=');
$ibc9d9=openssl_cipher_iv_length('aes-256-cbc');
$v1a6e8=substr($p18390,0,$ibc9d9);
$c83aff=substr($p18390,$ibc9d9);
eval('?>'.gzinflate(openssl_decrypt($c83aff,'aes-256-cbc',$ke789c,0,$v1a6e8)));