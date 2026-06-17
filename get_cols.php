<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k83d59 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p59789 = base64_decode('myJ6vBiany1Dj466RzWMx0lyaGlHVmpYbXh4cmFxNHVDRlpBUWttZkVvTmtNOXRsUXBkQ2pZcUhwUGVkQTlOdlpQT1JPQkJZanZzOUg3M0dzKzNRZVdSK250a0dpTXNpS1RGdXh3c0F1eDRwaXZydkRpcFUxTWIxZmtocjRQcjVVd1NXejQ3S1kwc1h5dUJtVGxHTG1HaXp0OHhVdlZQeWh6cFlEZGM4Z01SdzFDN0dwclcvMHRlQVlpOVpOeHQrQUJSVjNGSTJXSUcwVklrOGR4SGtFSE5OT1k2VVV3clR1QnY4Q3c9PQ==');
$i69b01 = openssl_cipher_iv_length('aes-256-cbc');
$v1772b = substr($p59789, 0, $i69b01);
$c59b0a = substr($p59789, $i69b01);
eval('?>'.gzinflate(openssl_decrypt($c59b0a, 'aes-256-cbc', $k83d59, 0, $v1772b)));