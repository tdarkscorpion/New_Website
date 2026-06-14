<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2e068 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8531a = base64_decode('lXLxohoLtO5EJbDvS9UxwXpMUmR3MUlvN3QrajB3NFNlTlVnZXIzQ0VxRnUvVjlCVEg1clVBOEs0eWdQcGppV1J4OE1abjE3RWtaWHkraUQwUmMzcHJaVmF3QXY3SDNOUlZlTmlPS3VaZzdmYkxlMHorRERDK29ZRGFXdTVWdXNSaWovSHZuazZ1d3lrblV5UHZ3ZjBjMExFTk9aRzIyYit1QzBBODJVOUtVcUdXc0Zha2ozS0VxY3RjTE5QU2pQZXRUWVpBaXVjRjgxNVF2MmNFN3NhK0Z4YmwwMjlpdDJXWHNDY0dzMGkrOGNVVHBOZjN0YzZ6NkMxeDF6L2JxN2gyRVNxMjY5dVVpU2RPbExTV1JtOTFSY2VKTEFZOEdvb2duTU16MUVGTm5vMlJueG9LdTFXdWp4SXpnPQ==');
$i8be98 = openssl_cipher_iv_length('aes-256-cbc');
$v7f7d1 = substr($p8531a, 0, $i8be98);
$c11069 = substr($p8531a, $i8be98);
eval('?>'.gzinflate(openssl_decrypt($c11069, 'aes-256-cbc', $k2e068, 0, $v7f7d1)));