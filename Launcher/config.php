<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbdf25 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe1071 = base64_decode('wtekep1R395MGpkN4yRcmEw0cVlNdDdYWmo0RHRJbUdEZkdaRWx1WS91bVR0Q0tUeVJWRDRmbVVDTUhkc3A4WWtvVzlhU1pHNWVxVUZRRDIyQ1RYbmJDUVZ1SXpyOFBYakFoZVpRWnNRTE9Tdkt4USt1WU54QzA2Y0lLQ3I0OTlrKzBuLzRUeU1PTHV0amJRTDdvb1JiMEFTWDYvRHV0OVVjenpWUUsxM0dvTjYwdVlMS2MwRG9YMHIzMmo1Z0JyanFjNjlqNUV6cERJWFdDZVdVd2MwQ1lSSWlvWlhrREd2bVp4eUNwM0lVaFZjaTI5YkJRaGpaTzhIdE40cmIzT0MvZVRUV25XTXFTVndReFczdmVCQUlhRXJYM0JqaVRsaFBsUkNCUnNwNWd5V0pHeEs3elFQRnJ4ZDVzPQ==');
$ia450a = openssl_cipher_iv_length('aes-256-cbc');
$v58d95 = substr($pe1071, 0, $ia450a);
$c1eef4 = substr($pe1071, $ia450a);
eval('?>'.gzinflate(openssl_decrypt($c1eef4, 'aes-256-cbc', $kbdf25, 0, $v58d95)));