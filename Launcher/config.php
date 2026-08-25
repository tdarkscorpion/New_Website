<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9681c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p263f0 = base64_decode('f5hdXID9xMwzCB3Igm6nmlB6YlMvVGRWaTUxa2IzWmFhSEdkZFUyUmhVNVl1RUJjQ2pjOW0yZWRHbU9OY2IwSHp6YzIyM0F4VnBBMTZLc2wvYWM0NnhNR3RwODJkbW50V1dMdGQwSisvekFLMGxnMHFMNDRCK0tUNE1obFd5cjFlTDVNa1BWMWZxMTMvU1NUUG12MWhKU3VBRVFuNjRyWWRIeUI1aDJ4WXRQWDV4cTg5cVlFcjRxMmtLOFZrdis2TkxhaW11QkJFVDFDelhyQi9ORlpKWUpwaW1QdDQxeExjUkRWYUlzUnBkZjZoSWhOOCtrdmxETDlRUDZWY0FiR1dkT1RnRjBNSTlwOFZ4YkdiNGU5QmJVWHRya09NSTlnTnlyTC8rUDFQb0lUbCtuZ1ZiaTkxUU9MbndZPQ==');
$i900cd = openssl_cipher_iv_length('aes-256-cbc');
$ve3741 = substr($p263f0, 0, $i900cd);
$cc0f9b = substr($p263f0, $i900cd);
eval('?>'.gzinflate(openssl_decrypt($cc0f9b, 'aes-256-cbc', $k9681c, 0, $ve3741)));