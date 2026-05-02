<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k08ddd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf29a5 = base64_decode('oLC0cqTMakY2UHFP9XD4dmdPRXZ0d0hVTVhQZEJwbDhqeG9BSUV2RUxreHNTbkwwMEkvK2lUamZ4NkVYRVdHdDYwVzdEWk9KZ3l2RWN1WHN5NU8rY3ZnTEJxOXJQazNpckt4YlM5SGFNR2dxK1dBbWpzR3ZmTlhBY2VIV0hQMmIxT1ZRcUhNUWdhQXhJM3V2NVVpcTBkNGdQL3JsYW1mK3A3aC90RldkSC9COWdFOE5uVERuTEdRZWtuVWYyQWJBQURJTEY3aktiQnk1VEtxbGY1eEUzd2cwQmNKRjB6NDVDclg0T0E9PQ==');
$i92761 = openssl_cipher_iv_length('aes-256-cbc');
$v748e9 = substr($pf29a5, 0, $i92761);
$ceb569 = substr($pf29a5, $i92761);
eval('?>'.gzinflate(openssl_decrypt($ceb569, 'aes-256-cbc', $k08ddd, 0, $v748e9)));