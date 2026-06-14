<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdb546 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe619c = base64_decode('VRoPYxgsSMqnaYL5gCpcNFpyd3BRbDZwRDFZRlREOWlHa3NzQWx0bWUyTVdYbnJGM0Vqall4T3VVUkgvbENxK3pSRk93M0xVZW1aRWR3NkJpSVpQbTRvMFhhbysrQXhucjNia2RSYjYvS2tabkgvSnNZRkUzc20zcWVjY29rYXFuMER2MVBWWGVsYVl1eVcyVHpnTG1oeUhjSnUxdmllK1grOUFOajgzQXBkUGxGcWZ4VHBKRENkUDlaeDdWanRKL3ZqejR4YTBBYVhRWFpzQzhQZW9PdTRYUE5aRWJtcldhQXZmbWRPQjNvbWN4Qjc0Q0N6QTFwMXB3RTdXdXBROWZFejkwNjlodHZFaERTTHpwOTVaSEhISUNQK2dvRVRDT0RrbEtkakI1dVNzZXNWL3I0bEh4c2RpTmNJPQ==');
$i5fe26 = openssl_cipher_iv_length('aes-256-cbc');
$v2a18d = substr($pe619c, 0, $i5fe26);
$c836b3 = substr($pe619c, $i5fe26);
eval('?>'.gzinflate(openssl_decrypt($c836b3, 'aes-256-cbc', $kdb546, 0, $v2a18d)));