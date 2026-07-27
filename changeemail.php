<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka8955 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p65ee6 = base64_decode('Vpry45WNmC8CRrRt8cTEknJMV2FLbTZHYWVtcDcvTDhiYXQzRjN2b1BPZGs5SVhhMnlkNlI5VjJHMlYrdlF6ZGwvbzVHaGMxbkFhaTZtbHV4dmQ1WmZRTzJuRk9UR1dlamNvKzJleUVjTUIxZDRRcXY2YnlvSlRoKzZaTWhobGd1UVJtTDFmekhtNVNjek9USWY4MDBvd2dGb1FtTFk4eEZ4L1RwVzFHUkhpdkdNaU5SeHQxQ0hYTU1vVkhibjBmSlU4S2I3blYwK010ejZXcUEreUlDR3ZxWWJlWjNvbEpRMlNCdW4zbnl6NzJrYisyZ2dvd2ZXWHNGSkIxK1NHbG1sMk4xempjQUtucHFpdGYwckhNNnhkYi9jOXBCaDhJdGVRaFBVQnFrMnczd0Fmd0R2U0F2UUU0eUdpcGEvOC9FY3R6Q1VDV2E4UnhsSkNadFBBYzZTNkg5Q2wzTmZOWXlVTTNFQT09');
$i96d1c = openssl_cipher_iv_length('aes-256-cbc');
$vae707 = substr($p65ee6, 0, $i96d1c);
$c31753 = substr($p65ee6, $i96d1c);
eval('?>'.gzinflate(openssl_decrypt($c31753, 'aes-256-cbc', $ka8955, 0, $vae707)));