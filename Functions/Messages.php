<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1552c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p17104 = base64_decode('GXoCg3hKgIEDEAf+uGyisFpGRS8vaExCZHhTWXZIN29pK1BWMXFZRktteGtIZW1nZ0dLeThsemVnaFM3R0ZBTlcrR2dPbFpBQkZpLzQzaW9rTHl4NEVERjdPaU80MTRRWlVkV0xXZi90Z01lSTVsTURNL0szdHR2UnZWTkwxRHVvbGVTVXRpQVhTeVB4RC9NMWk4a0pqc0FIRjFhMEV2M1QxVUFPSXpxRk9YYjZQTnpCclgwM1dvOUhFcE9SM1RKWHZsZUtEZ0pHc0RkaUpCdlU1OTdJRWVVL2x3U0xnajN5Qm4xV2lEMHo1UjZ6dDZGZkZ2ZDVNNW5XcUpPU25SK2RXMzF1aHY2RDZvazdVdUMzajExeHNJKzJ5ZEpOTWhjVDVRaVF2UW9HY1dVdHRBMy84N0dFWkdvKzhRPQ==');
$i53dc9 = openssl_cipher_iv_length('aes-256-cbc');
$vd9be5 = substr($p17104, 0, $i53dc9);
$cf5311 = substr($p17104, $i53dc9);
eval('?>'.gzinflate(openssl_decrypt($cf5311, 'aes-256-cbc', $k1552c, 0, $vd9be5)));