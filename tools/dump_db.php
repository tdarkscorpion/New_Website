<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k35990 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa54b4 = base64_decode('MLg4ROOf9Pf9IGvtplWpcGRnWm9xMFo2K1k5cTJCcWd2bVdCcnBZQVlFRnlrQlFhbjlxRUVBOHFiRENva1lPNCttRjIydjRKdmlSditzSjEwK3EyUC93VW9tcFAzdHE4ejNlcjFnQ0gxVEZZRER6Q01KUWlhTG9DQktnNldWR2dvT3hrZEM4YnNwNFV4SzhOOGUrazFZS1V0eWsxWHMzb1FBVW5Nd1ZTMi9XbCtZekdMM1MvVy9QL0tvQ3FITFhxWitwT0E1enpZVitUeXNsUmRVV2dnSkxMNzlyNUlEWm5PaVF1b2c9PQ==');
$i00ee1 = openssl_cipher_iv_length('aes-256-cbc');
$v80be8 = substr($pa54b4, 0, $i00ee1);
$c0d17f = substr($pa54b4, $i00ee1);
eval('?>'.gzinflate(openssl_decrypt($c0d17f, 'aes-256-cbc', $k35990, 0, $v80be8)));