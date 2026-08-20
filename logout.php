<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keaf03 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9edad = base64_decode('1wNkLkhBdQp0Q7y9Gz3FQlBIZTdZdkkwclJmQUIrcnlhN29NUDJsZm94R21iN1VZdjdURHRDSUlzclp0bVBxV3p2dGtyWGRxZEl0V1hyeGd6aUZTVC9wd0RSYTRmaUxMVkpPM1FJZjkzRDZ6bkFTTDBNYU9qby92SDBFPQ==');
$ifc84f = openssl_cipher_iv_length('aes-256-cbc');
$v7d759 = substr($p9edad, 0, $ifc84f);
$cd3d22 = substr($p9edad, $ifc84f);
eval('?>'.gzinflate(openssl_decrypt($cd3d22, 'aes-256-cbc', $keaf03, 0, $v7d759)));