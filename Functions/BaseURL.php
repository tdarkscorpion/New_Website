<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lecc6b=__DIR__;
  while($lecc6b&&!file_exists($lecc6b.'/talisman_loader.php')){
    $p=dirname($lecc6b);if($p===$lecc6b)break;$lecc6b=$p;
  }
  if(file_exists($lecc6b.'/talisman_loader.php')){require_once $lecc6b.'/talisman_loader.php';}
}
$kbc1e6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbc1e6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p06cd3=base64_decode('XOFu0mQ+ymYNr2glmA6F2GFpTGZmQlFQd3FBb3JJTzV4UTFTSUV6dmh2OGFZbC9sd1dQamxKa0J4dzFBdnRiY20waHBvWlB1eHVwcDJ5SitlZ1ZFSks4Z0FPbDB6NmtHT1dVa0ZJb3ZwQWpaVjZreFUxWmZJdFVLL1JWVlh2TjVOdVErN0pLNVFZNWhabkFJZDBFcis2Q0tIcFo1UTNmU0grdGQ3TjVCK2l0RjR0MURYZDd1aityVnRVYmE0bDdOQjJ5cXJJYUxWUm9oUUxSLzZWZCtDc09oZGJDbFVrUGZNRDlvZEMzVlZSaXBQU3RDTTNReXEzcUpsc0JKcHhxa29GOFpEbzk0allJMzRqYW8yaDVtTlpTaWJxdlBwSlF6d0oyWjhpa04vZmEvRExSMG1jSXQvVC9SZ2JEOXo2RE1zMFZwK0VudHJwWjFCZGR0LzdDUGlqRTByY2hoLy93c2lDNytTcTdpVlByMXNHbGdNcWo1VjdWbEMyb1luSTJxR29QblVuSEVCaU5mTnVaYWFZU2dQVjFNZHkwODVHWXcwRFFuVGF1UGNwTnVxYjl1TjFEczJwTjZUTTJlcXNOKzZGcGdVZ2s4WHY0SWtyc3EvS084cmd1WUVvNEpiZDgyc2Y3YTdUdXRzbTNJbkt0KzBtVzlmRzY3ZjA1TzBRVnNiVndELzlLVEpmUXVQRU9TaXkyaFJMZC9QMDFaeUtuT3ZOMzUxNjV1MWQyNEpOK1hFTEZoY3FmZHU2amdRK3BhRnp4UVNxNFhSZXRsWHpmaUJuZGVmMGpPYStpL25EYlVSSmVKK2JwVzdiMDc4WjFXeGhWSzlaallCK0wzVm1wT2tpM0tCbXNBMER5enB0WDc=');
$i31919=openssl_cipher_iv_length('aes-256-cbc');
$v4531b=substr($p06cd3,0,$i31919);
$cc3ab9=substr($p06cd3,$i31919);
eval('?>'.gzinflate(openssl_decrypt($cc3ab9,'aes-256-cbc',$kbc1e6,0,$v4531b)));