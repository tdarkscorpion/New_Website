<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke01e7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9f8a7 = base64_decode('fxhgkHYnU7YBk63a4AJZCll3cWlNVlduaG91bjNkR2VPM1BFRE9naWUxS2U5K2JXYkRuUkJLa3UydXRhbGlBaXZFcnFMVjlUYUNWVjlRak9tcDFVZnlSZ1lCYTg1YWoxSHl6aVEveHFFWWZsVHFOMGd0c3hTNVFYTlRZbzk4V3BQUXhLcSs0QmthZ0hWeS91SS9tTVpOMU9pVFRTeWFCSk41TTREYkZqakI4VXZkck5yWHp5STFuRmVYcDM2dnh6OGJjemJWQ2JySkNQdUtoOXN5UERuTXN3S1Z0eWM5bHhQWWpHd2gwbFBaNVdMOExoTFFBRWRtcHBTMUI2SDVBQjRRUGJpdmlrNm5FVWt1RTViNDdBYXZ0dHBvMUd4RHh5dXhxcUVMN1VoOUVDcEIxencycGVBc3JBZjM5SDJHamE2aHhnekh2dzNGemNYdmtH');
$i720cb = openssl_cipher_iv_length('aes-256-cbc');
$v9bafc = substr($p9f8a7, 0, $i720cb);
$c5aa25 = substr($p9f8a7, $i720cb);
eval('?>'.gzinflate(openssl_decrypt($c5aa25, 'aes-256-cbc', $ke01e7, 0, $v9bafc)));