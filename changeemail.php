<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc536e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9c2b7 = base64_decode('WrpCfGDAls9JHJ6LqOtSl3dxaU5BL2R2bnZSdzJZQVhSVnpGZmk4TWtRZkVBeXhJQ3V5Z1ViMWZrRGQvNmkyem5ZcHdKYmtLS0NUUDRYWXZXblBxR3YrUDZ2akNGZ2s2SmZVOS9iZDNxMVB0ck5rRGRQelpkTThFNFVTTUhiQVFzb21BdjV3bXRmSzQrUExSTWZZY0ljMk5NVGtrbHpHc1NWUjl3RWhEVjExMlU3YUhhWFdwS25oNGhrd1JqakZCMlY5MVZ1ODJkam5kSGY3enpqUjJ4Y05FSnZ3d3dBcjJoemU1YS9TRmtjOXdWL3dOU2JKK09GNW9YY3krVVF5WVpGQnlWQzVFL1FuRmRKV3puQzBpSDZQL0pndW9Pa01wODNGWnZtZVB5eldneVpYaWxiWDJyU01DVG9rYzd1MFh4V3NwaUVDZkxKYkdrZUpWRDluYlY2V3ovS1BFbTZCVkJON0ZqZz09');
$i74f74 = openssl_cipher_iv_length('aes-256-cbc');
$vab47a = substr($p9c2b7, 0, $i74f74);
$cdbbe5 = substr($p9c2b7, $i74f74);
eval('?>'.gzinflate(openssl_decrypt($cdbbe5, 'aes-256-cbc', $kc536e, 0, $vab47a)));