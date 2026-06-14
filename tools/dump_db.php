<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3e760 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe8bc1 = base64_decode('tepRpLLniHB7GK1YlBeQEGJjMWFRaGlwRlRGc2xXS0ZaQ2drcStFcytYbm1GcEtTN0NDTGpMOTVjeC8yVU1KQnZFc0d0Ym1hTzltSlB2SnVTK2Iyc0FqOTE4ZTV6a2pLcW50dU5udjRFUlFhbll6T1ZEVk1ibWN4QzlxY2t0YWZESVpQU3F6OGtwMFM5S1ozRStsMTJPckpOOXR2eDdpa0IwRHdzS2hSMWFmTS9IeGJZWkJKaVF3QkNOYVhVRU1kcE1UcHZDV201cm5Bdk9TK3NsQm0yMTV6VXF6UDNSYnR1UjRwVnc9PQ==');
$if22c8 = openssl_cipher_iv_length('aes-256-cbc');
$vec946 = substr($pe8bc1, 0, $if22c8);
$c4ce83 = substr($pe8bc1, $if22c8);
eval('?>'.gzinflate(openssl_decrypt($c4ce83, 'aes-256-cbc', $k3e760, 0, $vec946)));