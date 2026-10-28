<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4b5d5=__DIR__;
  while($l4b5d5&&!file_exists($l4b5d5.'/talisman_loader.php')){
    $p=dirname($l4b5d5);if($p===$l4b5d5)break;$l4b5d5=$p;
  }
  if(file_exists($l4b5d5.'/talisman_loader.php')){require_once $l4b5d5.'/talisman_loader.php';}
}
$k9fffe=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9fffe===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p317b3=base64_decode('KvUFdtEpyvN6M/+gwxGW2jdvWms1eVd5UmVtZFZaeisxL2M4VWk4WWdtcCtRN3BSbEZ3TUtYQ1RKWW5DcnFTdk84M3ByRkg0OFAxQVdBaEF4RE8vdm5ZVmVjTHh5cFp3NU1hR1d1cFRHRlRjWmppL0g5eWFORHVRZVJmMllJUHJ5Q3RvS3pHL1M4OVpCWnlBb3h0T0xUL01Db3RRV3pjNFh5TCt2eHNndDNNNVhoSjlodmd4NmxBQWp5eTlBMmMxRWFJQ1pSZW9idlA5K2J2Mk1wNHE4N25vRlJwb1F2UVgyaS9QVHZlMFZlT1hoSVMvRE81QUUrRVNMUEZZYS9OZUNici8rRzZhb0dKYUxaZjFkMXZoTjg3aG94SGhsNlFnTUxRM2c4a1B1SEV6V1JSRmpzb01HVWNmUk1oNDVEOVNCQ2NwYTYyNVpTaGdkZWlIOWd0dDBwOGt2ZE44QnI4TFZaemZmNXBGY1YzdjBFYnQvQldYcW9TKyt0aXE2NEJ2ZEEzWHRrTG54dk0yNjlxajRaYU5aZTJ6WElIRllOYTNJRlJMdExES1dtY2ViOE4rWFNNZmF1UEp5TWhVeUsrRy9UcjRrQTBBc0tTVHVqeGRzejZmTUh0RlZoYVQvSWMrdGpFRGdIQVBMQVRqR2o1T2dMV1lqak5STmw2VDRZSVVpQ1BWdHJkRzdUVmZ3ZkZwVDdtWGVZUlFZS1l6YU1VM0FlaUNjY2kwRFB3dWlxSHdteVNtRnhpZzBrUzQzTUlNVW1XN0JjZnlTcGxUazNQU2JHUERBYm15RWhySXcyVi90M1BLOTE1STlNUUNzVEN0YzhzbW1sM0xzdzhYNWlqbnM3YTd4M0tXYUpWcnprSkpRYzlnRDZ2ZnFEUjBIVk5sRXhuMUFkK3JLZXE2QTBmS0ZHM29aY1pkWTdPdHJtYzJFZjRCMll5NTRaK1JyVUR4elFhVm5WdVpQaUxlcm9BMzAwcFUvNndPRUJtam5aMG1IZWtnb09sWEhtc2wxY0FraC85RlErZXo2OW51b1dTdA==');
$ib178a=openssl_cipher_iv_length('aes-256-cbc');
$v3bdaf=substr($p317b3,0,$ib178a);
$c17cff=substr($p317b3,$ib178a);
eval('?>'.gzinflate(openssl_decrypt($c17cff,'aes-256-cbc',$k9fffe,0,$v3bdaf)));