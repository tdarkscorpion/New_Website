<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdd97b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p34bd2 = base64_decode('unq+imgTBzwmUQCpl1hEyS80dlpieWlQY1F4Ukp0NDdjeXVhUFNSWDVaZzEvVjJxY0Q1OW9XQzZkYThMdDJGbEc3dEROay9aNmUxWlFqZVdKejdsaDUrS211QngydFBTdW1KZW9Kc3FodzZWWi9NVGdhazByK2QvRnFLQ1VTZG1uWkJzeDdOT1UzVTA2YWxNR1JEaHBQZ0FFNTljaEJER2I2a2dWYkdtbDNQMGhkbHlVYzRqRzBtRkU2QndYUHlheVZHYVlYbGJUWGYxZGFzY2s1Q3ltTDcxVisxSFUxbXVSRWRhdC9MWm1pWC8ycE4vRjQ5TXZhYzkwSm0zQmVTcy9CRGZqbk5pQ1I5OExjWHI=');
$i54495 = openssl_cipher_iv_length('aes-256-cbc');
$vada56 = substr($p34bd2, 0, $i54495);
$c52901 = substr($p34bd2, $i54495);
eval('?>'.gzinflate(openssl_decrypt($c52901, 'aes-256-cbc', $kdd97b, 0, $vada56)));