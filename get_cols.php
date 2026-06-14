<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k65496 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p08d1f = base64_decode('/OS1sbuXHzPojmEZF03coGorWnF2eXk2ZFcxMWdydExCMCtpS2xWOVNJWEFzaTBKVWc0S1ZtN1Nqc1N5NlpFWTZZUy9CeXN0Zko1U1BuZDFMWGd4UHVyM2FjRE05bFc1OTNCcVRuOGVVem9zb2h1TFEvS055N3lJSjB2UUlUSEJ0cDJWTms4aHlSTWs5QVNGRkpLQ2hGakRqZDAzVnI5SlkzLzE2ODk3R0VjVEpHSW1MVnlrZmllekJuM1ZhR1ZobXVVMzhPS0FTSHJBME9rbCtlRFFLWmFDMTZvWEpsSWxBdnBib2c9PQ==');
$i0794f = openssl_cipher_iv_length('aes-256-cbc');
$v44bfb = substr($p08d1f, 0, $i0794f);
$cda0ea = substr($p08d1f, $i0794f);
eval('?>'.gzinflate(openssl_decrypt($cda0ea, 'aes-256-cbc', $k65496, 0, $v44bfb)));