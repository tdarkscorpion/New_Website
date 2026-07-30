<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k188c5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1f3ef = base64_decode('bEcIHi8m5j7Bchr4oSzJNVJYeHcyU051c1pUSUxFSXprbXFqNHVlRzRhc1RQcU5HMkJ5aXJqZ2FLa2dVYmZmek1uL0hsYmV6ckFORlFLeFIzQURqU2VrZjREODBWWnJzS3ljb0h3dHhkQnMvdUlaWVIrMzNqQ2M0b2llZHN3OEJMT0U1NkhkSGVvRW9oNmZ6SnhzSmZHYmZjTFdEWjZWT3VJa1FQR0VyeGpXS0pPVWhWNC82akY2eHliWTVHTWpUaTdlcnFZVERHZFIrR3lsSkhJS1BkeHRFc3RzVWhHWnZTa1o1aEJ5UWxLVDVhZHc3UXgyRUlMcENPT2tCOUV0YTZYeU5sNmh4N3RaRTNzcDU=');
$i42053 = openssl_cipher_iv_length('aes-256-cbc');
$v6da98 = substr($p1f3ef, 0, $i42053);
$c69cc5 = substr($p1f3ef, $i42053);
eval('?>'.gzinflate(openssl_decrypt($c69cc5, 'aes-256-cbc', $k188c5, 0, $v6da98)));