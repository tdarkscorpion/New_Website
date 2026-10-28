<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0df85=__DIR__;
  while($l0df85&&!file_exists($l0df85.'/talisman_loader.php')){
    $p=dirname($l0df85);if($p===$l0df85)break;$l0df85=$p;
  }
  if(file_exists($l0df85.'/talisman_loader.php')){require_once $l0df85.'/talisman_loader.php';}
}
$k3b771=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3b771===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p4c220=base64_decode('nJXYtRepECuiHKKu8VD0tXVMaG5ZZldHS1NSQ0Iva1ZYa3gzenNNR0FnOEo3VDNMM3U1K2t0eC9nbWN5eEl3UW0zV2dtbTgyTXlXUGVOL0hhOUVKK0pTeGVMSndrSUVTc09zZFZ2cFJFeWtVa3diWUxOT1I5U1JSbkd5WXdDM0g3cnFJK3FjVEt3VEVxVmMyV2RaeGtyL2x0bUVKMUFyQk1oSGZjcUY3eHg2VXhkVVNwVDRQVStzcXNYWDM0cWxyaGxkZThoQ1pJSVloNXczZ2M1dUhvcjBvV1hMNHJYbzhOMGY0TVRJaXk0cnBMajJvTnNEb0tER1EraE9Odmk1VHV3amEvME9uZEFHb0toc1pJUDFoM1Fvc1hDNk9tbHU2d0dJSUpTR0tTYVBLK0V4M3I0SkFkbGUwTWl1bjZhNHNoOWtRNFNEWGVUSERMYlVXTmdYdUFVZUdLbVV1YTNJSCtPSjdDQkJRUGt6bGM4QmtBKzVwYnZPTDJ2cDVFdDNIaUF6ZlcyL2NjUFVOOCtxY2ZHZS8rY09tdVVwRmx5ODRscXZhT0Yvcy8xV0M4OTZvam5iaXlyS3EraUgvWEVoMG9sdmxrK1BlbjNQaDRPcjBlb0xVYVYwUnNTdkM3TlQwalRsdHp6NTJEb21oL3ViODZ3b3F4eUhKNHU5bVF3MC9xKzN5L2dDNC9Pd3pYZnhJNkZNekhwL3lPQ3hLK2FmbUxVU1ZnMHJlejJFSEtoNWh2WFVVbVdjOEpVa1RTQVhoL2V3WGdvVmd5NDhzL3F3SXdURWRTdUdaM0xKYVZZaEZBZzA0Zkk3ZnY1Rzl4UDEzUyt4Vnk3TkNPMWdlYUFjdXZGUXpZenpjV1h2b0E3TUw=');
$i04fdc=openssl_cipher_iv_length('aes-256-cbc');
$vfa6e9=substr($p4c220,0,$i04fdc);
$c51efc=substr($p4c220,$i04fdc);
eval('?>'.gzinflate(openssl_decrypt($c51efc,'aes-256-cbc',$k3b771,0,$vfa6e9)));