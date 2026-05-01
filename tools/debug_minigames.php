<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3b88b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3d5ad = base64_decode('eBI5kZcBD3jRn+RiG93wdUlpN0o0MnBUdk1TOVQ1aVV6TzJmRHRaandRbTBVN3ZYcjQwMCt0LzdZZ0tYUFRvcm02WjN1NDlEZ2RxYWlxVittU1dIV3loUXh2amxyejhaTmNyZXhJdS96WHZ2TFhMYnJpQzhPWUcrZ0ZCK0tMT1hJdElXL3hvWUc4T2lWcXNabVd3Rk00b3lJUGN0Q0VpQzZibnYxVjMvQlBFT2Rtc2hCUUJuTjlyMjZqU3NmaTZKTjFoNzF1U1drQ21MYlI1ZkM0TE1mZEhKRm5hY0NCbGRlNGFkeUZkdFJyUGVOTTFBNnJGWlFkanFDa25ITDdqOHlOL2RhdGM0NUgrYkhlWmFGNXdscXlaY3hDbmI0VDFCQ3dzOHIzK29nN3J1RlNKajNxUU1CT0k2clg5RkpCMEtXT3dtRUUzL1VBcWlsWThnV1J5emhiZWV2bFJvQ245T0Z6ZmFaQT09');
$i326dd = openssl_cipher_iv_length('aes-256-cbc');
$v07632 = substr($p3d5ad, 0, $i326dd);
$c91255 = substr($p3d5ad, $i326dd);
eval('?>'.gzinflate(openssl_decrypt($c91255, 'aes-256-cbc', $k3b88b, 0, $v07632)));