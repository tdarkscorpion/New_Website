<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l463a5=__DIR__;
  while($l463a5&&!file_exists($l463a5.'/talisman_loader.php')){
    $p=dirname($l463a5);if($p===$l463a5)break;$l463a5=$p;
  }
  if(file_exists($l463a5.'/talisman_loader.php')){require_once $l463a5.'/talisman_loader.php';}
}
$k3b3ea=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k3b3ea===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc0da0=base64_decode('oh4ll1u9Dzjy2uvK036mLGliRE9GT0ZmUlVZbjVNMVhaajdCNTZXZXM2d1NuZFE0YmtsTGRhTjRhdjNCcCtmOUJYZDM3WlBvVGhSQzM2OC82S2p5Q0kybEtIZ2h5RCtqNjhZQXl4WGxFOU1nNGtkUVRCZTdRcjBvaGRNYXJNb3hiYnpUSEhzcHdxU3ZyV2kvOUd3M0hJOEI1and5N1dKU1Y4NkJCRW5VU0JzNGwrT1RuTEV1KzREZGFvSkg4c0wyNmpzMnVhcWthVnltVXNiaFdyMVh1K1VOaitRQVdZYndZck5PNThGakd4NHdpSWppMit3dWVYdC84bUxud3UyQThFb0s3elM4T1hKSnZEK0tqVllHVUYwdy9ySEEzZFF5czdFMEc1ZVJVcERjcC9TSnZYaG5acCtETVMvdmVtbmVLRktVbmZKelRITDdiTGZXR25SaG9MWm50WDBwMHlIYi9DUWc1VDhJQXdOVElVczA3MlRzV2lEaTF4bjBId0VEYkEvNUtDR1BqczlKYkZrT1IwS3c5bVJWQWVuUmx1UzduNWZXeW9MUGl5TktSbDNxNGxIV2pheTFKZzM5QXpBM0JSUUZ4NlVUcThZUm84U1pJUkx6Y09qWXRyNklacDVxK1AyQlFINmorcVY4SEM0dmY3bFJDY3o2NWR1Z0FId21HQW9Xc2dlaEVWSUJIOWR6');
$ib66fa=openssl_cipher_iv_length('aes-256-cbc');
$vd5622=substr($pc0da0,0,$ib66fa);
$c41c3e=substr($pc0da0,$ib66fa);
eval('?>'.gzinflate(openssl_decrypt($c41c3e,'aes-256-cbc',$k3b3ea,0,$vd5622)));