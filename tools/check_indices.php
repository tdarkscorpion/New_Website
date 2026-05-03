<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1f6f2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe75de = base64_decode('2m1Hz+iQGxOIfIaeRpfqtUJuYUFlZFI2SThHL1ZsMGdGcVJpb1gwaGdvdmpGZzdsTkQ5Rk9MeVNUZFpvWTRZajV3ZURvRVNlNlhOMUsybVU1MExyNm5YVDVYR00yK1FQbG95STJVSElScnZDclNwaVNSWlJWOUVsREY1ZEM5UE5Jak42TFhGNTBFcnRxOXJKLzYrY2FxalN0cGUreFJFZ0owVU1KdUlMak1sQjdvY1JpTWJDZEY4bmhiVi9wdkNmY0tXQ2ExaGZRRUtYR0pCUVlkT0oxQzJieWpTSllIVHN6bnJSRmxsdnFqbzNOZGlndzlEOUtnUFBzMzFXOGZUenlVSjZTZ0JkUDREZUQzNk0=');
$i1fae2 = openssl_cipher_iv_length('aes-256-cbc');
$vebe9c = substr($pe75de, 0, $i1fae2);
$cef949 = substr($pe75de, $i1fae2);
eval('?>'.gzinflate(openssl_decrypt($cef949, 'aes-256-cbc', $k1f6f2, 0, $vebe9c)));