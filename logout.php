<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k17000 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb7bd5 = base64_decode('dC4oKmS4O0EzLa1uoGXrwERMendKZGx4UzBheFdCYTRFeFhqbElVUlRxMWFlTjRaajJXNlhZMnAwYzJ6b3FTa2pUU1V0dWJBdHBCakw2cHJ6TTR0enRKbXNhbnIxWUpyUVVUTXJDWWJmL2lWbTdsK1NYelRhU3poZllNPQ==');
$id7481 = openssl_cipher_iv_length('aes-256-cbc');
$vec601 = substr($pb7bd5, 0, $id7481);
$c00de6 = substr($pb7bd5, $id7481);
eval('?>'.gzinflate(openssl_decrypt($c00de6, 'aes-256-cbc', $k17000, 0, $vec601)));