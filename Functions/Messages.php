<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3b7fe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p288fd = base64_decode('O+tox7SwGAQAOkfD3GJaglU1MEtZMExLNk9tRlRMQm9WSFp1aml0T2lOMHJWU21qZTdDWllzbForSk1xM3ZLOHVZRWU5N2luVXl5dWJwb0diQjBSMWtBNm9aLy90NFduOG51NmxlWnU0KytuenRXQzBWS1ZxRUtTcUNKc2c5ai9vOEYzVWM0bU8zRy80S3I5dXJDMlNCSkp4QzkzV0ZGSy8zbjlncVZnQmYzM05RKzREQS9kdzFlMlk2N21GeklWQWp3cldpWUxlWHRKdE0ySnVkS1NxNXI0WWFWd2lPYmpPMjBLbXpBRUhhdmN3Z1pYZVFVOVQ2eE1RRlIvNnZBWHJOWXNuMEJWMkxHSXNqWUE1ZXJrS3BKTGRlU0UvNVM5bXA3RnFNY2ZpeE93UWs4a0o0Z0FiUkZzM2xFPQ==');
$i4e11a = openssl_cipher_iv_length('aes-256-cbc');
$vc7bac = substr($p288fd, 0, $i4e11a);
$c41e75 = substr($p288fd, $i4e11a);
eval('?>'.gzinflate(openssl_decrypt($c41e75, 'aes-256-cbc', $k3b7fe, 0, $vc7bac)));