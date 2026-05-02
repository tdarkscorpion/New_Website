<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k49c59 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7d003 = base64_decode('gzq2Wcy1ONsbyGYY8ZC12TdDRjJHNk1aNXNGYjg2c1l5OFJQNnI4eVZhU2NNWmZiWUZtbkRQWWsxOE81YSs3MmxUdWh4YXdMNWY0U3lqQnd6eXVVd1F2OG93NlZVOWZlREhiWDhEcFVYb2dFSUtBQzJWUWx0Nld0QlFlaVNJdUcrMHUyUG85TmVEd3AyYTBGZ2l1d2dGaGJXZzdtNlJONjBPb01BUGphVWM3TW9xbzc5YzRBTVNCekFIenFDNTRWUkdvVklQWDZDdWRGcHVhZw==');
$i93573 = openssl_cipher_iv_length('aes-256-cbc');
$v37eeb = substr($p7d003, 0, $i93573);
$c39bdf = substr($p7d003, $i93573);
eval('?>'.gzinflate(openssl_decrypt($c39bdf, 'aes-256-cbc', $k49c59, 0, $v37eeb)));