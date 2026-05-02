<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka6127 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p13e12 = base64_decode('w+vLIUiOAlqpkxpCqQ3NUFgzelp5RVNEUnBqa3Y4NzJuMnJkbGRKR29nNENhT2hEREtNa1l5QXFTeklmdWV4M2VNalp5bXZOU1A0cE9qVU5HOUxDSk1USkppR3FNUm1oRzA0bWJJbEsvOVovTjZSd2JwVWkrQWM0MThCcnV4eWp0VnBvWkNNMEZLK0xpUU9WTThFWWcyMWY4d3FuL3dEUnRXS3U1OGw4RVI2M005V0ZtckJsZDh6TnNvUjlWZlFYalhRUzNqZlg2TXM1ajZqVnlHMnBuV1Z6S2RtR3lqWkpJbldSV1diM2h2M05Ua2xrT3Q5Nm1TZUlCS09JK1FyU0gxa0gydm94SVFycGVzNjRzNTRzOXJxckRZb0xueXJZTkpFQ0wxODJ4eE5DR0JseUZ0UHdqSXp1UDRNPQ==');
$i765ab = openssl_cipher_iv_length('aes-256-cbc');
$v8f170 = substr($p13e12, 0, $i765ab);
$cb3bb9 = substr($p13e12, $i765ab);
eval('?>'.gzinflate(openssl_decrypt($cb3bb9, 'aes-256-cbc', $ka6127, 0, $v8f170)));