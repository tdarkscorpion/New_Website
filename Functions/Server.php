<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke5e43 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7eb28 = base64_decode('FeAkV16NCfnf5MBuZxjhz1NXU3BHRm5Ma3Q1TGJzb3lYa1UraE5jenAyelJ2MmVhajFoRkVKdVRQZ0REK0ZWYkVkTkdmbGNlSzFxUVRTTWdXcTBMbGZ3NlFqVVQ1MHlqQWQ5Ykw0ajFFc0VEYUxkWDRIQUJ6WUFZOWUzdFdvQk02V3l6Qi9YRk50bFFYc1FVR2lycUlrajVleUtrWXNWcUpZb0IvMWJVeXEzOURvR2p2cWx2MnZHdUtUQk51Sk5jMkNoWU92eTMzWHRUM1JKcTh6bDZTWDQ1WE1qR2FZNUJjN2NhUURMV1FmSUM1ZDVVUVpJQjNDN2Mzd3J4bWFJZHV5UlY3OXpiajhWcmtyUis0NEZjNkxzS1A2NXZvY1A2eFNvVjBGWmZHbjcwQWNiQi8xZWV5TCtjSXlRPQ==');
$id3491 = openssl_cipher_iv_length('aes-256-cbc');
$v5fa64 = substr($p7eb28, 0, $id3491);
$c74e29 = substr($p7eb28, $id3491);
eval('?>'.gzinflate(openssl_decrypt($c74e29, 'aes-256-cbc', $ke5e43, 0, $v5fa64)));