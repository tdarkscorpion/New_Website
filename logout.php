<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kafe6a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7047c = base64_decode('9EibZrxoUiP9OummVmJWeDNHY3VVVDd2OVNzM2ZZRFNPcVBmMlR0YUpUZHlCam4yV2ZrcnpwNGJ1d1ZkU0swcENjOHVqbnhna1JaclAxU0FrQ2tRSXJuVk16M2laVFVzaTY3T3JScHRDL3lUSHNldjBTY3dxaTF1cnE4PQ==');
$i51980 = openssl_cipher_iv_length('aes-256-cbc');
$vb0cee = substr($p7047c, 0, $i51980);
$ca9efd = substr($p7047c, $i51980);
eval('?>'.gzinflate(openssl_decrypt($ca9efd, 'aes-256-cbc', $kafe6a, 0, $vb0cee)));