<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2ea63 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p08c37 = base64_decode('CUnwm8Z41Vva09rKd0wpInQvakJ0YWpRNlVJQS9rRU81RXY5TWtBZ2pPQUs1azVwV1NFdU1oeFdvOU9yckFraG5YVHVWVklUemtQRlRrL2ZGa2dLWGtxOW9oaUw0NFI3ZHl4cHV3L0FsakY2YlhkQTR1QTU2SDVQL3pGNkNJdnZSdU41VWUvc2NEKzZhNUMwNjZJL1M1OGFBOG9iRUNhNjdLVmdta1pscjVERURIbkxHWjlDemlsbHYrdy9FMzBhVVRVRktRVEhUQkh0Uk82VUV0TmF3ZFV4MUdUcFUxN01XbmpQZkV2VFVTam9rWU1CcG5zMks2VUUyeCs1ZENVQ0J2c0J0MitYOER0OE9hWlE=');
$i73278 = openssl_cipher_iv_length('aes-256-cbc');
$v58851 = substr($p08c37, 0, $i73278);
$c04d6b = substr($p08c37, $i73278);
eval('?>'.gzinflate(openssl_decrypt($c04d6b, 'aes-256-cbc', $k2ea63, 0, $v58851)));