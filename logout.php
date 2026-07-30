<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kda200 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb9ea4 = base64_decode('roIZuDEy/UAP+E9NZFFBhldYSzNudmJ5VUdxaVVNaUh1RGpTRGNuZHVNTGFDWHVvNUNjZXlaRGYzM1p2THRNaWU5ODBTbTd0Zmo4SjZvdkw5RmRjdFNPVTJoTTFWMTN2aGtaRVZDQVd3emY0MncwaGpNdmx5S3JydjJnPQ==');
$i0204a = openssl_cipher_iv_length('aes-256-cbc');
$v2c2f5 = substr($pb9ea4, 0, $i0204a);
$c656ed = substr($pb9ea4, $i0204a);
eval('?>'.gzinflate(openssl_decrypt($c656ed, 'aes-256-cbc', $kda200, 0, $v2c2f5)));