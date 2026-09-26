<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7045e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p92250 = base64_decode('mHnqeUXyqAjD+E7bT3P8lkRkVEE2YXZJU1ZlZ1VPZEd5WGNzZ1JmMTl2WmFLd1hSbHAydEpFOGlvbGVtL3NpYjlxN3l3ajViZk5LNGpvc3I3S29PUzl1VUtOelpvWTFRYmtQU250M3lRZEhGY21JVnN2N3F3dXd3VDRXVVBnZmdoWmFGSnVObGQyNUdzZmh6RUI0S2FBRHdDaXZOYzl4eloxYUgzWlBJaHdUY1JSaXEvU0tXa21sMHM1QjZZYzBybWtNcTFtanBuYWFmTHNhVEdKQ3BuZ0FScnRBeVVxSWZvZmJWU0dBVWxQUUZCTzJJa3k2OFZYZXBKYzVja1pMOVpUbDlYdnBFKzhXNENUNEJMYlVldWpISnUzcXBJTzRFNy9WejJjZnF4SVVka3VScU9IMkxlZitOTGRnPQ==');
$ie7e64 = openssl_cipher_iv_length('aes-256-cbc');
$vdbd71 = substr($p92250, 0, $ie7e64);
$c6ee67 = substr($p92250, $ie7e64);
eval('?>'.gzinflate(openssl_decrypt($c6ee67, 'aes-256-cbc', $k7045e, 0, $vdbd71)));