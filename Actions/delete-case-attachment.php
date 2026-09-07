<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k34648 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a7fe = base64_decode('NkB0VzgGI2vhdTwDCD6gri9Tamo5RXFJMERvNSt0MW4yZUhKczNydGxWNm1xbmRrRExKYm9XYVZOUDk1RGxiajdZV0JWS3RiRHlMenc4T2FWdzVqVkxqNUI0c2tUVTMyWXcwd2hYK2g4eUhubGZsUzREc1k0bVI3RUprd3phbWZGMkcrRHJNV1c4N2llNWdvVjZFazZPcUxZSVdZWVZQK0ovNVZvQzlnY0pDUm94eXQ2KzVmdDZvak9JNXRRNXZGeXIzRUJSNytXbStQbzF3bEtjcG1YNXNlUUhDU0xYV1d4QmhyaHVPWVdjWDFLeHF1eFE2dDZKOEJWTitwTE1zVk5BVkQ0Y1NJVmdERUlFemdsL0gwL2V2S3Y0S21zWUpldUE1ZTJUNHdMUmZuRmk1UlJVNUFPcU1DNDFRajRYMkxXYUZ6bTc0bHVLUFpTc0pv');
$i34d62 = openssl_cipher_iv_length('aes-256-cbc');
$vdd7e6 = substr($p5a7fe, 0, $i34d62);
$cd8b99 = substr($p5a7fe, $i34d62);
eval('?>'.gzinflate(openssl_decrypt($cd8b99, 'aes-256-cbc', $k34648, 0, $vdd7e6)));