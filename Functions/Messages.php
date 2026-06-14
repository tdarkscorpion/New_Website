<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb8341 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p26efa = base64_decode('JnRUgP9boaVN3o0z4997H0tWb0hjeFN2aEM0TVFZbjFyZmVScmpJTmFBY1oyUkwxZ0pTajZvWldTT2g5Z3hwYXpsNzlYNS81bkZDYWRFWmNsQlVTemFCNnpsQXBvOGZENG12aExoYi9NUFQvZ0FEUmNzV29lMlB5UmpzaHJxWDdJUm5FeVc3bVdwYTZaekV1UUNvb05yb091UFVKMmJROVo0R090MGVFeGZJOWIyTGVWdFlkdmNMS2V4UlZSdDVHdDFNYmNueTB0VGNwWXVCMWpXNGo5RXpKTE9wTzFpR1JsdmJobm5QMkEwejl6b0l3S0s4SlpwYnpMSFNaM2s5b3JjOU0wY0dTbFJWMEF4NUM1M2pZMHBMbjl6UVBpM1dLNzhNdlJWZEs0UjMybGJGKzRYeXZmRmpwd1FBPQ==');
$i7fbec = openssl_cipher_iv_length('aes-256-cbc');
$v5e13a = substr($p26efa, 0, $i7fbec);
$c678ff = substr($p26efa, $i7fbec);
eval('?>'.gzinflate(openssl_decrypt($c678ff, 'aes-256-cbc', $kb8341, 0, $v5e13a)));