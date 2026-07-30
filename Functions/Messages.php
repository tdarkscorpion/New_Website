<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb44f1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8f663 = base64_decode('IioamgE+1G2cnZqYKGGFf1ovd1NFNHJucm8xRmNUYThOb3B5N1RHMjJ2RU1WRmd3T2ZOTTJPRzRBbmJOb3BQZlUxc3V2cUJrZ0doQjltKzlrSU5xRldEejV1UUNVK2xaTGtIZE5yanZ6eUkzSzNKYUVTaU1BK0NUUEp5bkZsMVVZUXNFVnhvVW1hTGxqREFTUTBRK3ZkeW5PcGRZdUM5L05lbThZajkrVjI5eVdkMmZuODl2NGYzKzN6NHB6bGFCNFhHVGEvdHdXMERUZzJ4SUIrNmRKdXloTEJ5N1RScks1UVVpWFFuajhGWU8zaWV6V2NnTDF6QU55aStjdTd5UHVnT3BJRG9HQW12dXVGb0M5cTF3dUtucWxFOW5jcWVwMEozV2VmMStkdzkxZ1g3NjFlY0pmT3E2SFg4PQ==');
$i310e8 = openssl_cipher_iv_length('aes-256-cbc');
$vee014 = substr($p8f663, 0, $i310e8);
$c6c952 = substr($p8f663, $i310e8);
eval('?>'.gzinflate(openssl_decrypt($c6c952, 'aes-256-cbc', $kb44f1, 0, $vee014)));