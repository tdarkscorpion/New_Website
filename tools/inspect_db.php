<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4e767 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p08b2a = base64_decode('OW9idlrsnFdX2xVSakJcpFpsNlg4aXV4SnIrNUJJelU3dFkzS1pSb3M4TDRCWmxHQUI3NzBNZVlWazQ2Y0Jad29NMk1TeDBVZEczbkhJRDFCZUZjUFdQaDRmOG1zUkVhUGZkVkEwZ3FFT1ZidGdDc0lGL3d4QUVkWWZqN2J6R2R0dUgyVE9xZ1FkSU1mOTc4ZGlDMjI5RzU0K0lsZFErZE1uZkxDalJ6UjFDVmVzdTFSOE43dkhOZjc4SllZL1Y0OW9GZEV6aHRkS3ZYSm9VM20vSmRDbDBFaXhxZ2piT3hHZHBWYXc9PQ==');
$i81c62 = openssl_cipher_iv_length('aes-256-cbc');
$v2becb = substr($p08b2a, 0, $i81c62);
$c45c72 = substr($p08b2a, $i81c62);
eval('?>'.gzinflate(openssl_decrypt($c45c72, 'aes-256-cbc', $k4e767, 0, $v2becb)));