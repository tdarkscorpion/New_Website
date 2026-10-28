<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l87a84=__DIR__;
  while($l87a84&&!file_exists($l87a84.'/talisman_loader.php')){
    $p=dirname($l87a84);if($p===$l87a84)break;$l87a84=$p;
  }
  if(file_exists($l87a84.'/talisman_loader.php')){require_once $l87a84.'/talisman_loader.php';}
}
$k92482=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k92482===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p2fee4=base64_decode('dyshUuBg16Utk7mah64IZXNTQlRyUmlvVzVVWnFaeGVuM0hQVWhiSTR5U2dWSXp1WFByYjUwcG5veTBnakNNNW5vNTNRQmp3b0ppQnAydUJRQ2cxMHBCUTZKRkM0WXBZUEZYYTNOTGp0MlhJT1Mzak8rZndqK0ZleHpwSWxDQ0ZtcDFSU0JZekVGcTZicUJjTGxoUlBuelV0ZWlzMGNZSVJvM1d0UnppM25xN2NCVFdQc3V2RFBWMUpCblVHTGFJcVkweGkxTFQwM0xMOTNBTm9hQmhkNkdPNW03T29Wdy8zSVFBOW9IT0preTVQb2NsYWVKem5PanlXaktHa01USEgxcGF0c0krWEhKUUVOeEEyU1FoRWZ0ZEx3bHdURWdLTnlKK2laNjhpdkRMYlByM1A0VUc1UTZ4OG0ySm85Szh5a1YxamxjRmFOL1lQY1FpQjdjdmMzTEdQRzVabnZaRk9kQy9MWUJ2b0F3WVF4QmxTTGhCbVFkN292TjRnMStoVXA4R2hHcVordVFFTnBtdzQzNTNnN1kxY2lIbkRFQllQVjB1T1FEYnlndXpMS3h5L3ZXSFFGeHlZcTExRUxRRVk4VnZWODloaVdLNXBvWnh1cGR5UVhHNkJXUm5pTEJzS2pjMFlxWTYwN2ErSVpwN1Q4cGFFUjZvcUxrOUNiVWFVM2c4TVp2aHYwOVZ2NUsvSmZPNHRtdy9PMGlSeVlzcHp6dktXcHRIVGpIUXhITEIzU25HakhJN3dmM2w5V0RyVDJ3bkVKZUxoUzdYSElPQlRzWXVUZzU0cEsySktFelc5TVlkcFlxdkIyZlBFc1lCQ2FkWVBBVDhFMkJ0eE0zcWdiRnZVTXVXalZFZnJzZE13NzBYemgvcGRTTEtBUG4rREc1YmVKVVpzNW8yVmN6Y1hqWUlud2p2UzVMczIwNVVrNmQvNWlCRk9sYmUrRjk3Wjc5QzB1YnRVR1hMOFNaMHZMK1Uxc3lTYTVQVjdxeGVpRkEwakxBWXR5bz0=');
$i352b4=openssl_cipher_iv_length('aes-256-cbc');
$v6eee3=substr($p2fee4,0,$i352b4);
$c3f16c=substr($p2fee4,$i352b4);
eval('?>'.gzinflate(openssl_decrypt($c3f16c,'aes-256-cbc',$k92482,0,$v6eee3)));