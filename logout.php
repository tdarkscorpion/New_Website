<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf7917 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pacdf3 = base64_decode('34WaspRjWvwB7npz/nS4i1pBUFJRS21hOHFmNVI5NklpWU5ncHVzWkM0QmUrQ2VWMjE1ZVkxS3IzYTViR3FBajlRa0c3WHkwKzJYaGN5NVVhbU9YbUxTbTc1SVBoc1l1VTJqKzFDSWtxajVVakROMUVvL2FpdzZ2MUQ0PQ==');
$if4cab = openssl_cipher_iv_length('aes-256-cbc');
$v2b1bb = substr($pacdf3, 0, $if4cab);
$c4dd3f = substr($pacdf3, $if4cab);
eval('?>'.gzinflate(openssl_decrypt($c4dd3f, 'aes-256-cbc', $kf7917, 0, $v2b1bb)));