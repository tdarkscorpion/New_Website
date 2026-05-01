<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kec84f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8b197 = base64_decode('dq6IOgW1hM+i8hFGuAQbRExVMXVXR2tyT095Q0NRYk53V3ZwdHA0cFdHSE9HaUdaZkU0cnhmQkVCTTlkY0NZZ0tNdUdBRVdOSlA2dDY5a0NsakFOa2ZLU0NyMW9MKzU5TFFVWEZWTzNTb0lPVUo0aXdYd2VFZ3FLWE53PQ==');
$ib23fa = openssl_cipher_iv_length('aes-256-cbc');
$va7a79 = substr($p8b197, 0, $ib23fa);
$c47cfd = substr($p8b197, $ib23fa);
eval('?>'.gzinflate(openssl_decrypt($c47cfd, 'aes-256-cbc', $kec84f, 0, $va7a79)));