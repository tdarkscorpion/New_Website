<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k93405 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb88e6 = base64_decode('fHVDgBcvmVO7h3+hkFezeEtCOTNybFVETThpRmlWSTg1T0ppSVVTcm80Z3h6NU5GWThiMHhUbW1UdTNBZmdsMG9KaUx0MHo3dWJsY1pUT3Z0eEl1Sk9jMmJaM1JtRU1aODI0dEtlZ2t4MmY3eEJONHU4Z0JYSzJLNFJlYm1KdXo3MXI4SFJYL2NmVkIxUDBKTHlXL0toM1pzMWxhZFVXOTgrL09xdWNlMDhjaS9BeVdOQXgrZkRnRzZQRlhwSHdSSTZhYmlPclVONGlxZEtQNjBnaUxqTmliWTVkWVBLbC9qRnZHM1ZUTTZpekswdklKRTc4ZTNkVlN1U3NucmE2c1hZK1dmTmRHcjMvR2l0WFJHSXIzSmFlNFNiTXFaSmlRTm9iYndlM0l0Tko3UUxGUy95L0RxZ3dPYWc4NzBENUdNZ0VyLzN6aXhld1liU2s2');
$iacb0b = openssl_cipher_iv_length('aes-256-cbc');
$v724c6 = substr($pb88e6, 0, $iacb0b);
$c984f1 = substr($pb88e6, $iacb0b);
eval('?>'.gzinflate(openssl_decrypt($c984f1, 'aes-256-cbc', $k93405, 0, $v724c6)));