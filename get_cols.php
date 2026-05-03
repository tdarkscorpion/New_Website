<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1ae33 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1f904 = base64_decode('bIf/PQ6ZDBTUUbjXcYgXXjE0TnJCUzFrWC83VUFaY2RtTXVocXhHZmpjaVhYQkZsVlBQMDM3NWtaaW12TXFRVnVaMXBYYWxyZEVUZ2JTYWhKWmErWmxoQWliVkRvUlpDdlF5Z2dxdms3c3NCcTd5R3g4S3U2MHJJNkVHVUdZRi9qZmsrSXlibFpkV1Q0Y0pYYTdjN0JoM3BkeFJBczk0TEhuVmFaRGlhR2pnSW9sY1lUZTBIM0dFRDQ4U1NqNFh1TVQweDJiTWk1MzhCTGJsWnhjMUdpYVpSU292Z1pLcWJWbDZWL3c9PQ==');
$i868e4 = openssl_cipher_iv_length('aes-256-cbc');
$vedc01 = substr($p1f904, 0, $i868e4);
$c1315d = substr($p1f904, $i868e4);
eval('?>'.gzinflate(openssl_decrypt($c1315d, 'aes-256-cbc', $k1ae33, 0, $vedc01)));