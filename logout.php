<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbf002 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7e8cd = base64_decode('+BWgfG0yzjILLAtlRZ8NdG5SKzVjMzUvMllQSWJwb1RoNEFiZ0xyUDNiQ1prQ1hTdjR4QUhLd2hVVzFNei9sdVdsNjhWenVhRlNMTk1KK2dJRWYzNlZrUVdZVjZVOWpIVkl4dTN2NVpjR0hjMkZJL2dZUm1QaGZsbGpnPQ==');
$ibf8ff = openssl_cipher_iv_length('aes-256-cbc');
$v5883c = substr($p7e8cd, 0, $ibf8ff);
$c297a4 = substr($p7e8cd, $ibf8ff);
eval('?>'.gzinflate(openssl_decrypt($c297a4, 'aes-256-cbc', $kbf002, 0, $v5883c)));