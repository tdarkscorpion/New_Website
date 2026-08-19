<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k720e1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3c50e = base64_decode('l4BqykPUI9gvrKe50TGEA0E4VXF2S2RzZVR3aEprUXdybDZvL2N5Q0pNMDZxekN2b3VqcjBaSlhtMWExc3FhbU1najlhOWVqN2ZESXlLYlo0akx6UGxvem1hOHdJTU5XZmU2NTRkK1JtVXBtdFZUU0wyRVh2aU5SS0lrPQ==');
$ia1042 = openssl_cipher_iv_length('aes-256-cbc');
$v2ed21 = substr($p3c50e, 0, $ia1042);
$c687c4 = substr($p3c50e, $ia1042);
eval('?>'.gzinflate(openssl_decrypt($c687c4, 'aes-256-cbc', $k720e1, 0, $v2ed21)));