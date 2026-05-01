<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb3c2f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc1dcf = base64_decode('pPxHbUxSwRC29Futxizb6kpxU25iTkhFSFlyZHRwby9ETloxNXNBS2xtNStMUlo5RWg0WEoyWHNIdHdUUnpVWnlXSm9NNytrS1NXYWlmV3RJN0JVK2t6cERGYklmS1l3NDdLSVBqem1qZkZLWTkrVXFubTBreHJOVUw4cXVGWG1yN1F5d2RzbWJUY1FUdVVTV3lTYy9jSWR3dVIramFhWk02SGdjbDduTVA4SkNRQnRQRU9xYXZrbjUreVZ4T0ZHcE1FQmUxRFpWZVFQeUJJUGZEZUUwTzBTS1NnTjhKRlhVRmJoM1E9PQ==');
$iec5da = openssl_cipher_iv_length('aes-256-cbc');
$v69e55 = substr($pc1dcf, 0, $iec5da);
$c6a264 = substr($pc1dcf, $iec5da);
eval('?>'.gzinflate(openssl_decrypt($c6a264, 'aes-256-cbc', $kb3c2f, 0, $v69e55)));