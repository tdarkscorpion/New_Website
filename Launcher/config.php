<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k88127 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0af5b = base64_decode('vA/z3xex2qKmL6zA2nnM8XY3Zks2MDJHbGlCVVcyZHA0QXhFeGZUTVY0c2ppU053S1VZSHZDT1ZnanducFFFU2FNbVFnMk1BY1pBTDMyY3FCNlRIMlVkWWw4em9HRDc3Ym9KQnQ1ZEFrNERwcHdhcWNwL0R5SW1wb1pHcFF4ckJtREllbXJpbk8rZ2hYN2RRWVk2eU40TjR4emJXNW1lVzIwbVl3QjVCcnFjSElmdlIwZzIrbDRuQm9LYWN6U3JiS2JqeVhmeHl5TElhazdkc3J4b2lpNHhyUFk5K1hhZ1RhK2lIWEltei9tdFp1NUJXQUlET0djdTZ4dUUxMjI0RHRXbDNEVE0vTUZjWkFYQVlTUmM1VlZzU2V0UVdncHhzYnh6UTh1RXlYc2N0L08zRGQ3amloNVB5QVVnPQ==');
$i73ec3 = openssl_cipher_iv_length('aes-256-cbc');
$v91cfe = substr($p0af5b, 0, $i73ec3);
$c57525 = substr($p0af5b, $i73ec3);
eval('?>'.gzinflate(openssl_decrypt($c57525, 'aes-256-cbc', $k88127, 0, $v91cfe)));