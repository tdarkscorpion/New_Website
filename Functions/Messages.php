<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd00c5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7fc6f = base64_decode('Pqh235DBxotZdj4Pidgr4k5kdWZRSFNDWVV2VnVHU0JlUFU5NTFRR0xBWHZXNDNZaXB5WUxkbFNNaWVEd0dKYnlvMzc5Q1B0dmZZcFE1ZGdjVUZNUFJ2N0dRK1VrcFJFUno3bVI3aGpsTmt4MDRKQVlSd21zd290eFRCTm5qajREYUVCS2JjdE43TkFtd0ZnWGxIRWpUbkxMSm51ZVhjQU1TbXBaS2RkcFMwaEJKbzJSb0VFKzVZVG9zdWRzR0tCbGQxclBUTlJqSTVQaVhDU2d1cjUwM1VoTStKSm8rWHhoQkd6NWJKaHVvbVZ6Qm44UWlXZVpPb2MwSzBpZG1GL214RkMwcDdJaG1yelVWWENKejhpTlprb1ByS1JERk9jWUJweEt5MnVqWmdiWDFJU0ZZM2wzYWQ1MndBPQ==');
$iafaaa = openssl_cipher_iv_length('aes-256-cbc');
$v275be = substr($p7fc6f, 0, $iafaaa);
$c50da6 = substr($p7fc6f, $iafaaa);
eval('?>'.gzinflate(openssl_decrypt($c50da6, 'aes-256-cbc', $kd00c5, 0, $v275be)));