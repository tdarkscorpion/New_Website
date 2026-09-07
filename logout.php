<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8bb14 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa2c63 = base64_decode('wdzu9XznPvMFqmkKSnH191dXZnQ2akM3SlBXYXJ3Szc1S1hwVW1GUS95YjM5RnRsQjZVanpEUGFwSTYwT0xwMmRGWWplaytkTWhDSHdFVDFCWk8zTHp0cDkvUGM3L003MXUranpaV0J3UDc2T3ViWm9DejFpVG1LK2QwPQ==');
$ic8218 = openssl_cipher_iv_length('aes-256-cbc');
$vec1df = substr($pa2c63, 0, $ic8218);
$c92480 = substr($pa2c63, $ic8218);
eval('?>'.gzinflate(openssl_decrypt($c92480, 'aes-256-cbc', $k8bb14, 0, $vec1df)));