<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke5d0f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0a219 = base64_decode('ZNX54WNrQlLt9XcOm0+NRlJYeTJta1J6V2JtVG5uOUQwRnEvdFBzSS9LdDRiQlllMDlhTit6OWJEWVZoUnVWbzZsNURhZTVvZ1kxNU9HUTQ4emdKdEpIWktqMEQ0Y0l2V3VJa0swTjRhbUhTZElraWtKUmt6MlB5Rjk2d2hlWFpvYS81K0xzMjVzL2pZZmlVVXh4Rlc1VjVPTFk4MzYxSTV3a1RHTk5adk1mNzBGTjJ1OTlyenBUUzhGUjk3WTU1YUVmYkJ3Vjl5dkxoTStqSGYvTWVyUnE1QXpENEFkbmtSTHEyY205Yk5sWHpCRmZIY2ZBVVJvQ1lxTkwwemlwWllZd0JiQ0xMbWhxTXhIeVdVb3FRNU9LK1hZNW54QVJ3dlFlTjBnaGcvNGk2bXBWWlhvYTFqWndKNW1YZWtYbzRrTSs1a2ljQ1NHOGpEVHd6');
$ic9b68 = openssl_cipher_iv_length('aes-256-cbc');
$vfbdd7 = substr($p0a219, 0, $ic9b68);
$c2f103 = substr($p0a219, $ic9b68);
eval('?>'.gzinflate(openssl_decrypt($c2f103, 'aes-256-cbc', $ke5d0f, 0, $vfbdd7)));