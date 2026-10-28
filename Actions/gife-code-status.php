<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le7037=__DIR__;
  while($le7037&&!file_exists($le7037.'/talisman_loader.php')){
    $p=dirname($le7037);if($p===$le7037)break;$le7037=$p;
  }
  if(file_exists($le7037.'/talisman_loader.php')){require_once $le7037.'/talisman_loader.php';}
}
$k50d40=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k50d40===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p5fdfe=base64_decode('XdKKppl1S7VJYykxTefkNzlJVTRXWDhQK1o3T3lxYVAyK3RlRURoejJzUGs3UTFzdU1JS05NUUlpWnhkTTNmbUFlYnp1S3ZOanl1MG1jalVubEJoWTVtUURpS1ZPOVloYTlYZThyblRSd0tTL0gxQTVIbUthcjdkdEVBaEh1dGNnV2V2MkxzSWErTHJnNWk4NEZMZGI0SFdVZUcrekN0ZVBQL2Nzb1NuN3NmaHBxY1o0WGZkaUR6a29zb2RNNU5CTmR1L3J0ZC9jYXdqZzJ6QXRIZi96czl0L2NiSTRyNy9nR3Bqbk1RSnZoYklaOTY4UTJ3eEQ2WlJaMm9FbUQ5cmlJZzR0SG5jSU5BZVBYOEFFSFU5bnFaTUdLS0ZVL2V2d3RxWWZONUxwdFNSTWdIYnNxb0o5UEgyUHFxd014aEtLdkxOc0VUWmc3Wm5Ec3E5TVBGdzBYbjhsOHJDWHBiUUtiN2NSOUVNVVR4d2tFRERreURNaldjTFUxQmhRSXlIdklIdU1ubWpENzZNb0RSWlhPK3BNVTEycDJqc2ttNTJJWm1tQ1E5dnNhSEIrQ0JoL0pwSGdaZzh1akJrOWpGOU9hZXhLbDcxTC9Ubm14bHg4TEpaamlWUEFiWUpreGdha1RiY3JrSXMybER0bSt0NE5FSW5rQnpPSnpKdGJybGdlWjJrUEZxcUt0eUxmNndWYWlSN2I1RXkxUVBJUDRFNDI1QWNHT25heVo0Smc2MTFsUk02WmZJc0ZyTHExMGhOcTVaSVN5Q04wVTVDV0xqSGtEVG13dm9rQkl3bmxpVDVDTEtJbzhwRUpxQ1JtZUFyTW44RkhBdVYzVjNPekQ3MzNwMm5vbXNYQ0VnaFZkQ20=');
$i181ed=openssl_cipher_iv_length('aes-256-cbc');
$veda2a=substr($p5fdfe,0,$i181ed);
$c3a9fa=substr($p5fdfe,$i181ed);
eval('?>'.gzinflate(openssl_decrypt($c3a9fa,'aes-256-cbc',$k50d40,0,$veda2a)));