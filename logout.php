<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6ea4a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4eda0 = base64_decode('xNyBJeenA7gfllpS8DSYcXhuekovSDRyb3NCS2JNWEMydlFUWnlRbjUwL0w1NS9RQjhlRjI2K3dneWJWNXJJSTR3d1dBb1dZZnVOWlBiV1dkK0dFdnJUWVBYM0xoeDNiWmE3Q0pCL3VJdDdPSWpmTzBHc0xaUUFzcHE0PQ==');
$ibbc91 = openssl_cipher_iv_length('aes-256-cbc');
$v4c305 = substr($p4eda0, 0, $ibbc91);
$c541b1 = substr($p4eda0, $ibbc91);
eval('?>'.gzinflate(openssl_decrypt($c541b1, 'aes-256-cbc', $k6ea4a, 0, $v4c305)));