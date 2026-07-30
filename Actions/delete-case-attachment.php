<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke5a8e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p532f8 = base64_decode('bgF/1jaNuyOMcEYI2/b0TFVUdzJrL1hMUGpIRlZZWjgweVMwQ21xMGtjekV6c1JWUHRhY3k1US9xUkxQQTR3RDR4aktIRlZLYnFvVEg1VzZWSExqdFlra1NiZWxEbzZXVlRZa2NXRnpZUFBGbDZCL2pJM3dJSDFzNFNHeFc0YXVHS0hzYWd5WDRQbDBmdC85cmdMcDNGKzBaNnA5TklzYnYrSzRVeG9wSWRyVWx4c3BpZ3dQOXNZQTBuMEtKVzMwTEw1elNSUHNnL0Y3RWFHeHNQTmE4NjVaQVVEZ3dzM3ZLYnZPRGZSN0JoenVOeE9qaWlYellxWUpXVkV4K21LK2o3TnZweGg3M0N2ekZOTGRKQmFpMk01V20vN0RxclkwWkVyclJBN0V3QTVkYUxnL29NM1VUdFpFQWZDaklUWUdVdUd1c3Z3MWN6ZTNrWTdP');
$i9f17f = openssl_cipher_iv_length('aes-256-cbc');
$v2a41d = substr($p532f8, 0, $i9f17f);
$c26617 = substr($p532f8, $i9f17f);
eval('?>'.gzinflate(openssl_decrypt($c26617, 'aes-256-cbc', $ke5a8e, 0, $v2a41d)));