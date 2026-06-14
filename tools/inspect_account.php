<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2fd60 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf5085 = base64_decode('BEM3rvzmdWVejwY8LL5k5zN0UFJXM3hUY1ovREhzelBZSDFRUXF4aVhxQzFkVENLTFhjVFJkbFdLZzFGQXZUdUxCcVIxRmFFWGgvVFdLRXVtYW5DRXd2cExFdWg2L1NkM1ZoUzJFQlRyRXVDR3V6a0w0cnpzaUZpVGU3dStTandPK2xHOXRYNVlXYmlJZTBFL2RDM1BIL3M4V1JPdUpKcEdQRGFURzZMR2tXK0FIN3hDRytEN1dDV0FteG82U1VNN3djZW4zWVFSQkZGR01vNg==');
$i20f83 = openssl_cipher_iv_length('aes-256-cbc');
$v090e4 = substr($pf5085, 0, $i20f83);
$cc6f1b = substr($pf5085, $i20f83);
eval('?>'.gzinflate(openssl_decrypt($cc6f1b, 'aes-256-cbc', $k2fd60, 0, $v090e4)));