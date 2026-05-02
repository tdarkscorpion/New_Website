<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf08f0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0545e = base64_decode('ODuPYf4iG3jlv5k4JY53w2dsMFNHK1FqbEJGNlE0Q05sUHNOby9CNXlHTzErTkxSbWxPbGcrblFBU2JsMERmUWozWDFRSEhQdTJiUGNSVGd4OXFWWmk5cmJrTzNiR2hOQldIYlVqelp1eTNSRWN3M2xzdUFKOEhjb3QwPQ==');
$i45461 = openssl_cipher_iv_length('aes-256-cbc');
$vdcfae = substr($p0545e, 0, $i45461);
$c13032 = substr($p0545e, $i45461);
eval('?>'.gzinflate(openssl_decrypt($c13032, 'aes-256-cbc', $kf08f0, 0, $vdcfae)));