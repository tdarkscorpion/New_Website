<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l23202=__DIR__;
  while($l23202&&!file_exists($l23202.'/talisman_loader.php')){
    $p=dirname($l23202);if($p===$l23202)break;$l23202=$p;
  }
  if(file_exists($l23202.'/talisman_loader.php')){require_once $l23202.'/talisman_loader.php';}
}
$k6b1a7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k6b1a7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p14b39=base64_decode('hUXp+sqqPSUkW+ccEzSRcmZhMUZKTTBLYzVaVkc3WjY1SSsrZVRCbHU0QllNK0ZIaWNHQW9hcTU4Z2RoN3dLczhzWXlTREtUUnl4dDVPK3hzRHBzazUvRDlFYm0xNUY3aWdmUWZWc3NXekdDbm1vbVZvWmRsdXBvZW1HR1JBbTAyVW9OSUJNNElrYi82ZWhJUDhyc3puZXZsMDYvUEVuUDZiZmllNWxOdFNFWGJ1NC9tU1VCU2U4Z3NnMVZIYnlsT1NkZTdrVHZ3MTNEY2Vlbjd0cTkrMjhIZ1p0eHl5VTRTQ25ETHYwWHhDYTRNRk00ZTIzazNEQTMrSjVMcTZGaDJKOTFqL0FMNUdUaEVFd2RGQ2kxanAwazhTUDBsbjlONmt0dXZTSkhCWmFsUVk3QnNwa05ubEtuODExNllmbFpqUTNqL3BmT05PdVlDUmtlZWxwU0tQdjBwTWZpOHNkeDBCUnlDRXVQdHk0Zy9nNkV3TjVRdGVzUWI1amhUMGF2emtCM0ZkaGkxd0cwd0FGOTAxK3lITkNHYTBJNlV6VThNcUhnbXEwdUZMTy9yeXRpQXhXMTBiZDQrMUo1SXV6OUFXdkxnMnZqZFJtMmp6OHkwSjN3R29nU2FrZmlFajZJTEo5M1dyTUZGdEVsaXVBV3RmU0NHeFRVNHdwU3NoM25kZHo5OWhING04bWd2c24xaEVFVTNMVWlIMERVVEdqd0J4OU8vU1BaZ1Fnb29FLzgvR0txNVd5TWpMZFVYT2xCVVoySnRmKzRYWURISHdaQXkraUM2Szdzbzh4azd1eWdzcW9JQ3I5QkFHcnF5NzBnNjBleVB5MWRxU0dTZzVGMzJZK0pJZytOM0ZXWU44V3g=');
$i69d5b=openssl_cipher_iv_length('aes-256-cbc');
$vc08f2=substr($p14b39,0,$i69d5b);
$cb715f=substr($p14b39,$i69d5b);
eval('?>'.gzinflate(openssl_decrypt($cb715f,'aes-256-cbc',$k6b1a7,0,$vc08f2)));