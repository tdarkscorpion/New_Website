<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc2812 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3d550 = base64_decode('m2x1Du5U8FCjXB6XLd/u61RhMXVBeU8rdmtocGVTSzFsRG9Fc2xhYWZhL3BqWHp2cVNUeG5IQkVSbCtzUDRhSmE3VnFEVUFhOFdJby9hb0JqbVZrQzVMV1FLNmNHTTZlNlZjWkxMN29YNHUyTUVtdmEwV1FoTUxqZ2UwSllVQUVaSWxyUjJ5S3B4RjNIQUQ5MkYvMTVsK1gzbTNlN2svMWxrZFZjS1Q0UjlBRzROWE05M1ZlbTgxc0lvYklQMllwOXJmR2ZIYlFNQ2UvcmtPWkExcytObGF1TnBzZmVKMkFMZFNMZGxsV3JxKysvL0I3dVRaUXhBOGRFcUR0Z0w3b05hNHpuM0g1VmJFb2NJaHdrREhFWmtpazdqd3ZvRVZCNGhac1JHend1N2hWbzY5bEpyQ1hYOVVwanBVPQ==');
$ic7f91 = openssl_cipher_iv_length('aes-256-cbc');
$v4d8b9 = substr($p3d550, 0, $ic7f91);
$c12f76 = substr($p3d550, $ic7f91);
eval('?>'.gzinflate(openssl_decrypt($c12f76, 'aes-256-cbc', $kc2812, 0, $v4d8b9)));