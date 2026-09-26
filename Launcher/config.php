<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke5aa1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfc315 = base64_decode('H5Kbur4d3c4w3XTmb2voHldTMzJydGRXVXpXSDdkRXY2RkpVQ2Zlam1nd0VjYzBFa0l2ZklPTkxzK01VMzA3QjRhRkVOMldZRmpJU0NoZWVpZ2R1OHI1N2R1eHlsRUlVYTJiSlREMlU0UXVMMkxBZ21tQVU1NjFLSUI4NHNsQ0YzQ3h3bTFZNzVuVWRnQmFDbmJjdmpMenhiN21BVm9nWU9PVHo2cm1pclNickxwWHBidFRibUlsMUhCN3EwQ0hBcFhXckFtUzg1Q2ZJajhUbTFEd1lwVVgyZ05mV3dxVlBnM0w1ZVFDaHlhYnRzU3M2SVAyc2R2Q3ExMFlBSDlPdU1ld3NJV0ovakhIbEdxSlNTRTZWM3JQV21ZVnI4SGt6NkpnbVRwbWw1dmtHL0lHK3FxbHFZQ212KzZzPQ==');
$ic0ab3 = openssl_cipher_iv_length('aes-256-cbc');
$va85ad = substr($pfc315, 0, $ic0ab3);
$c96a56 = substr($pfc315, $ic0ab3);
eval('?>'.gzinflate(openssl_decrypt($c96a56, 'aes-256-cbc', $ke5aa1, 0, $va85ad)));