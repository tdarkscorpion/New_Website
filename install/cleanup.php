<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l0046c=__DIR__;
  while($l0046c&&!file_exists($l0046c.'/talisman_loader.php')){
    $p=dirname($l0046c);if($p===$l0046c)break;$l0046c=$p;
  }
  if(file_exists($l0046c.'/talisman_loader.php')){require_once $l0046c.'/talisman_loader.php';}
}
$kbc056=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kbc056===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p9733f=base64_decode('nHRQoHqFz1cveixn6hL/6StOQ0Z4T3NZZXpSVXRvaFNPSWpEbVVNQmpVY3dhcWtnd0Q2c0dHUk0wYStrMjRxeXhrenBUTkdLNXRwUzAzaFZDdFJkVnk3cnVMZWFFNS9YMGhZOHNJZXlRWmZOSmdTaTVWMXJud0JuRktNRHE2bWp6WTFpOW1RSi9qeE5Gb3NJOTN5QkVpaGw4bE1jUVlFaC9qYkRHQm9NczZZSVV4NytqMStUNkRYVUcwNmhqRFp3aTdNd2kzSHIwWWt5QjRvaDJJcWRxSnZPaWlGOW9laE1OSUgrWlZrVTYvMW1nNXFtbmhEMVc1WGh2OGg1MG1kSEI5aGxuL25rYWdsY1RENzV6TVBlaE15Wkpya3lVMnhiZURxdkNCaEd1YmRjVFNScWswcm8vMDBudllVVVZqczBjYjBabU5PVjVibGNEa0thNGRZL2pnRmNNeW4xMmVqeS9KN1NmU2wzSWl5Tkt3WWI3MDh2cnRyVWpNUmlzUGVzb0RReFp1eE1lRWlpTHplNUdCZGErcEg4ZVhUUmdPTG8wVmxLUFlteG1FZlEydGZ2bFRRYk0wVG83ZVBFOGUvejRuUjMrY3BLS092cWwvL0toK2I4THFzY3AvSkI3UTMrVmJEMU8xaC9RdmtYQ003SjhYZTZXOHV2bS9nNEowYmIyc3FOemdGN0hjcjlTUWpMTXg0MFlZOXhwamtCSXp3SnR1dzBIUERPbkFyUmQzVmh0NVFSMkV1cHdIQTljTjgxNThSN1N0WStqek9CbjBkK2w4OU15R2pRYkx6a09kTFUyRnBzS3dHUGVtcXZmR3o3bmNxR0xVbFppVFJHM3VNZzdwWHd5NHhHZkNJc1FJNGtoVDZNczZja2k3VEdrdVZLU21hdFAyelhOY0tkTEZNak0xY1V3S3k1S2dSTmRFbHRwNjV5L1gvTkY3U2k3RFNHdU1qTDREaXAwMUFOMG5NMEs1N1pPYmpja3Zoeit3WUpVWHd3MjlrY3RZckMrT1dudHNHUHdTYWcrR2hUR3ZCaA==');
$ic5c62=openssl_cipher_iv_length('aes-256-cbc');
$vcf787=substr($p9733f,0,$ic5c62);
$c03e7c=substr($p9733f,$ic5c62);
eval('?>'.gzinflate(openssl_decrypt($c03e7c,'aes-256-cbc',$kbc056,0,$vcf787)));