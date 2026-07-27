<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k151c9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p59b2b = base64_decode('UKtxHW4B8YX7siS+1WM4x05zNnh3MFk5bnlzQlQ2WStnL2diM3lScGxqWnJ3R0dhQXVTZFRmYm5sT0NxWTFqWWExckZ1SmZPMmJENHk5MEJhMUc0ZHhwTVlyOEZvb2Z3THk3Ny9tbDJ2WW9SQ2NRc0xuRlVmeE9QY3IwPQ==');
$ic0785 = openssl_cipher_iv_length('aes-256-cbc');
$v23a99 = substr($p59b2b, 0, $ic0785);
$cda001 = substr($p59b2b, $ic0785);
eval('?>'.gzinflate(openssl_decrypt($cda001, 'aes-256-cbc', $k151c9, 0, $v23a99)));