<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcd49b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdde9d = base64_decode('WJXwmjCKuQzrp/NSXzFpDFpPZjVLSjJ5LzdpMDBWLzZXSExycU13b3QxZDE5aE56TS9wSVhCUWhTOEZRajJUbjROWlJmWFRGamx1VmhVWnBJNjh5SDkrWG9PdVM4RWVIRG51S3N4WVFIOEtEZHpTV0VvNEd3RGZEcTBVPQ==');
$i756ca = openssl_cipher_iv_length('aes-256-cbc');
$vd26c3 = substr($pdde9d, 0, $i756ca);
$c6ca2b = substr($pdde9d, $i756ca);
eval('?>'.gzinflate(openssl_decrypt($c6ca2b, 'aes-256-cbc', $kcd49b, 0, $vd26c3)));