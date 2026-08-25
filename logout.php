<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaaad9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2680d = base64_decode('IXzYXzTc9x34EDGlfjFmP3VpMy9RM0pxanJoVGo4VndUTzdrR0NFbjRxb0wxM3ZQT1pkWXA2OUtpNHF2OFFramJJVU5wSXRYMUlmUFZoTlJ3ZTdmNURlVTdUOC81OGhVTnBid29yL2hiSlRaT0hYSkdRNTNDaXdEREVnPQ==');
$i3335a = openssl_cipher_iv_length('aes-256-cbc');
$v93c53 = substr($p2680d, 0, $i3335a);
$c28947 = substr($p2680d, $i3335a);
eval('?>'.gzinflate(openssl_decrypt($c28947, 'aes-256-cbc', $kaaad9, 0, $v93c53)));