<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf0dbb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pca4bc = base64_decode('2wGQmSMahCwpb74It8WTSVdSOUYvU1g4VXZ4ZzkwRkcwUzVqOEhZTmkrR2FMdlp6bmkxSzA2UGJMVXBIeDgwZHRpR1RVVG0vd2V2U1EwUkxiVitaTmQyZElaaTFJZXVXZjdrZnBYRHhQTlZKRDBOQld2R2JiTDhyaXNaNXF5SFJkMksyT3VRSGdreWRDOEo1c1ZyamQ2NGUvZitxWkc3WSt3NDVHMHZjR1ozNzJaNDZQZUNINGFRTUxZS3BzYmdxZURFb0NaRTVjUnJINVJoUjFyMmpEZ2lFQnMwNXA2Q1B1akZwcVE9PQ==');
$icb2db = openssl_cipher_iv_length('aes-256-cbc');
$v301bf = substr($pca4bc, 0, $icb2db);
$c29b55 = substr($pca4bc, $icb2db);
eval('?>'.gzinflate(openssl_decrypt($c29b55, 'aes-256-cbc', $kf0dbb, 0, $v301bf)));