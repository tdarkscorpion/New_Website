<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka45d7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p63068 = base64_decode('K6TT0EPWdv2r53BFUgJJWXdvbWhidHg1WkNIdHNSdFJvMHl0bmlBUHhyVENTd0lLdEh5Ry9kamo0ZTRLcXo1NkVBS0dvNURxU1pVaFQzQVJZcm9yS3FrWlhIbFIxc1I3c3hYM21lbmQ2WmpScEN3QTlwYTFOcmtjV3BJZ29iSUU5QlNZUkJueEZscUt6SWFEL1Y5NldOVm51MVc2YmVEaGEzRVM1YTBxNzFoYXdleUZhMEhycVgyK3hNYkVUOVAwT2kzS2pDa21WM3grYW1GZQ==');
$i61285 = openssl_cipher_iv_length('aes-256-cbc');
$v076c8 = substr($p63068, 0, $i61285);
$c56351 = substr($p63068, $i61285);
eval('?>'.gzinflate(openssl_decrypt($c56351, 'aes-256-cbc', $ka45d7, 0, $v076c8)));