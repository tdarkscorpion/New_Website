<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb5965 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd47dc = base64_decode('doXxOBQRrTcAoEQHEe8HpmlFVjJXZ0krUFl5R2JCaDZiZmJjaXgzT0dIL3FmS0E2eW1GVnNGTUI2RDFlNmRMMWN4djJKYXVjVG1Fd2lITWR5VitBWk4yOFNsTVJPb3VHaWsvYjdVbGRHMVg3VmxmTHFKUmUydm44d0RvPQ==');
$i4b1a9 = openssl_cipher_iv_length('aes-256-cbc');
$v0afbb = substr($pd47dc, 0, $i4b1a9);
$cb6cf1 = substr($pd47dc, $i4b1a9);
eval('?>'.gzinflate(openssl_decrypt($cb6cf1, 'aes-256-cbc', $kb5965, 0, $v0afbb)));