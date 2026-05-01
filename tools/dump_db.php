<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k78aa7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4ad2 = base64_decode('YekJQq5qfMC7GHYAI4QQTHVmbUJaNk1RRStOTllxV3FrMmI3eVVyaVhuMXFya1hCUHhLSHVSRm9uaFJkeTFpakhLRjRBZmVqWHgzR0EySFNGNlVGMzdyRXkyVVRMMlp6OU9QYjdMZzU5Y244M3ZnRThEM3U5VzVkM21NdE1IK0QvRFR6VkQzcngwVXl0aE5qMXJMaUlTaUo2Z2QxaGU5V3M5d2NtVXhxQXNVSWpZNXlUWG1nMStIUnRyM1d1dlRJU0FhWEd4RjU3d2hoeGZ5eUo0V1BWRkJiRWJyempDd3J2VFpvZ1E9PQ==');
$i06e9f = openssl_cipher_iv_length('aes-256-cbc');
$v9df06 = substr($pa4ad2, 0, $i06e9f);
$c1b97e = substr($pa4ad2, $i06e9f);
eval('?>'.gzinflate(openssl_decrypt($c1b97e, 'aes-256-cbc', $k78aa7, 0, $v9df06)));