<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc7308 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p768e4 = base64_decode('rrLuoVS1HPMnO4XK8AZ31XFDU0ExbXBycVhDVGw1ZkUvU1hEWXFFK28ydVFHaUZkK0Q3alljcUFnWlhIT1ZsVlZHTVJRbnAxanl0T1d0NGg1bHlSUnZ0b1JaRVRHUEE5eExDSG9TRlhTdXgxTTVHRi8vZ0RzQmZwOUNOOG13clIwTHF2dHFJazAzNE5KL1NnUmcwUHNDaFBQVGxFbGljWnU2MUtHTk92UkJBNysvakNxM3k5WkJUVUZUSFlrS0c0QUM3UVpvc085S29KbnViY016dWJDY1pQL1R3bEVpV2J1OHF1OExJb2NHcHAzbkFxOGEvYTBMWkxBV3hZK1EvUlNNaHlQRS9xNEh5YWpJOWxOOFhZR0M4Z0RSTk9aNWdoZjlwbStYTnQ1aVRnbnlueXkvWm9PQWM2Z2hZPQ==');
$ifaaeb = openssl_cipher_iv_length('aes-256-cbc');
$v4c912 = substr($p768e4, 0, $ifaaeb);
$c99bf6 = substr($p768e4, $ifaaeb);
eval('?>'.gzinflate(openssl_decrypt($c99bf6, 'aes-256-cbc', $kc7308, 0, $v4c912)));