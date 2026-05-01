<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9956f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p454d8 = base64_decode('PWl3JJxWL7SCFxtWgrVuIVd6eHpKRlhybmZwZTBKb0ZjVjBkek8xS2gzSzdLc2VMdkxndUEwMUwwb0lOMmhFZm80OFdzLzFlRWNhZi9kalErc2o4ZjN5bWJJVDFWVXRnZFh2eStydDZpeWxmZnZNYVhiaVhzc1pYMEF4eFQ1cGNxUStMQ0sxMWtvUnFjS1ZDTExJUVd3QWhZYkVmQVNHSnJKNklVVWFROHoxQXJUTmlsUWRBV2FveFZIbmJBREd1dzBMT2twN01ReWxuQ0JuUTBvN0h5UlN0cW9UWUJZbWZGdTBvVFBFYld2T01sOEFMTVgwUC83MEFQb0dnUjN2RkZiQllmSUZsbTFzdVk0b2M=');
$ifda1e = openssl_cipher_iv_length('aes-256-cbc');
$v0e281 = substr($p454d8, 0, $ifda1e);
$cb41c3 = substr($p454d8, $ifda1e);
eval('?>'.gzinflate(openssl_decrypt($cb41c3, 'aes-256-cbc', $k9956f, 0, $v0e281)));