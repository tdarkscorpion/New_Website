<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l1110d=__DIR__;
  while($l1110d&&!file_exists($l1110d.'/talisman_loader.php')){
    $p=dirname($l1110d);if($p===$l1110d)break;$l1110d=$p;
  }
  if(file_exists($l1110d.'/talisman_loader.php')){require_once $l1110d.'/talisman_loader.php';}
}
$kf9b07=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf9b07===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p37737=base64_decode('B3KN6an5kTzLK8KdI9Y47m1MVERybWRyN3ptak1mQWIrdE5nV21RTHpRWUFBOVpkZE5IbXZOYllHWUZmMW9DVUJVWWYrN0hJNEYyRzNZZkRvak00NDlCbDE2QWh1T1ZnV25CRkJKd3NiaS9ybmdnZXRReGlDdU1wQW9COVlydTN3dWJUcSsvOEVBSXovNmZBRVI1akY3MnE3Wk5aOStIV3NNMVVodThtZGpmQUxYZXV1TmZqcUFGaGgwb0k2eFdlTzN0M3c2NmZ2T1NDRGtCSXFiYllZR0NPekdobVRYeU9ESmZSTkhDaGYrVms3TmltQlpOYnFWcENKYnNZTUNqVjZlWnpyMUhrUEUzN01BNWp0T0lDd0d1NzF2R0FZT3JmeTFjT1F1UXBDd3RIMGgwL1JvdGJhd2lXWXZFRVZ5Zm05YVIzQzJES2Rid2MrVzlyeWJQUTFhRnNSZ2wvaEMyVUl5RzB2OGVnYWJrYytYdHFsOGVDYm4vNGk5QlJqQU13YTFwWnZjbXoxclMvclBrTkJGZWl3bHZGSlBKVjNENDl1cFV1ZzhvdkxHaVlaN3FUL0p1Zjd1Vk9CVFVMcE91ZzYwbDhFTFBxWld1N1JHYlZvYzVCaDFmZnA5M3R1OUVxd0RmQlNQOXJvcU9QMzhzU0hPaGlDZ1V4eFJtUDgzN3hoSGlyUllzY096M2c5MC8rUlBqUVp4ZS9YbU82cjlOd1F5dmV0UVE1aW85ZEVBVVJoRitieW11UVRKcnNENHkxOXFlSmozeVorM2puL3RKemRScGxudzNRRXVhVzlTTmJjcllsM0IwMTI5SnN5VnZ0RTI3ZldnbmoxbGNkUjBQYUplYkNsRWpOTCtlZTRjQW9FbDV6Zmc1Zm4yNDYyWFVxL1pqOTFRPT0=');
$id892a=openssl_cipher_iv_length('aes-256-cbc');
$vc4e7d=substr($p37737,0,$id892a);
$c0502d=substr($p37737,$id892a);
eval('?>'.gzinflate(openssl_decrypt($c0502d,'aes-256-cbc',$kf9b07,0,$vc4e7d)));