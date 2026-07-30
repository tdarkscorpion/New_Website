<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k981d8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p69fc0 = base64_decode('s4L1naKPbkYq4LvqM8sWWHk4UWY3ekpSQ1dZT2JxZjJuQTZHNVAyQ2VFNzJRWlN2QU9tUCtLeThPWW1tcS80bTNhRXVIQ08xa0hrdmRwejVQVUNqUzh2UEFMRHV1OUJuZU1iNW9EV09XYW16cHFBYUl6TnRLWkx3WVRnZjhlK0ZWTFYyVWE4ZkhVaTdSWmVjTkIzQkRYUzg3TEwyY3RZTTRmQ0FhM3hnZlF6eVVVWjhnTWcrejN0eENSVWJWMmNuSjZYWThqN3hVZEtnaXVGdFozSW5rVE5nMXY5WXhyTWdaclhkN2tEbC9ta0ozNjc0SzdQQzBMSVZZcXdwcDg2a2Z5T1c5ZHJtUEhuaW1nNnNPY2RuRkN4ZGFEYzJlbnRJTGQ0dHlDQ0tBQ1o5cHNFQk9DQ29RY1NhKzBjPQ==');
$i127d0 = openssl_cipher_iv_length('aes-256-cbc');
$vd888e = substr($p69fc0, 0, $i127d0);
$c541bb = substr($p69fc0, $i127d0);
eval('?>'.gzinflate(openssl_decrypt($c541bb, 'aes-256-cbc', $k981d8, 0, $vd888e)));