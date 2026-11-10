<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l5e2cb=__DIR__;
  while($l5e2cb&&!file_exists($l5e2cb.'/talisman_loader.php')){
    $p=dirname($l5e2cb);if($p===$l5e2cb)break;$l5e2cb=$p;
  }
  if(file_exists($l5e2cb.'/talisman_loader.php')){require_once $l5e2cb.'/talisman_loader.php';}
}
$kc46ab=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc46ab===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd9bb4=base64_decode('0QMyFcQPKNCiXWX0/MZ/QEVBbWRIcmlYMkZQdnFodVFXRG5FeHRuRCtoM2FFNm5EazNsVDJ4VUhJZjdHeS9tRmVrMUl6dEc0aTJrUGF3U0xteVhQTzcycTVzc2d2MTlHeDVVc2pZQzZoT3lDZElWcWNBc2NYWGY0UWh3cS9BdVZIZlJ1TnJjV25ycWhrUitqcWtWSlduaTZBbHpqTHhWelpLb3gzZzJpNEhsWjRUWEh5dDF5QnlTc3lNVmNoYXFieXVrWVVkUjBGV1hzdENqeVV1eWJYR1RQMnorSzdNM1BGWmgrR2t6T0ptOGlLd09rSFlXaDM1a3kvSkxXV1VnMmlpSEd5NGNOdlYwMnZVa1FKS2ZJUmZ6aHBFQTVmNUxjdkRRVmR2UGdxclVEc3A3bGZhQi9nVXRINkRzZE8rY244ZjkxQjBvWkdmbzZmNWp6cStnV21DZEJKL2FQdnBYTTZsdFpZYURpbnJIK0gxS042bG1rRnIwZ1FpR0RLWEZ1eWpZWmxMb0xITFdXRVBQdGVjQjZhQUJtODFXaDRyMElTVy9NVFBCVko3QUxRT0NyWmRDcXhLSHR0a0l1bHJxVEphVkx5c2lHVFJUSEFYcG94ZDZrS25Nem5XTFFRclpxVmZoajBZSXdGbkZwdzZURHcwamxWTEF5SEgwNk1IZnBqdlZvcGMwNVRZWDU0L043T3I5L21xRFF6amt1NEl1QzBXeUNUbEJncUdZWnJDdUlYL1hoOHoxR1RsQWorSDg4OXh2L3I5QlJocjVzc0RTN2llMXNlVGRWMU9Ha0lqVGJiS2xPRmJKUFVKRzcrUUdONXhYSXBHOC9keVZTMWR2eC9sYzdyaUQ5cVBiNlg2eTU=');
$i989e2=openssl_cipher_iv_length('aes-256-cbc');
$vc7854=substr($pd9bb4,0,$i989e2);
$c05758=substr($pd9bb4,$i989e2);
eval('?>'.gzinflate(openssl_decrypt($c05758,'aes-256-cbc',$kc46ab,0,$vc7854)));