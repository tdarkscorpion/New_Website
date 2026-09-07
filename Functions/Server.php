<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb91a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7abec = base64_decode('75mG483Ns9yioZLqKNzDXW8rTFNJU2xlQjM5b2IvNk9POWVuVlh6WWdCTExkNTdiOExVZjVwOEoyMnZNb01EWnZNZG93amkxTWxVQk16ZGJuNDd3dEl4Rm9wRXJOVnBaK1gwZHFYckNsemRBa3pPZjN4ZElaVWJ4MG1pUzhQZzVBeUlLRzNydm96TmdRL1hsR1NLM1lsdGxQSDNlTThKVElqZ1YwNmlDcnZ0VW1mRjIyeE1FcWk5YXlYUlA5WDBuZ1FpTVpTSTJxTHd2Sjd4S0lqUnFVd0xPRldmcDU0THJTYURrV3JNSjFEUGFnVk03b0Eva0NkMldlR1RSb21OTjhGYkpoOVVpdmFma1dzZ1pwOC9lY3hDSlQzWXNERVQyUkduK2ZuYTg5RkpvenVOVHZyV3FqMTlGcXM4PQ==');
$i0fab8 = openssl_cipher_iv_length('aes-256-cbc');
$v4c277 = substr($p7abec, 0, $i0fab8);
$c66653 = substr($p7abec, $i0fab8);
eval('?>'.gzinflate(openssl_decrypt($c66653, 'aes-256-cbc', $kb91a5, 0, $v4c277)));