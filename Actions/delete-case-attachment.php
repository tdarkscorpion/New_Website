<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k90910 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pca993 = base64_decode('FppAjd+CsA6swbkcUdPUqHIxTjFXWkZnVlFaSDBranFjZGJsL2FMbTJRbzlyZ3hOOE1leTNwTVhkMmxablRCaTkxS0NpVHh1R2dseWZqT0tvM0R1Z2tlc0MvSXYwKzdXMFVZRkRsZ3Jzc1RjeDdKTzlBTjh2M25QYXBoSy9KRExXWTh2UTd1Q080UHM2T0ZFYXhId051Q2hCSVZtN09NbWNaWnh2NFNWNEZBQkdpVEFPU1pWdldsTERFaGdRRWNNdzh5L2JmR2c4WG5ZN1k0M2dTdmNWZFo0cHprNzB2SXFpcGhhTFIzS1ZrekUwZWJzbW0rSGVPdHlEWE5nRzBMVlpUb0hOdnowcTNwYk1iRFExd3d3TVNKZTZENVdNSXFOMWNhSVVUVDFIblJnNGZXRytYY3NzVENvOFcxOWhmR3ZJOXM0cHFuT09PZXhzV3NQ');
$i00677 = openssl_cipher_iv_length('aes-256-cbc');
$vfa10f = substr($pca993, 0, $i00677);
$c9c7d3 = substr($pca993, $i00677);
eval('?>'.gzinflate(openssl_decrypt($c9c7d3, 'aes-256-cbc', $k90910, 0, $vfa10f)));