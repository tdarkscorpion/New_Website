<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kca63b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p190de = base64_decode('77KJreZtujJMe+3TxTOz3kFOZk1hdGhCWVYxcHdSamk4MWpvTS9UbDJLbUR6Z1pwUlp0b3ZFMGZsQVdLaFBxZmptTEhMd2pUN3NmdWJZY0NaVTlKV0Y3RjU4TWh5aS94WEJ4dVJ4S2Q2T2hSeWpWR0RQcEo5WTg3VitXOHF1azV5ZXcyTVFRZ0QvQjkzTWplUU1pZTVRZEhHLzUwMmJBVXZpMnhqWWVielpUM0tCeTV6WnphUnJWdUFFbTFMNy9CRS9vK0plZm4wM24wWlMrK3ROa3Q3NlBCanlCZTNOMm1DcjlBL3R5bkRENDN0dUwvSUFNTjM0dUg3d0xqbjd5VWNtVWZ4bTRXYXBwWWZ5bWc3cjBWTDE4QVkxS0NCZTNoaSttSG1KYzFMRjIxYlBXSk5LR2VoeU9QV2p2dzY1ckNkVU8vY0ZnOGNjeUhMaUdoczVDcE1wZStqV1JBNWh4UWJOQ3U4dz09');
$i0aec3 = openssl_cipher_iv_length('aes-256-cbc');
$v4064a = substr($p190de, 0, $i0aec3);
$c56bd4 = substr($p190de, $i0aec3);
eval('?>'.gzinflate(openssl_decrypt($c56bd4, 'aes-256-cbc', $kca63b, 0, $v4064a)));