<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kba2a2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9f91f = base64_decode('k2+fxufavBygk3eZn9rW+XZzNEhKd1h0VTM4UEw2ZnI2V3I4dGthUWozUFZGamgyckVXb1N6STlPR2g1bC9yRTNuYUtzUzJ0L1dBckQ3cmFVMmtKMVAzQ2htT0pQRjhKN2ZkdWYrV1RIanZJVE9hbzYreUk4TENOL25VZ2VDTE1XRE1BK01vaStsREIwS212QUNxcUZ6RmlJbnllVndkZS9uN3ZyQlhIZjNWYWhNaDRpQ3hmaGRIeForOGdVc0llRjlZTk4rQmxiMUlxUzlHTjkvbFdJSFRrbjczR2N4eC96WnEzeUFvaXZoc3pGQndjV1B6OTlxYVNWaU5LVXFXU2pZUnY1VTBacG04UTBTTDRqeHA5WDQzV3lwazM1Ky80SDZJSFE5dk5JUWlRbW5XNVVMMTViZ3JEemZIcERlZFNnRUkyaldvK1M2YU9vMG5V');
$i7675b = openssl_cipher_iv_length('aes-256-cbc');
$v33fdc = substr($p9f91f, 0, $i7675b);
$c1e250 = substr($p9f91f, $i7675b);
eval('?>'.gzinflate(openssl_decrypt($c1e250, 'aes-256-cbc', $kba2a2, 0, $v33fdc)));