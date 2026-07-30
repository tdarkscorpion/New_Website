<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdb145 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc298d = base64_decode('mvy73WYgFm3ZHsDEFCkq3UhzdHFxN29ZNWpialJIWXlFeW5nSEZvaktMRm1sQnBUZEtGRlJkUXVwYzdhemZBR1BuTGFra21KT2FOaWkwR2FOVHdqRjBuSkNvTnl6Q2I5WlNZNGRQQmNoQVBnSmxlODZVQ2VTZVg1ZWdVPQ==');
$i5c3a8 = openssl_cipher_iv_length('aes-256-cbc');
$v8bc28 = substr($pc298d, 0, $i5c3a8);
$cb2140 = substr($pc298d, $i5c3a8);
eval('?>'.gzinflate(openssl_decrypt($cb2140, 'aes-256-cbc', $kdb145, 0, $v8bc28)));