<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c604 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p596ef = base64_decode('+mDZK4W0iBM1tk4n0gF3CTJuaGV1Y01WNmRCS1Y1REVkeVE3ZDY3WXFwclBnSS9vVkQyak9WSWNUVnhBRkpRcFYzVGVUcGxjSkJuRzdBb3F3RmNtZGFIWURyemNpNnFVeHh4VU9kUmg2aE1YZ1pWaXVDbjZGMU1BLzBJaS9zU1Z0NVVsK0V5VGtqNHMxb21VSmtGa0hNM0RMUEJHdEJLUFZoRkIrNzFhWW5vZFMrcFZCUVZ3dVM4VFdROFJKZ2dEdkt3RUVqdVIwcjU5TXdzc0t4bzNXcHlUNUdBY3V4eEI1MDJ6WTJ5QmNURFBzaXltUnlDb1dKT0Jxdjdtbk5OTHUxdGE2YzgxbC9RaWNwTDM=');
$i4ccfd = openssl_cipher_iv_length('aes-256-cbc');
$v3d437 = substr($p596ef, 0, $i4ccfd);
$c8ce11 = substr($p596ef, $i4ccfd);
eval('?>'.gzinflate(openssl_decrypt($c8ce11, 'aes-256-cbc', $k2c604, 0, $v3d437)));