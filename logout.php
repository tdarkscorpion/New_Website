<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k858a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2bcf6 = base64_decode('SwRgGNIUTwy/OQRR7MzouDlWUFYxRjdUNjUyQittT1dkL3ZkOUFjczY4NGFFbTlTYWpGNlRRTkwxWkxPUnZlMUhtbkhleUduejYvSjdBOWU1cmRTeEN2U2lLSG5IbXc5MHYyNWJZakZQdWc3dk9LV3R1NFNPQTR3QzVZPQ==');
$ief135 = openssl_cipher_iv_length('aes-256-cbc');
$v7bb93 = substr($p2bcf6, 0, $ief135);
$c11f12 = substr($p2bcf6, $ief135);
eval('?>'.gzinflate(openssl_decrypt($c11f12, 'aes-256-cbc', $k858a5, 0, $v7bb93)));