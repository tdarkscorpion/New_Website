<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf626a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p78e7f = base64_decode('FzoyhPEokX6ouw97vogSN0V4SWdlb25mendJVmFBR3JmeG4yMTBLZUt6QlR3bUx2OW4xRm85VURtY1cyM2gxSEEreFR0TmVTMUNHWEg4ZFUyOW5wSXByZ1N0ZEFjTVJ6UnRQZDZUb2tYbHdTblNXaUdVNy9kMWVIWXd6RC9XZDF6WkV0V0ZjYmRpcWJhZWF2ZDdLU2Nqam50MHdCOEthaThiZzVFZ1Baa2hNTlBXb1NzN2NEY1RDeDdsUmpIbUVYVjRzZW1VT0hsWWhnWkw1cE1pODJhLzc1RzQ5N0lwdkhyNVhZZGhhUzZTMjllS2h2Yk9LdWs1T0hPVzdlWGZnbVBXd0UwVW1HVXA1MHZzQ05RcjdqVUgzVyt4bWZCc2NKZ1lzQWN2ekF4N0pWa2F6TXpmclV6MjMzRCtSYzgxaDRqRDR5ZnRzaktHcVFCR3NS');
$i152ef = openssl_cipher_iv_length('aes-256-cbc');
$v4a99e = substr($p78e7f, 0, $i152ef);
$c045d4 = substr($p78e7f, $i152ef);
eval('?>'.gzinflate(openssl_decrypt($c045d4, 'aes-256-cbc', $kf626a, 0, $v4a99e)));