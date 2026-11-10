<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l76a1d=__DIR__;
  while($l76a1d&&!file_exists($l76a1d.'/talisman_loader.php')){
    $p=dirname($l76a1d);if($p===$l76a1d)break;$l76a1d=$p;
  }
  if(file_exists($l76a1d.'/talisman_loader.php')){require_once $l76a1d.'/talisman_loader.php';}
}
$kb7a96=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb7a96===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdc745=base64_decode('6UZbqtyf1oN58eBrpq+T1GNOTW9rem00TmlEb1cyaXVzSFpiSkNGMHFCRkN0RnB1Z053a3labTRQMkhVZXZITEY4TXdiWUtZMU12MnpTOUpDVWdGRzBNTWVQSXhoWHFhdUJ6eFZhaE8rYUx1QjZ3VXQ5VHZsUUNUaVJicnJ1YXhjODhsT1NFaUV3dUs5NWpPMzViVXJKcldWdkhKZlZxeENuaHFiT3NGYVBwbnVpYnBtcklRSWFkV2NnZ3lQZjhvWnlWb1QyL1RocnlqbGJFbElXdmc1L0tCTlhUaktFVFVrSXVPSEQ2Qld2ZkZiTWcvQktDeWZnRGYxRkFRSC8xaytQWVp0eVpUV2lYYzkyWHdqN2NCaG1RcHhoZjhFeVpTV0hzbkhaYStPTU84OGNpUW1VcHIzNkVRNWdIcDlkSkMwY0N2eVR0dUJiUVRmS2docy8zekEvMFpkRG90TzdpZnhnSmEzenlqamNkUDhOYU5icE5EY053cTl6SVFKVi9wTGczTjBIakxBdmpTN2NYeG54WHBodHdmNndWR3ZPdkpZRkhPbmliZUMwbUp4bWcvNEpPdWpMa0FXTS9TT0U0ZWFiVHRGZXhKYk5ST1M5MHYwZEFySXg2d2l2NHduZnJmY2loTnRDc052VUNLNTRZSkJ4TCs0Vi9TSnAzRTJ5RVdGTG9QbGRNMkJCNVhSaWxNNEM4OStwaE55SDd0N3pOV20yNHM1UTZJZ2dyQ2xWU3JWb29lbkZ3UjBiRzBKR2d6aFkzRHFVRDMwZVQrZUltTXdkNzdHTng1eUF3SStkTmk3ZjVaL3BTVnhteG1Ib1R4cUtraHlSM0lEa040cVBpTzl1Z2RoYXpMdzJMa1QvTWs=');
$ie2b86=openssl_cipher_iv_length('aes-256-cbc');
$ve3564=substr($pdc745,0,$ie2b86);
$c1baa5=substr($pdc745,$ie2b86);
eval('?>'.gzinflate(openssl_decrypt($c1baa5,'aes-256-cbc',$kb7a96,0,$ve3564)));