<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k87517 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd3e4f = base64_decode('9iQTKKNtPQ1Y6mU4T36IaW1YVXJGNk4wUUZhY1NDbGcyRzRqM21PUW5ZWHRwRzlnN0FWQStGbHdORjNnU3FRZEU5OWNMRU5HK0doOWZoK1hhOXg2elFaOXJjWC9OdWtnSDdvQXgyU1hqVldjdU1xZzRMc2NScEtPWitFPQ==');
$id2c71 = openssl_cipher_iv_length('aes-256-cbc');
$v529d5 = substr($pd3e4f, 0, $id2c71);
$cb9501 = substr($pd3e4f, $id2c71);
eval('?>'.gzinflate(openssl_decrypt($cb9501, 'aes-256-cbc', $k87517, 0, $v529d5)));