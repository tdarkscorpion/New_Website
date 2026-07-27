<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k02386 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68dcb = base64_decode('96ZUP3S6N9VRGmau2gt27jJoR1lCbXdQaVlsZlZubS84WHA5TWhMT2h0SmViaWhGVzdDaE4zTUFoQ1orTmVIQmIwaEdTRWR2WlVaVVFFU3FKNkFGUno5c1FsTjQyNHg3SzRQdjE0bWRJcEZNK3Uzd1dkcEZEcFdua1ZXdTZqZjJVWi9vcklTOW5QUENsOUNKbk9EbDVuMGNBT0Rsd296V2lPc1Y0M3Y4NzhlRlgzTzNxSU9yNXJTUWN6VkhoRW9wRU4rcE1pQ2N3dUVPL2ZCeDFWMEZqV0VDbmZGOWFqWDFCMzNaMnhtaituMlQ4T3hjclhaclI4aFo1YnBDOUkwZWtjOVcxZG5IZGllK2tJcGxJRVQrbHBXM1lRdDhoTGpGRzlNelVyQXh6WG9XelFoM0U3eUo1d3VUaGZjPQ==');
$iea9b5 = openssl_cipher_iv_length('aes-256-cbc');
$v070f4 = substr($p68dcb, 0, $iea9b5);
$cee922 = substr($p68dcb, $iea9b5);
eval('?>'.gzinflate(openssl_decrypt($cee922, 'aes-256-cbc', $k02386, 0, $v070f4)));