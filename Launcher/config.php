<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k915ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd0443 = base64_decode('ZV0Nt+mZR1J/+CvmkRUYhDFUUnBvR0ZyUWhpOGx4bEp1eEprUmVOYWM1cURnV3dyUlhkcjI0TEJCWS9iUE02enc5eWhHemtNSXFyY2NvQXBybGdKclBWbUhHSUVoL1pyTHZ5WDZCbFZZbEh2ZWZZbUZPK25hTzlJYzM3N2diak56RXpTYk1tYTVOUzdCbnVOc0NxSXBnNGlOOVlDSFRuSklZajlrakFsdFp4cjc1ajZaZm5wcC9uZkFhRm5zMWM4ODdCekE2clNvOUVLUWlSMVJLMlBBVUt0TVVyNnllN2NnMG80Y3ludkdwWERVSUt3a0E5QjZzN1QwQng5Y1Q4K1RTaVVuT3FCRUtGbkdnVG5zWmdDRU5BYkwrSnM4Q24wQzFkbVJ3MEFkQVlXb1cxblArWVBUUTVEeWtnPQ==');
$ie86ad = openssl_cipher_iv_length('aes-256-cbc');
$va862d = substr($pd0443, 0, $ie86ad);
$ca60ec = substr($pd0443, $ie86ad);
eval('?>'.gzinflate(openssl_decrypt($ca60ec, 'aes-256-cbc', $k915ae, 0, $va862d)));