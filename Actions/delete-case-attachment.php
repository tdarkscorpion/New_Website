<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l6fd1f=__DIR__;
  while($l6fd1f&&!file_exists($l6fd1f.'/talisman_loader.php')){
    $p=dirname($l6fd1f);if($p===$l6fd1f)break;$l6fd1f=$p;
  }
  if(file_exists($l6fd1f.'/talisman_loader.php')){require_once $l6fd1f.'/talisman_loader.php';}
}
$kce37d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kce37d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p49084=base64_decode('NWKPfNetP69ZziFVQqqWTW8xVXJCdWV0SlBmQjAyMkE2aUw0NFQzbUFsZUxNaGh0UTVTTk1CajlxM091Mk9pcmtObHVGQUdWMWRNQStodDFaQ01UOWQrYWU4ZVdVc3gyT2hMd3IrMElLUDVNRDNpRi8vUGg5UWdZQkxjeGxPQlhKV29hd1g2NDI5RVV5RE1ZczlHVWZJMndqYlJDM296RG02Q3ZIanJ0VTlyTC9RWFB3NzJVaWcxVnNKVlNwQVNFTWdjak5NeXJDTUJDbThHNkpMTE5Na3ZheGV6SEZHanR0Rlk1NDRReklxVnJvNWZPTHEwaklLMGJWRVNpSWNKaVFLL3lEc0xPTWlqS3BrUGQ3UnpJYkxNcWFKUTRFeHNUaDJrZkY4c0JXbjg1YkZxaVFqQVpkV1RWUkk5Rjk4SjU2RUNnREZEaEZScmZuWDdz');
$ibd333=openssl_cipher_iv_length('aes-256-cbc');
$v31e8f=substr($p49084,0,$ibd333);
$c359c9=substr($p49084,$ibd333);
eval('?>'.gzinflate(openssl_decrypt($c359c9,'aes-256-cbc',$kce37d,0,$v31e8f)));