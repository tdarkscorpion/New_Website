<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7561a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p13b7b = base64_decode('lpJzbSpWdJbciZN+QaTmcEY5VFhUaHZqUVZGaG5vK0svMStmWWVTTWx4MDVyRTJBeE1LZUZ1aE55MVFHRTRJZ0ZOREJER2x0SXNsbEl6Skh6UlU1WUwzOE9BNjY4NHF6ZEpSWm81ck9sVS9QTzNraFo0Z055TGxocFR5Y2ZIRmhwb1I3cDZoSmh4T0FFM2paVkhqd1d0K01FTGQwbENKRy9LcEpHcFk2L2UwOEFMUm5UUzcySUtKS3JTd0QzWWJZSWpsaGVoZkpSb3dSUGYzdWhzTGdqR3B6LzFwL3NCN0UxZjJwd1E9PQ==');
$iaef1b = openssl_cipher_iv_length('aes-256-cbc');
$v6ac56 = substr($p13b7b, 0, $iaef1b);
$ce3435 = substr($p13b7b, $iaef1b);
eval('?>'.gzinflate(openssl_decrypt($ce3435, 'aes-256-cbc', $k7561a, 0, $v6ac56)));