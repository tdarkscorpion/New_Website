<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l7e2a6=__DIR__;
  while($l7e2a6&&!file_exists($l7e2a6.'/talisman_loader.php')){
    $p=dirname($l7e2a6);if($p===$l7e2a6)break;$l7e2a6=$p;
  }
  if(file_exists($l7e2a6.'/talisman_loader.php')){require_once $l7e2a6.'/talisman_loader.php';}
}
$kbd83c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbd83c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p72ecc=base64_decode('7YesniECuuhsnJQBELUcbU1IVUZ4U2ZzU2NnbCt1MkFCeER0OVpLaXpTK01PT0xPbjN0emlGRzVjYnozUVkvZUJBaE40a0FwZGd3S0ZJaTVWYllzNVVwdDlpcHdacVlza2UxbG13YVRSUXFtQWVrZGg0RlVwNnZQMVFERkR3eTNydzN1NzFZNC9FRlh3bTRBTzdvaGFadEc3U2RLd2Fabi84cm5RUVBFTjJJL2t0blRmYi9wMjFwWHhXYmtwenE1a2RMMGRjVlNTMUI4ZmdoTG4xdndSTjdnbXY3K0h1bm9pNkRvVGtmWEFOcHVLdEcwYjc3MXEzOXN6NkxZeFZIdUU0cU5LZXZTRlJVZVNtUkhKZ1YwM2l0VTdhQ1o3MzMzVVVjWktTdythaGhhREZDRC9lZXJ4d05SRGpZSEdFY3dkRnZGR0JNQmtXcU5SZFh1QmR5QkhOeXMwcWtDKzM5WGJSN2RnWFRFUXdLbzZxenlRejg4NXhBdGZhbmo5MmI0Zk1oeXhGc0QyWHFrYjQrMlI2Nm1BaDZVMlZ6Tll3ejFoR0tBMGxoMk1JZWR6N2dMMFdOYzBtYnNyYnJKQUNacG5XN3BJRnB1SzRPUDdyY0FVblpUeWhUR2Z0c0tzUVZ5SW96OG4wOWYzUkFnRXZDcHdBb24zNE9ZaXdLa2ZFU0M2WG01MzZGU2ZsREJUVkhDNm83TGwrLzRiUkZLRXFtNTRQYkRoNTZlWHJ3VVd4SmI2eFIzWjE4MTNnRnRuZm0xODlaNHBOd3gwWGFQS0tzNDFDRC9xUk1EYVVVTzdSTlQ1WGVta1hWMzY5bmpuMFlqQyt6YWVDdXlpZkFwTExucDJVUTFEeHhwTVdOL0xIOGVkb1YzVndabEtuWUNCQklKWWxYUjYyczlqYjZXN0Nhek13Q002MkNUM2UxSThRMnkyMEUwelVVL2dXYnpLZWREMm5nSVpvNFNTaHZvbTZEbTZnUFZ3NzVaZE40bGtsQnM3MTZNWHdVTWdvTGlxSDF1RTlrQllxczN5OHhBemxVRDhPYmx6M0YyMjhURmlJc1VNLzh0ZTE1anpFVFhKOTBhRFdqRFRiOWVGQS9lZmtJeVBHenBISUx0N1BuMDlabTc=');
$i69473=openssl_cipher_iv_length('aes-256-cbc');
$v04e53=substr($p72ecc,0,$i69473);
$c94760=substr($p72ecc,$i69473);
eval('?>'.gzinflate(openssl_decrypt($c94760,'aes-256-cbc',$kbd83c,0,$v04e53)));