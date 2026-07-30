<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0fc14 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9e99a = base64_decode('QhltJ4xakKZqGoJVrIwfF1lwdEhYY2tiUW9aQTdGa2dHZ2Z0YWRURFBjdDJtMDc2N2NQU0lURHQ0dlNIVnFrcGVnMkprdytmdEdsTmVNMGlvNlo5dHVNWGozVEViSWRxTkVOUnlKNkVBR3VJTU51RVdyZ0FvekdoK2xjMjZPZzBhT2hJUE8zN013aldEdk5iRnNQWUpSNVdKNlpHbHFTc0EwZUgrVXlpMUE5OUQ1d3Erd2dFUHlmMXRDTUZ1ckRvS0k2a2JXSytDeThHMm14U2liUmRFZkdvSXhNcDdlUXpBUUhNcHFGWk02VTJ6N2grM29PWGtRQzA5YThzTWl0andicGRUQjMrQU1UMkEySW4=');
$i39675 = openssl_cipher_iv_length('aes-256-cbc');
$v0aecf = substr($p9e99a, 0, $i39675);
$c2cf20 = substr($p9e99a, $i39675);
eval('?>'.gzinflate(openssl_decrypt($c2cf20, 'aes-256-cbc', $k0fc14, 0, $v0aecf)));