<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4f3a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p659a5 = base64_decode('O30xt/h3GbogJFX2rhFW7TBwVGphWXF0TDhsdS84SVUrZXNMa2hwYW1leVJBanpONU1vV0Z2QTRLa3krZUZ6eDU0SHFJcStydzlubFp5N2xSeDFBVDB0Tm1hK3l3QUlSOE1NVGp0dkMxeE9KQ0hOTnczSEp1b3g5eTFIL09BbWdnOU5uMEN1aWVRbXpjSWJHNGNDSWZ1STlJRUszREp6UDRYa3dyU0tCK25jRnU1L3JiTm4wNXlhL09Ndi9tekhmREhsRGl3ZHptMWZJekdJWFNLdFVCdnRodWF1SkhWN3VEcTdkK08yeEdEZFVzTzJjWktyaHJDY2dadWswOGM4SXcvcUZhcUVrZTR4dURBUHpxcnFZVERxY0xweU9jOUdxSGwwbUhTcnJtdHNZaHFWQndtbzhNdUNqaXNVPQ==');
$i85ae7 = openssl_cipher_iv_length('aes-256-cbc');
$v12390 = substr($p659a5, 0, $i85ae7);
$c795eb = substr($p659a5, $i85ae7);
eval('?>'.gzinflate(openssl_decrypt($c795eb, 'aes-256-cbc', $k4f3a5, 0, $v12390)));