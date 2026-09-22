<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb5ccb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8532e = base64_decode('9IHWFgdEB6n0CtUnFUf9P28xRUxsd09kZFJPRlFVRzd5WTBvdzJpK1BtQ0t2ZVRsUjR0ZDFGajgzTW5wUXdwTjBTT3o5ZmVqTmp1Kzc1MTFaVXlISnN0amQ1bE9LcjkxdVhYWVh4M0gxdnM1YUtKcFo2cWsvcUcxOWp4cHlZMWVIOExwbGVwU0QzVktmYklGaGVKY096dUVzb3FvSzZJM0FGNGtNR0o4SmJVSzVSNXNnMmEvM2twMGxFRnJsU2RSZmh3eVZtTjdwbTdBK0hsTWRiMEc1OTQzdzV6WExDUXBYbG1OS0Zybk5rQUViTDMzUCttZjFFaGJqbTd4SC8wdEoyTWdFS3VlVXl0MzlKdG0zVFl3RkpPdTNDTERnUkUzUEFXNTBZRWJqczNqMmE0WmpSYm1uT09Jby9tb29VVm1WRVFtdWJWYVUzZzVobzJu');
$i3ccb4 = openssl_cipher_iv_length('aes-256-cbc');
$vae245 = substr($p8532e, 0, $i3ccb4);
$cd2e43 = substr($p8532e, $i3ccb4);
eval('?>'.gzinflate(openssl_decrypt($cd2e43, 'aes-256-cbc', $kb5ccb, 0, $vae245)));