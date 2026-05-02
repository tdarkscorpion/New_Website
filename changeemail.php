<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka1104 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcfdde = base64_decode('oNiX12CYgkANMIV4mWsin3d1VWI5Z09nSjVqZlRiNytaT29FMWhMSUtmU0psTkJBbkFDMVFoS3MrbXgzNGFrV0RSTkY5WVVMMFA5dGdMT1lpSmpoOTAyTUVJUzhOd2FiZ0cxN3hTaG5YV0ZHS0tBQ0xpZmhHRW9BbFFyZHZXNWxYbU5iUzZnVG5UbkNJRG0xUGJMSnNlbGZRc0NtNjUyVzZuMjBZVXp0WmY5RDIzUnQ2VS96UXd0d2lodnpaeTFLY3h5WGVZN0M2bGJWcFdsbWFBanY1czFDVzZrTDc2czJRcC8vNWp4MDk2OG8yUEc0Rjc3YThKalRrLzFxazBHUnJwaEYxQkpoL2orU0M3d2gyTzU3aGpSbk1QZ01tTm11UGFqYUs0Smk2RnhJamsxbHp4eG15ellQRTcvNnlDTTBETUN1YWV6bFNHRldXc2hZVG9oNm1vTHlmUkVuYWl3Njc5TjJSUT09');
$i13564 = openssl_cipher_iv_length('aes-256-cbc');
$ve0159 = substr($pcfdde, 0, $i13564);
$ccc6f4 = substr($pcfdde, $i13564);
eval('?>'.gzinflate(openssl_decrypt($ccc6f4, 'aes-256-cbc', $ka1104, 0, $ve0159)));