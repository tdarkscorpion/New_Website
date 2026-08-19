<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7a3ce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p41486 = base64_decode('2quBGM83KIVHwxqEkuql3FMwZHBlVUFDOE9VMk1RRXBPdG9KQkhiY2NRb0ZEU3BsUTZBZEZadXdKdWIxeGUzeTZqSm8yNTJMdXljUi9SV245bFZzWW5vS0JJZFJadW80VnUyVGs4dWo1TmxsMk4yREVCVEd6bjIyZmZZPQ==');
$iec21e = openssl_cipher_iv_length('aes-256-cbc');
$v1544b = substr($p41486, 0, $iec21e);
$c9766c = substr($p41486, $iec21e);
eval('?>'.gzinflate(openssl_decrypt($c9766c, 'aes-256-cbc', $k7a3ce, 0, $v1544b)));