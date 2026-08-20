<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60f77 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6f9f8 = base64_decode('Fdj0/VNhD9qfgpfsngpUF2FER0NXZi9FbmNnMjRIYWd4RTJZQi9wZU9jR0dONFNmbzU1U0xIajgzM1pIUDZyNDlwbzBJOC8vYVpJN1A2T2NVZ3pSbVlHUjBhckU0NUlqZng3blVaY2RlTVlUOUQwNWpUZ2k3cmZESWFiOGp2ckNpSHhZQ29xRUF5K0JiMnhNRUJhRG1NbnFJaHZPcWY3Z2MzOGpNN2V4NkllczhEbTFHM3dybW1MYkhpNjNCeUI2QW9iVFhGV0MvSUpWaXJ1N2dwTUwwdTB0UTBWaTh5ekJwWWZ5a3NBUE1rZ21CUEg4NzkyMzh5dlVVY3hVc1pxZmFuS1JldzMrTjFRbytSVHlXS2lTQSs1NlF0YllkWWRwWFkwSVVpRHNwWjRWZ3ZmamN5SXJwZjZYdm9NPQ==');
$ia4fa6 = openssl_cipher_iv_length('aes-256-cbc');
$v7e017 = substr($p6f9f8, 0, $ia4fa6);
$c7d546 = substr($p6f9f8, $ia4fa6);
eval('?>'.gzinflate(openssl_decrypt($c7d546, 'aes-256-cbc', $k60f77, 0, $v7e017)));