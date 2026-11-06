<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf29e3=__DIR__;
  while($lf29e3&&!file_exists($lf29e3.'/talisman_loader.php')){
    $p=dirname($lf29e3);if($p===$lf29e3)break;$lf29e3=$p;
  }
  if(file_exists($lf29e3.'/talisman_loader.php')){require_once $lf29e3.'/talisman_loader.php';}
}
$k6802b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6802b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1257f=base64_decode('DQXcrznngkU9YXkIIwyOMlVCeEVIcm9Db1hxclpVWFlQZHdTUWpBTFpPL3RIK3dlSnpiUHVpVTFVS3c3VDljMy9BZUQ0czgvSjVrZ1l5b01UWjFISjlsUVFzaFdOY3RHTjk3WEtidE1mNDFXTXhIVms1TnVtQ0F5Zlk3aXREY050Y01oTThldEtmcjRENW8ybXpkMGs0ZThRNzBEVm5SZDdGQ2FGcjJPM2ZISmpIVGRxVmFZWXR6Nk16ZnlPZGxPVGoyK1lRd0poY2dxVHRVRmw0dkgzLysyekhBOEZYbUpvVXZtL0lnQ1hkNE1ZWGJqWHhkcEhtckZvc0JTVVZmcUJBalYrYk9uaTNPckpZUDY3M1J4ZEZXcHZNSjVxSit5S0duOW95dEFyRmpQNU5GczloR1hrQTUxMTRyR2U2dVRnTXBYcklLNnhuZ253OUk5bEJ6SG5lSDk0SWRBdGY3cWlqOVliM0pUZ2FEZHhUR3EzUUZsSmJTcjA5NGsvS3RaU2c4THJyYk9rVnJua3Q3TzVSYzRvMVloWWJ0aGl0VHFpWW05T2lqNEVDMWhOS2J3L095TkhWVldTQkZ5NUVZVE1HaE51OGVUOWdVMXlEWVFzQVJWSzk3aElaVWtOWEtLZGc5dDhzSkJGTFlyNGRZY1NqSVRydGo3cVZ6Z3VKYXY2MWhnUU1ibFNaQytkUVFQelpacm1VbEd4b2l6Skg5aXpKZ0hjTzdhdEo4ajN0VE1vdU5mVUtxL3hiRTQ0WXVkY21GMUN3TTRNVVVnWHFudzE2MndIUEV3cDJxOGx4U243dXVRa0RpcnNFdHVlaTZDWUJaZU93TDJaMlN5UjExd3lrcVB6eFIzWWYwV0xtSklsRTBEVGk0YVN6RGVrTkF0L01KRWRBWlp6WmNuRWEyQU4rWUpNSTlhY1FpRE52Rll0SGxlTzNlNnNBNjZZM3pvSHBUZnp0L1R0TmZxNVBYdjZRNW5NcnhoUFlEQXlCK2xRaWVBL0hhcEEvdHh0U1FnQ0l1bnl4ekN4VFRZWFp2c3ByR2RyM0Zseng5TmZHNmtiNmpwN3d3TmVhTFdyKzdWSkdyYk1QVUMwcUxHSnlDblpTR3RreFV6Nys3MDVUQy9MZFcrNjhaKytnWWNQbGVWZVNYMkFBPT0=');
$i43cc9=openssl_cipher_iv_length('aes-256-cbc');
$v8b30c=substr($p1257f,0,$i43cc9);
$cebd1c=substr($p1257f,$i43cc9);
eval('?>'.gzinflate(openssl_decrypt($cebd1c,'aes-256-cbc',$k6802b,0,$v8b30c)));