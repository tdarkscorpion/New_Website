<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8d748=__DIR__;
  while($l8d748&&!file_exists($l8d748.'/talisman_loader.php')){
    $p=dirname($l8d748);if($p===$l8d748)break;$l8d748=$p;
  }
  if(file_exists($l8d748.'/talisman_loader.php')){require_once $l8d748.'/talisman_loader.php';}
}
$kc10cd=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc10cd===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf1330=base64_decode('z/G6bjKfxnQbECu7sx844EgzNUZrcXNwcFo0NW1PU2I3RlkwYjllVVhYNkhVejB3cklpMTdSWGVnUWpDWGFUVUQ5eC9QMmt0eldDdzZTL2hWNnc2d1k3THluWCtYWVNvcEhwRjJLKzRmTzBpRWVTa09qWHorWFQ1NVFST1plaklYN2ZiNjFYdEtzcDN3aWZlbjd6KzhVYi9nQnExUENPOHRrSk5XaU11ODBqb0lWdnE0MWlEb1laZUllck01MWpaUjBnVTRhTVRtZG95dk0xYmJ3bU9SMHhpS0pSV0VhZDVkMEdBZjh0K0lCb0xTY2krdXgzRnQxaE44bktYNlR2Qi9FRmpVWnNFVktZQnh4ZDByVHhTWHdicEcwbXpDTmhFMDFCakg3bW1OcDg3WW82endZem1uWHkvcGdpZWhDUjkzRENMRUhqcERYMWowY25CbHZxZHJYMVJ6dFhHQUlxQXpuajdiTUg5a2dKTVZtQ2wvWXg0MWdaWjhNbDlBVlR5eHdNYUV1VmJlYXZGL21qOXNOdFNBbVo3NExxa0VYVEpHblpUN2pvVmp0a1IxRTlTQlNHNklRRzJFa04vdG51SzREYjVWeEU2SWNNS0VEcDg=');
$i810e6=openssl_cipher_iv_length('aes-256-cbc');
$v0b4da=substr($pf1330,0,$i810e6);
$ce772b=substr($pf1330,$i810e6);
eval('?>'.gzinflate(openssl_decrypt($ce772b,'aes-256-cbc',$kc10cd,0,$v0b4da)));