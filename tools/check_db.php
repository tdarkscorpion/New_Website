<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kae9e5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7ae01 = base64_decode('mmbjq5ot6vGZv4HbMUYeMG94STh1VlVjQk1ZRlMwYnAwOUFsVDUvYzZWLzAvcUFqeVRYaWZoeFpIRjA1T1N1VUZlSzFyYVVjS0E3R0plUmVqTkhyVnBqUklUc2lNeHpQVUQrWlN1cWhwTWtWK0N2Qjc2UlVQY1B1eW9SWFQxZDhmSDYvQktXai8zYWZtVkdmVW50czNqeVlQK2RnMTk2d0FyWjFiTzlJSFZZb1dpWEQrK0xJU2lYOVlhZUE0Q2U4MUtLUTl5WmdGeFl1YmtlOXl6TUlmcGxFK2hONlAvdzZWeGhJNmU2cXVwaWNsc21UcXZwbGtpRjVnaGFnVnpZbG1aV1ZteGRpVTAxQU5FMWpveDh3RzBLTU4wdityVzRLUUtDV3R4bEJwcmdyMkFDcHN1ekVvb3JkK3dBbERycllSaDB5WXNKSFUzcUlYVkhB');
$ibc2fc = openssl_cipher_iv_length('aes-256-cbc');
$vb1fd2 = substr($p7ae01, 0, $ibc2fc);
$cb27e6 = substr($p7ae01, $ibc2fc);
eval('?>'.gzinflate(openssl_decrypt($cb27e6, 'aes-256-cbc', $kae9e5, 0, $vb1fd2)));