<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka522a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa06b2 = base64_decode('eXtbsrgEghKqgKi3lmL8n1dyOE8xeTZZYnpTdElNbzFnS2lyZmtvVzRPdTVBa1BFeGptalpBTHJVWWpRL2M2dXphajRCTWM5SFRkTlA5dE4vcWZaQ3k1MWFDMHpWeHdMY0pMTld2ellBQjhLVmpWeXJhaFZZVTZpUm9ROEk5ODYyYnh5ekFhWnZvNmdjWmlpRnhNejJoYTZJZWQyOWNiakFJTksxMVNUOU9lUXJWaGFuTDFJQlBYMy9LNVpHdUR6aXRheldtcWxMWTYweGo4QkpFUysyQm83N2owcVI0a3pXbVdVU2xKTHN0Wk5nZ3BEVUgwRUhLYldSUmVzdmhObVc1eldpODh0YUNVNEhHc3VVbytHRzBEUk1xNWx6VmJIY2xCL3g5c2Z4Y2ZhTXBQczZJa1J6NzhJdHpFU1BBVG0yVDZKeGVMR1Y5VU9RV0R4');
$iedd0c = openssl_cipher_iv_length('aes-256-cbc');
$vf362f = substr($pa06b2, 0, $iedd0c);
$c5f9ae = substr($pa06b2, $iedd0c);
eval('?>'.gzinflate(openssl_decrypt($c5f9ae, 'aes-256-cbc', $ka522a, 0, $vf362f)));