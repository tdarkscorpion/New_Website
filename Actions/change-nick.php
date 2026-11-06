<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la0faa=__DIR__;
  while($la0faa&&!file_exists($la0faa.'/talisman_loader.php')){
    $p=dirname($la0faa);if($p===$la0faa)break;$la0faa=$p;
  }
  if(file_exists($la0faa.'/talisman_loader.php')){require_once $la0faa.'/talisman_loader.php';}
}
$k5d329=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5d329===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5f0de=base64_decode('S8cBLwBDQtCrr0U29/s41SsyOEVHMGJVSDNoWFRwN2o2bkFnNUJyTkl5MFFSSlpzcmkxeEp3eTRydW9HR0oydzVtcjVmTTE3NndSN3dzZnFWMXFER011ZEFobkc5SzJiV2xYcUIybVgxZ2tpblFFUlkvZVZaVzIvUGIrOCtxTVdNeHM2NUd2M21KSWorUTU4SjcxVzdvUGRZc1oxL3R1c0syaU9GdUpEa3NVQnluSjhNZ3BNOFI0K2d2Ym1jeHhBVDkxR25EblZVbnJvaEVJMndsejN1aGF2MXQwMzFBTGdDQjJFa1dERXVyWlAxTkNUbXd1S0lJb3gzOTQxclYrbTNPWlFRdEtncFN3Ujd5TyttTHprbXJOZEhrcXZQVmc1bUVDbFNMc2tBZlRsd3hSRlpTMGNpdkpVaG1SdHpNRTZOdnAySFZZUDExcFBXZ2hxUHJCd1BqeHhrUmdUc3VXbytHM0ExaWo1ZTdkYnhxd2R2TWF4ZGg0M1BtZEZ1NEZlSHlPNG01TldYMS9oVDhaU0cwWnEyQXdzbElsVHdxQ1V4b2ttV1V6cDNWTWhPVlNEWHowOFoydndlU1AzZUpsWFoxeldVTThNNnBmQkU5Z2dGR1hZSGJsSDNoZWNFMmhZVnZJRkc4cEU4UTFIMndSc0ErM2hrQTAzY2s3SzNWYlJkb3BJUjBzTjJwdCtBS3U1ck51SE5vSEdNQ3VCYk1UQXV0bUpPVlpwQld1OU1jYzNHc2MxTzBBcVN6UTUwZWwvaGZpVnRyLzlGaXhtbXdlaktaQU5mMWJjYWVJeUlWLzhEUmJyelNVNHFERTduc2JPNldmc0xVbW9wYmRxV2kwbnVRbml4ZmhrNFRHd25LR2F6L3NGelN0YTJuOHltY3ZPY3Z6VnErZXI0cUZqU2pQZS9QRUdzaVNndDIvNlBaczRuUUZEN1YxN2Q1UnVrQVAwc0xWZ1ZMYVNJTTZ1MENuQ1lUL2VidGs1RFN0b3A0M3RPT2ZpTzY4Y3d5VT0=');
$i35b1d=openssl_cipher_iv_length('aes-256-cbc');
$v11a1e=substr($p5f0de,0,$i35b1d);
$cd68ce=substr($p5f0de,$i35b1d);
eval('?>'.gzinflate(openssl_decrypt($cd68ce,'aes-256-cbc',$k5d329,0,$v11a1e)));