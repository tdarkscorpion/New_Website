<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka6fa9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe1d21 = base64_decode('m2DaFimNmXrHmTaxLwQgOkFQUllPekg0aW02MWFrMU82cXJzRXdIZmNQYzMvVW9UWEk3WC9MTlE2dnh6Tm4vaEVuR1FaRyttRnFkRU9PTGtpSE9iYVlNbWVzZ0VGNm5ZS3N0OUJYVUNIMzdQOUFFZ3RJZGFpSnZSNkhzMDRCN0kwbmd3eGJ0YkF6VnZQV0FIQVhXdW9BV3pzcVhyNUdpY2RVSU5qUUF0WlNrbXl6REVueXZwMWhTcEp5djJOSkNialFaRFZtUGtySXNhS2VuenFmSWpkODNBMjBzTU55OW5pVzMvcStSYzRjYXl3SjZRSFV5UThOZTNCSTVEV3IxSTkxSWU2NW11bnhub29CdzJWWFZzWGdrWlF2WUE5bXJ3b3dFQ0tuNmk2UVc5RGtMQTMrbU0xNG5ZSnU4PQ==');
$i694f0 = openssl_cipher_iv_length('aes-256-cbc');
$v4b3e5 = substr($pe1d21, 0, $i694f0);
$c4d7df = substr($pe1d21, $i694f0);
eval('?>'.gzinflate(openssl_decrypt($c4d7df, 'aes-256-cbc', $ka6fa9, 0, $v4b3e5)));