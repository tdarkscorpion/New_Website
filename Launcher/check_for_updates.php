<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $leabcd=__DIR__;
  while($leabcd&&!file_exists($leabcd.'/talisman_loader.php')){
    $p=dirname($leabcd);if($p===$leabcd)break;$leabcd=$p;
  }
  if(file_exists($leabcd.'/talisman_loader.php')){require_once $leabcd.'/talisman_loader.php';}
}
$kbedcb=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbedcb===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p810e7=base64_decode('FTcayg6M/TVF5hwYGlGgWVJGUnNWY256NTV6dG0wYUZHbjhoQUpvMHVMbFYxc1cvMEt3UFB3U2djemdjRTc1ZmpQK2Q3aEpTeUI1OUtOd09MSVlvbFZ1blZYai9QWmQrekhmZytnUmF3d3k3TUtldWJScVdUWDFkcEVFZHlVbXgrWExzVnljSDVGYnp2ZGxzanVSTm5FMURLYjVoNStxbUh4L0VSTkdVbUJueFhJVG1FTU81ZFVINVZURXA5NUJjWkZyWmtDSVhwTWNQTHpvOEl4VFBoR0lyRGxxZEZ2NGxUNG5WOEtRRzVBc242TlNHOTdCK0pnRlNVVWNDRFAzK242WVJCdm9wSkttcERLd2FUaVFvTERJSXNia1NnMlNOYjJFTUVFNGlPYlNhYlhxZTdLSXhnMTdQL1RYZVQ3azlmeE52dTRRZkZSY25jU2FDdlVPdEwybDlIU0dveWU4UXV3aDNlZm16SmNUZzFnMWFaWm9qcG5pVk5zN25FUmdWLzNoMytoRElRQTl4QjliaU80ZDRuNm54RjhwRCtvZkRyUFVqNjFFdG5iM2Y2UHlSSHBHbGw4NURSTUxjVmVkSkJoaGZlYW0xLy9jUlk0ZkJvQTNEbWtwd2JrcU5sNERIYVhkb2w1aFlsVFBBcktvN0JXZTBlekVCL0NYcHNMS2ovN1RXV1RoTEMwYlR2U1lGNzdPSWd1NjdFUitKaDZ6SFFTRHZRWStuaFNBbjZqcGphUFFYMXBoZitiZHUrQ0F5K2dGOVFHcktrd0VZTWZTZmhyWlRaMDZsSFRQVjRJM3RxcGI5WElmTDBKUDF0eG5lbmtJbmhJVTVLVWhpbVJFTkRjK285eWhrbEMvR0twZHY3cjY4Ujd3S1IwZU12enh2NlcvK0Zab1ZvME4zTW1WSzhPQXd4bFUrSC9CdnRYUzdQK0ZzYm1VNXUwUWRLREtYc2luajJNTXhDcVYyUnNCaTJHNkdsVGI4Mk0vM0l1RWRJRnNVMldVVWdZZ28xODVEdmVlNEU1T2JmdFhUaUVNOGt4Y01hZysvT2lyQXBoV0h2cUR6ZDJoOGMyQ2VxSFRGdDV0U0pUbmJTeTZNOXVWNUpDaW5WTWdDL0pXVmUxUStORmpJZTJQSjA1WnVCTjJQY1ZqTzdBPT0=');
$i29edc=openssl_cipher_iv_length('aes-256-cbc');
$v8e2a0=substr($p810e7,0,$i29edc);
$c62f88=substr($p810e7,$i29edc);
eval('?>'.gzinflate(openssl_decrypt($c62f88,'aes-256-cbc',$kbedcb,0,$v8e2a0)));