<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke2622 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p56317 = base64_decode('eF1pqSktBCMavkG9YkN6GXkxL0NFcklidWZUdFZYZGo0dEZGbk9KYkJhbG53MFNOTnNmNzhLNlZtdkROUXpSTkg1M0dJdzg5Sk8rUWZBMW1LL3VrdTBHYnRUNVFvSVovMlA1NFY2SW53bm9KdThSZW5JZlJoTjNzazVjelRYb3VQZWdEUE5WWkU2VXhicGFHV2tveEpyQWxBQ2NVVldUQTcrTVVjS0duSFhrN2dTT1A5SlNydWoyb283NVJ2NGpVUUp5Ni9uSy9UNy9FYUdDN2YrencxdktxYVh4YW5hTkdjc0NHaGlodlpRU0JDSStXL0tNdnFjRTdoMHBFNGp4bk5uTm96aVpPaGlXSXNGNGJ5Vjdxa3Y3ajNMK3VlZ1JTdU45YWsyTkYzd0xBdHhhYTY1aHZZd1BkNlNNPQ==');
$ica49e = openssl_cipher_iv_length('aes-256-cbc');
$vd3aa1 = substr($p56317, 0, $ica49e);
$caf5dd = substr($p56317, $ica49e);
eval('?>'.gzinflate(openssl_decrypt($caf5dd, 'aes-256-cbc', $ke2622, 0, $vd3aa1)));