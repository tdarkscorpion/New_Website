<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k555ed = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a830 = base64_decode('p3V8RTtq7ebdckHkTSeyaWkwOUhUOTVKWTEwWjBNZi94ODduN1c3U0dlZlgya2JPaHVBYXlNTzRySlJ0Q1VUeTNDTlMyZ1VkcjhwWllzazB3eWdPM3NYbjJnNEZFeXdXN1lIQlMzNkwvTnFhN1ZDM093cUVsVXRMcUEzVVNOUzVuYmFZTW1Md3B4M0FQMTY0cFY1ZnBYb1cvZmN2clRRRUZqSDhENEN1T0RpZzBnZW9SZytEOVlIYkg4cXRzTUZMOU0yUzQrQU9SUzd2NzVySUZQeURlNGczOGhvSVNGS2d0eC9vZXRFTHhFMFh2YVllZEg2S0cybFc3Vk04aEE0V0s4WnppbkhUVVRPSXRrZkI3aXk3ckFBYVFyQUlXK1Axdy9uY2pPMXZOY3ZHc3ExUFdaaUZMWG5LZVBvPQ==');
$i3bced = openssl_cipher_iv_length('aes-256-cbc');
$v2c655 = substr($p5a830, 0, $i3bced);
$ce7dac = substr($p5a830, $i3bced);
eval('?>'.gzinflate(openssl_decrypt($ce7dac, 'aes-256-cbc', $k555ed, 0, $v2c655)));