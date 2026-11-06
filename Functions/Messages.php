<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lddf7a=__DIR__;
  while($lddf7a&&!file_exists($lddf7a.'/talisman_loader.php')){
    $p=dirname($lddf7a);if($p===$lddf7a)break;$lddf7a=$p;
  }
  if(file_exists($lddf7a.'/talisman_loader.php')){require_once $lddf7a.'/talisman_loader.php';}
}
$k01095=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k01095===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p486e5=base64_decode('TK/wcL8VNy7h/ad2N+EwgHdoeVBORmdFZ3RIS3lrU0xwSHJycTg0SUNqQmMwUENaeGhFeUJiR1hteEFMRVlybkNiOVBLZVp0N1E5bGFZWUJ3QlU5eS9oSEN6NmdSeDhyb2JQK0VoWEYrUTRqeTFQbFcxNUo0Z2I4aWt1eDdGc3RlSGwyS254RFFKVlYwZDVvQWc5MllzM2hBS1lpV1NxMy9QbWJrRGo0Y1phWWhOS0FFVHNNb3VPWU9sV2gxaHl2RFRXazA3VXBvM3lOZ0IxMFF2TzhMRlVYcDVueHJlekVtWmJ3dnNDT2gzVTAxYkROa0tHeGtmOVB4VWdDTTFHQ2NqTlNXaFJFODg2RUY1Z3JUSkRkam1jTHYxTFdQcW1SYWU1SkFPZDJWeHZrNGlGU1diTk1lV3ArdmVjPQ==');
$i297c7=openssl_cipher_iv_length('aes-256-cbc');
$vd92e4=substr($p486e5,0,$i297c7);
$cdb50e=substr($p486e5,$i297c7);
eval('?>'.gzinflate(openssl_decrypt($cdb50e,'aes-256-cbc',$k01095,0,$vd92e4)));