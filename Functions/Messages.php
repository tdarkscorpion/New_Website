<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0617b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9a599 = base64_decode('t72bRTA4kyzhcKKQyGsHrUNuWnJENGNBUFBSYnZlcUl2c2oxTnh6M1VDZDBMWEE0ZjZLRFhQYnhsM1Exc1ZJcmp0cWoxVDliYWswbzdtUjZJYmNLTEdBMmlTcCtsMXJSYzdOeHhpTlBseHJXcGJ0aEl3WmxWRHU2YkxyWXlzcXdBQUJkS3Z6ZTczZU9KY1ZyZUV4c2JZOVJXZjJXdUlNbEZKb0NpYmdwWUY1cHRNaGNIN0lCczJnTGY2NCtzQWtPYk1NZWJZT0NmekdlNDhQY1VjaEd5QUhmelovSS9ua1ZublZtdW02dk9SSk9vU0VVdlhNeThOSHZEd1BLbkRaSEdWNzFhWkVxMGRXdk5JdzFoRCtqU2RCZisrczJ5LzI5alpqR3F4d3NrV2dLWVQzclAwZE5pMVR4ZmdRPQ==');
$i793a7 = openssl_cipher_iv_length('aes-256-cbc');
$v40bd0 = substr($p9a599, 0, $i793a7);
$cb0003 = substr($p9a599, $i793a7);
eval('?>'.gzinflate(openssl_decrypt($cb0003, 'aes-256-cbc', $k0617b, 0, $v40bd0)));