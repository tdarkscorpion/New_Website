<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k430f1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pde7ef = base64_decode('C5/8e/soGRPS/+E06/A+PWNhNzA3Y0pjTExQUzVpQmMyZnRPYVEreXd1eEQrd1BRNWNOOGNpYVdsb0dCVUFaTldEWUdJODBoUkRXYTh2UDc2MDczZG41dWhXVkRpTk9PVnMxN2lTSkp5SUJYR2owa0hHVEZITS93MjBmQWZlazFzZEFjdHhOd3JvWFhlZTM4UzdQSW1JaHZ5eVcrOHhrMktyaUtBa3lHeS9zMVZFWUJVZW1tbUMzanE2MkxJOXNVSklxcG9GSTk4VDFiN0pPOVZ0NU5nVjVIMTFWY3AxeTAvdndYYWhueDFFOGtQeC9qSW1aTUdQSURxeENjamZab3AwSUp3VHU3WWlUc2VXQ1lOTjVZT2YwT3dFUXYveFArNGVacjJIcldnOTdHc3k1RU0yem5zdlZOZFo0NFdMMXFRY01jWmxPWlFCUUtCQXoyaS9HR1JqRXRMamtHMEpWcmcxSVJndz09');
$ic3384 = openssl_cipher_iv_length('aes-256-cbc');
$v869fe = substr($pde7ef, 0, $ic3384);
$cc0109 = substr($pde7ef, $ic3384);
eval('?>'.gzinflate(openssl_decrypt($cc0109, 'aes-256-cbc', $k430f1, 0, $v869fe)));