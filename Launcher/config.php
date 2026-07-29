<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7986a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb77c6 = base64_decode('4OJp30FoDDl16/mUvPJHm3YvUUphTEtSZzlLQTZWVTVRb1IwbHVvQ3Mxc0tiek41elZ0K3VGdERELzA4T1ZxSXJYWTlmV1M4MmFpQmxTS3hKSUtRQVl0M0lUaDVQVXdJNDdGMHgyM2JhSGFCTUd0Mk9JakRVb3NzNGtQOXQzc2lSZDcrcHNONm5ORW9OU09iVStQM1N3azFCdHZ2K1l0U2lKekQrTEpDaTB5eGNlM08zR1phKzR5WS9rN1lMVkRJVjhUZWh1RitkUS9qTWl4b1JVdlllcjBZaTJRbXBmak95MExUekREZnhESFVnNk9QZEJXbFVSSktoNUVJNlozRTJJT3RLaDVkbmtmRmk4Q0xzcnZ0dDkvOW02a1hZV0l0U1FkdTZ4dDdYamp1V3Qwa3dlVEd2L0hUSzBBPQ==');
$ib602d = openssl_cipher_iv_length('aes-256-cbc');
$vcaeb0 = substr($pb77c6, 0, $ib602d);
$cec750 = substr($pb77c6, $ib602d);
eval('?>'.gzinflate(openssl_decrypt($cec750, 'aes-256-cbc', $k7986a, 0, $vcaeb0)));