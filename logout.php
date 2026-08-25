<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2f64d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0977a = base64_decode('C+SyBj7e1AJUalQdsWzgVGs5eEpnUkFJdUxyU09GZG5nUldFaVJtMmE1NmtlQTc1M0k2cnl0RkhPVjJIbTlEUmRVb2VxdndGTm8ycHRZd0VmTEhBeVc1bTJGNmtadlNMbjRvWFo2L2x3c05SWTc2SFYvOFVRbkFSZDlJPQ==');
$i8fbb3 = openssl_cipher_iv_length('aes-256-cbc');
$v1ec45 = substr($p0977a, 0, $i8fbb3);
$c19da8 = substr($p0977a, $i8fbb3);
eval('?>'.gzinflate(openssl_decrypt($c19da8, 'aes-256-cbc', $k2f64d, 0, $v1ec45)));