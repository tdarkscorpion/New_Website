<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7e16b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0239c = base64_decode('XTLViP4pv6YlVPzUAk1zCHdya0hXSWs2M0tiendvTUlkNCtnOGtLbnR2TGpWYTRmZnJYYWJrUG04SjhNeUVYOXNDZGFZUklvazNRaUR6VFRzT3RuTjJQcGtJWncveE0vcHZYdGdmaGJSWEZudGhMTXdPQnZsK1p2MzNLZDkzb2JQbDhWUzE4MDhHRzVKZ21JWFNab0lrZm1oK2t0MkhFR1pHSHhYK29TYXNyTWdLc3NhNXNnem9vRllQVlQwdXZLeE82Y2NKUFg1Tm1VWGp0Ync2YmtVajFWMnl6QXZYWTUyYVloZTdHd0VmeElPNDVDUTZuVTVNMldIMXJPTm00Qys1Vkw0RU40alNrM1ZrQld4ell6NnhFcHc0Q21mMDB0eFF1NzBIWThlR3d2S1BNcE9hZUU4dTIwejJJPQ==');
$i8adf4 = openssl_cipher_iv_length('aes-256-cbc');
$vbece4 = substr($p0239c, 0, $i8adf4);
$cd06b2 = substr($p0239c, $i8adf4);
eval('?>'.gzinflate(openssl_decrypt($cd06b2, 'aes-256-cbc', $k7e16b, 0, $vbece4)));