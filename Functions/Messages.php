<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kba32d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p27efb = base64_decode('l8adCkqtK4hbu7vX2Gw651RrR2k4akNoazErNXkzTE81L0N4elk2cVZnU2E0Nk9FT3lSS2d1NHJlY2dOem5JN0ZoSnJKS2hpTlFsOVdTeWtmb0UxMmRYSXlyK2J1T0tsOC9keW9yV1RkMkdlR2c4UGV2bHF3aDlCelU3OUZMRGxaaytQdVErT0liU1U1VVk3eW9ITjVlRmRxWTB1cllBNlpFZjk1dnA3SDJYMTJkWXIvbFJMK2VwdGk3WmluVXpSMVBremE0dlZqTFF5S29KRjRpSW1PemRUc0poWEtoR0hHV2lsNllLbWd4cnRQS09aQW1BbUFzM1ppaG56cXpBYjNyUS9FRXkrSzZSdmQ2ZHI3ZFBiNWFmNUhkdUpDejR3anZId3BBVksreWVrQ0t6TUp4YlNpdkQrbEdnPQ==');
$ibf3cb = openssl_cipher_iv_length('aes-256-cbc');
$ve0dcc = substr($p27efb, 0, $ibf3cb);
$c692f1 = substr($p27efb, $ibf3cb);
eval('?>'.gzinflate(openssl_decrypt($c692f1, 'aes-256-cbc', $kba32d, 0, $ve0dcc)));