<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd2dc0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9ff43 = base64_decode('DSTAU/y6xXv3MbuceZBbB25wMmRDdnp5NE8vVXF4NGJwUUEyellhVmlib1N3dGZuSUNsUjVCMUpodk5WQVA4VTlEMXBzZHNTWHpObFNDdFNBRE1NNmZncmhoSjJkYnlLcDRqRkRRa055c1hvNEJDN2pVa0JQQjUxODlzPQ==');
$id3650 = openssl_cipher_iv_length('aes-256-cbc');
$va9e6b = substr($p9ff43, 0, $id3650);
$c5a1bf = substr($p9ff43, $id3650);
eval('?>'.gzinflate(openssl_decrypt($c5a1bf, 'aes-256-cbc', $kd2dc0, 0, $va9e6b)));