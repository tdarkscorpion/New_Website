<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lad024=__DIR__;
  while($lad024&&!file_exists($lad024.'/talisman_loader.php')){
    $p=dirname($lad024);if($p===$lad024)break;$lad024=$p;
  }
  if(file_exists($lad024.'/talisman_loader.php')){require_once $lad024.'/talisman_loader.php';}
}
$k48eb4=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k48eb4===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p11ebe=base64_decode('3RjUzuO3FPWdM0Aj63TGgGZHVkV0VmJrR0t5SlY2eTQxLzEwVS9jb1hBL3RicEYweXdjYnFYNlNDcnlkZSsvSnVtd0lYZS9WVGFXVUZZdFkxZmxRYkZURWVFbWNFY0JsNVhkS21Ub3JJV3dPQ2Voc0Z3dUp2U0xOZkFSSmgyRHNnNTBqMGh4bVJ3dDljRVF2Y2plRkhoanJCNklTdGZSaWI1VThiOWVaQUJ5WWxkbVNFM1dDM2Q1U0xtM1I1VERmc0J1SDhyY0Y1V3BROUxVcFZ3SU9HTHdneVlvM1k0UGlweHI5SitsVnc0SjlNL2I5a1lXdEw5bVpxbXhDV1NkKzR1MXN2ano5c2JxQ2E1MldlMnpsUHFINi94Y1FvS0hiSTdxbzNIR1VzSXk2MkloTElNdk5SZzdBREhtTGM5K3EwKzljaTluL3kvb1YwRDg0Y1RJdFUzUFNqUTQvQzk5dHMrWlFKYWZSdGk2bTZWMUlSTDE3bUhaTDFOV095N1dlQmhiTXkzYUpUd1hRVFpScFZXeFErWEx6QytSQVVYYXRFZ1NjN1puU2s3akpTanZXam9RNTA1akFxaWxITFBRRmIwU2xZcDczbjFOYlRXYmpESWN5aUlwNmhPNi9UT2l4R1dXUmdhOWsvMVd4VzhwMithZ3dyd2Jpc3hFVFEyMUpnTXA4eVpLbDVGaWJFeTFpcmxrck9FdmpjdXUwK3k3RVBXYXloVjBlay9ta1d4cG90QzkwQ2hPb1BtV1pSK2xCZWk4enFDbkp0SFI0RmV0d1dITE9Hb0FHWFhML0dKbWVGM0E1NUdLZy9RbVg4ZlgrSUxqbXBuV05ka2lqbmZQV0NjOWkxUXVsUGJpVmhTTGg3Qi9SK3VUS29TWUlCZzF1Q3J4SWRLTzJsVWZBL29neGp6NFJ4eldtS2sxcHlwQmN1b3ZjQlBOb04rWmdEVDlTdENaaTBiSkVMVkNGMDBmSnZMdWUvNVc4cEtvcmxBclRmMmdmWFNLNzBQdWVYNUNPRHY4V1VvY3ZoVGVnQTJZMzdLbUp4b2NJRVRQREJoMGJtaGZodmFHeWhpNkgwOUlmNDZSV2lHUDFaUGdWbGJaZWZKQXEvay9EY0M0U3F2M0kyellpQllxR3d5R3ZCM1E4RjRtM2NzNW1ibisrZDlrUThSQzk0MVBZYUlvMWV4NXNOZnJ3K3N2aHpoOWNNVG1sazZ3SmxjVmZ4ajJINXppdXd3Q3lYUT09');
$iff046=openssl_cipher_iv_length('aes-256-cbc');
$v78f37=substr($p11ebe,0,$iff046);
$c3d977=substr($p11ebe,$iff046);
eval('?>'.gzinflate(openssl_decrypt($c3d977,'aes-256-cbc',$k48eb4,0,$v78f37)));