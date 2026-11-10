<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la0ab6=__DIR__;
  while($la0ab6&&!file_exists($la0ab6.'/talisman_loader.php')){
    $p=dirname($la0ab6);if($p===$la0ab6)break;$la0ab6=$p;
  }
  if(file_exists($la0ab6.'/talisman_loader.php')){require_once $la0ab6.'/talisman_loader.php';}
}
$k5b6df=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5b6df===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p81152=base64_decode('yId2TcVPnnjEKvJnYNmBg1ZHVXR6a0FoSUdnWFNFRkV3ajllVHZRdGZsK0dGYkE1SUp6VWZZL2Q2WHd6TEEzK0NMZ2lVNnpMbHluQTVMYTJRUUxhQ3ZJUENCYmRVVVkrZHh4ZkdYTy96NVp5RTdmSHFqT3d5OGxiSkRyYkdKSmxDdmpQRlVtdkVJeXJ3Y29LNXh0UXZtSHRNRzkxeGpmZFNtWWVKODBxdlFxY3dTdmV1anozNHFBNllZZzdmRUhJZHZ1bm02YlkvTG5DZWo3akNVdlJTNnhERk81U0FBb25ZYit4a3JqNWozWlhJb3RWR2Z4aGFzUFNwanoxaWw3ODZjanJaRXNuMCs2ZUN1UU5jOHQzL09SbjRLWnppL2VLVWt0UTlJSDZGWG5ibUdDYmp3SmRhWk1UdDZZbG5rc0ViUlV2bkxFajUwK210OGc4T0E0TmIrcVJURXFBQWpVbHNKclpCaHk0SGdoQ1IxU2FuSVpmUVNod0ovNFMrUE9uakJqMjlGWlYydWhOb1RoZlgxbjdDdGtBNmhOTllYOXRtY0RoNTdtM3dpRG5sQzlQc1pvWTcwSXlieEpKcFNOdWNwZXpNb1RjRXd0Y1FldmpzalYwaDM5RlJkUVRhZDhtSVlwU1FiT24wTGhnZC9OSGM0SGZFc1JvVXNBWUtXTFJZdkN2VlZzeGR0cUVZTkpWZ09LN2VWeitoZGs1NGZ5d3ZGOEl0cFBIUjV3NENQYmlJN09sTWE0Nm9IZEtRcW9oTDVTTG9iTnBsaTNLT2RxZ3c0cWhLeVJxbU9BdkdPRmV6TnBUaXJ2REFLS2RKeXV5Wk9ubVpZWktQMm1aSGwxTEZXZFpRck11UlIyS2dES044TDBkaWxWclJoWCsrQWZaaHN3RHdsYzdYTDNMNkdZZ0pPaS81VDRsNkxCdVBvY2tQNTV3V0FoWkJPQTV5TWtQbzJETWxtRW04WjU1blJOZjh5OExpWnRDeGNnU1FIMVZiamtXREZ2TjFvSVY3V2lDUzg2UG1kUXJzcUtPUXoxQ01JRFRHZG1ObFNKditiRkFia0c2a2dyRWcyOUZadzRxSmgya1UrZUlrellscE5IV2xtVWNDTXlRSWIzRXJWOSs=');
$i49df1=openssl_cipher_iv_length('aes-256-cbc');
$v9ba84=substr($p81152,0,$i49df1);
$c64769=substr($p81152,$i49df1);
eval('?>'.gzinflate(openssl_decrypt($c64769,'aes-256-cbc',$k5b6df,0,$v9ba84)));