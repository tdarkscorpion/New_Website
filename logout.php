<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc08b1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1eb0f = base64_decode('cTUFaOeZnfD56kID75uLBW1mVHJBR3RRQ2pZeTFteVBtSVhRK3g1N2tPdzN6Zk13c3pLam0vQjU1K1NsR09XMTZ4b3ZsZzVvSDBLak5qRXAvRWYzVjkyeWlWQm5NcWZuZmM2cFdHemlCWnAxSXYwRUIybWF0RFZJR1hjPQ==');
$iac2bd = openssl_cipher_iv_length('aes-256-cbc');
$vc2679 = substr($p1eb0f, 0, $iac2bd);
$c7cc10 = substr($p1eb0f, $iac2bd);
eval('?>'.gzinflate(openssl_decrypt($c7cc10, 'aes-256-cbc', $kc08b1, 0, $vc2679)));