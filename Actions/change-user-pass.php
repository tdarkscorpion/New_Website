<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l39ea2=__DIR__;
  while($l39ea2&&!file_exists($l39ea2.'/talisman_loader.php')){
    $p=dirname($l39ea2);if($p===$l39ea2)break;$l39ea2=$p;
  }
  if(file_exists($l39ea2.'/talisman_loader.php')){require_once $l39ea2.'/talisman_loader.php';}
}
$k4ed2c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4ed2c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb5bfa=base64_decode('GY+owH5Yyky3IdrEXlvbdXE2Z2J5UTIwSU1uNDM1OVp0b0tyQ1gxZXR3V3pyaHdySTMzZHBUV1pxWGdjZFQyNDhjditHWThFbllMOUhkcHdkRnRLN1J0VXZoa3JaMHFIM3FYQys1NEFQb0Q1ZGVCV1NEZmMrWmxKbnBFSkwzaVpDZkVCaTlrTngrQzlPWWluK2RCYzVtdlFIcjJFVE1ibEJCNFNOaHpEeWErSXBSNnJ0VE9YcVgwbWs2VlM4bXJTL01wb1dHS0Z4blZrcCtoR09LTExwb25aSFd5M2wzSkFFL0FZc25sTkg1SlJkcDU1YnJHSjhyMFBqZ01QQmVZMnFsMFVrNmtiQnA5QTdVakR1UXJNcGJldDNwdDVFd25oRTY5WW1HWnBJVnFVL1p0eEJmbW43ZVE5VUM4UGd1NHJIMHhjdjNnd0JmT2pTVTZlTUhUanpkTUtwVFRzODF2RXY0aytFSWNwZDBhUDZNMm9xenYrRjNyTXhtMDA2R0p3bU9Zelo5Z2FLNmNtK0wvTTA4alBZMHBmQk1rcmZVRytkbGlHdDRHVXJCaHRUM0VKUUVkTUZVbER3WXZiRlczVlZQVEdYL1h2c1ozRlgyTFJDcVlXaDlrdEdxVEI2SXhVc1ZrMm5DRForVkJPSkkxdGl2RDRtUTBEMWVXYzVrM1QweWdFOHlXM1U4M2ZGcFVFQzNKUUM0TDR0RnBZSjlzU3RGVklUVUNJSzVOU2w4VlNXL2JIZHJTT2hZZkxINXNyRVFkeTVaUnIrSUhkZWhYcTN3N2hoaEJ4M1Yyb1A0VU9INEdmbzZTUnZ3NXFsTTlrbzUzTGFOdG5NM1hnTHNOYXBGd1NETXBKU0JpdlF0SjV2V3ZZaVRpZlo5VFR6ZzVyS1RJckFieDBvM0NRWXp4Z2Vqd2EyR1BHL1c2dU1xRW9OUlFDTVAxaHJsUmVsM2s2YjRSRWFETzcveXd5YTdTNUx2dVlrOTBKdDBoWmRVYys5K3pMcEhhY29mVUt5cXcrMDVKOENydmN3R0FzQm9ZTGQyL3pCK3RsaHJNVVVZRHVUZDljWmdMNU5UYlJmcXRoaTNDam5YVUc3clZiUGUvaCtUY1VCdGhNeGN2SnppUTdqbGgrN2liQVRpMVJnVnBVMTN0aEg4a3VmQ0JEb1hDWUJaRmtWV3lGRHZyazZZR1prSjFneXAzbFZGNEZNNEFQMEtqeStJbVpSYzhmNUZjZEpZNzFHa2d4KzY3SG5TNEpRYUpSWEpJcnN5cCtEd0ZNajVwKzM0cDFjZ2ROSlRmYg==');
$i3f93e=openssl_cipher_iv_length('aes-256-cbc');
$v5165a=substr($pb5bfa,0,$i3f93e);
$cddc87=substr($pb5bfa,$i3f93e);
eval('?>'.gzinflate(openssl_decrypt($cddc87,'aes-256-cbc',$k4ed2c,0,$v5165a)));