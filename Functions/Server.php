<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaa517 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p92768 = base64_decode('86Ok9zOMWx2sge8Jz4V/Mk82RzZzcU13UW9adkFienZLNFBTZEl5bER4WnlXSXZjVnZnekthOHpIQ256TW5iUDhUL2E2ZG81SGFmRlRhSE5SOFNJdlhUbENSY2tLZVVjcmFQbGJBYmhDTUQxVTc2bW5nTDZKenZhNDR6OVdUV0tNblRDc0wzSThlOEk0SFpNcy9vTDBvcG1scFZPaDkzSW9kZy9wRWVicGN0c2piM09RdlFoYzlWaHBrWnpTSU5vZXErVjFGU1JGdk9ncmtCYUw4YVFmRlFoRHdMdkxOUjkxY0VzT0pBNHZ4OXQrditXaXVxVGZWUlNEMDhZSURqRDNxSmxpSTYwbEx2TWlVTDEyZk9EbmYzTWJIK0VqYWZERVVXVWZGQjlxNHhTbWhjOWppQXJQbjlFNjhvPQ==');
$ieacda = openssl_cipher_iv_length('aes-256-cbc');
$vd7b90 = substr($p92768, 0, $ieacda);
$c1aefd = substr($p92768, $ieacda);
eval('?>'.gzinflate(openssl_decrypt($c1aefd, 'aes-256-cbc', $kaa517, 0, $vd7b90)));