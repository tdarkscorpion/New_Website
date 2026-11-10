<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb299a=__DIR__;
  while($lb299a&&!file_exists($lb299a.'/talisman_loader.php')){
    $p=dirname($lb299a);if($p===$lb299a)break;$lb299a=$p;
  }
  if(file_exists($lb299a.'/talisman_loader.php')){require_once $lb299a.'/talisman_loader.php';}
}
$k80a2c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k80a2c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pbcaa7=base64_decode('J6y9RaL0GNVE+BjaKmbRymV4OFY1OTVnaEVOcmxzV0ZtUlhLR0pBWGUxVnhxN3N3Q3cyVHM1UDljTVB5MnhxcHBzMUtjeGFBdFpkOE1wd2VYSVJEd3BIK0JIZVYrQm4vNzhYZVp4Zi9UdFE2QkVtQ3BENG4yNU9NK1Z4SEJBak1mQjU3bFdxMllmUlkzRmNFbzJuQkJNaXhzaTVrc3dFZ3BoK2ZJSjJUNUlMS2JsNWdFTHlXSzZadW0vKzkzZVl0SUt2V0Z5cEdYUjNrMmVaWFVYOHU2em9xalZYM0d4SDVuQWMrb3NwTTh6TCtTb01FaW5zREdKWjU1NktubytKWXlnU2tMZEE5SEVROVdLMmZHRFlUS0VIc1pVRkQ5UkZ3cGlZUTVmQjNKM2kydlhwUThNazZQTmRUSFJqdDlCZzY1SCt3RWJrOWFady9YYTR0QnpHaEZvb2pBRjhacnVWTUZTeUU5VFdpZ3V6QVlKN0VQZUdiRENveHlQYzl2aWh4eFFsVVFWWlZXdUpHT3R3a0Q4VUdqeW0xbGtuT3h3SG0yTVdjbWJaK2JiK0Q3QitVTU1DVEV0eVlmdzBaUmtxMzF1NDlLVmdUeWxrZTVMZHh4a1RsUkNxbk9ob3hhMUFxNmtJeTJ2NCt5bFduSVNBWXZtUnNwdnF1Q05jVWpqTFdKbWNHZXBGbElDc3RBNmlEMFlnRmMxdGNubVpPbC81SktiWXFsY01EcU5UQ2JYdE9FSU5qWU91d3lLSFZFeGRtMTRweUN6L285UUNKU0poT0RsN3BUa1Q3L2I1SDc4UmlkOXhERkE9PQ==');
$ieb000=openssl_cipher_iv_length('aes-256-cbc');
$v95b50=substr($pbcaa7,0,$ieb000);
$c0645e=substr($pbcaa7,$ieb000);
eval('?>'.gzinflate(openssl_decrypt($c0645e,'aes-256-cbc',$k80a2c,0,$v95b50)));