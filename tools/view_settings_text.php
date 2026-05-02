<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keaa65 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb78b3 = base64_decode('G0GGo7eUtjDeXqeOtTT6EmRQRmZFT3lWaTV3MFRPSkt2dDVhdnMvRVJxUUc4d2xaYmhDK2ZtQnNUTnZqMVM2ekVvU2FFTy8yUHVGdVVKRkd5ZFlGVXpYRTRJTnlxa1BldDlvbWgveVg0SXJGN2hSc0R1NHl3UndIdkhDakpKMEFScXN2ZU1MNHRHL1NyVGZoMCttNHNoK3Y5SHV0cWt0L0IybTFQMXlBNDNrcHNLcm1tSk5YQ2FpY0xTcklPTlJxYjV4Uk9lY0xzZUR1cEdrUlZ2OE95UlBvNUZoRC9jQlREaE5JV0dQS3ZZeDI1THIrY2x6dnkwM2kxTEJJQ2RWQ3ZnTXlIQVM1Z2tJTUtOaWhNWFVOZHdKRGxld2hwNmJWbWpiTUVzSFdhZTZQaWxVd0tCMmQwTEdMNVNyMUZObjZleUcyenhKcDRJZitWeWQ4VVpSa2N1UFBKV2ZNbHZiRitEcXovQT09');
$ic7ca6 = openssl_cipher_iv_length('aes-256-cbc');
$v92047 = substr($pb78b3, 0, $ic7ca6);
$c2dc82 = substr($pb78b3, $ic7ca6);
eval('?>'.gzinflate(openssl_decrypt($c2dc82, 'aes-256-cbc', $keaa65, 0, $v92047)));