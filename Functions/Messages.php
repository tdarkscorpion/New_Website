<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb8fc1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paff6c = base64_decode('2tF3G3J0v7e1cyarOZlA0lM5T3NvcXJyYzZQZUI3d0xhajVpdSs4MWRrbTNCb0o0akhiQkdDK2d5YkxIUm5EREpYVXo3YjVJSzE0NEVNc1hESkZmWUIxR2szOFhZdUtZNU54RmpFRnpEQzV3eE0wQlhhOU82MEJ5OGNIanQzUGxaRGtVMHlRQ3BxRHozeXkxdUJIMDlYUEgxYXkwaXVYQ1haRWsxZzhJZ0ZHM04zdEd0dHN2NnE1M05pMmh2REJEcnZoN3VNQ0pNTEdxdDlGcWVVZGVQY3FzUWFqT3d0QUUvS1FIUjdOWkpmbFpTZXA5S1RJeGZQUDNRaFVkc0tQZXVEUlZjRDRTUlgxK2pKN3YyM3FPSlk2ZDRnQnREWXlvb3UxelB4QkJvN3B1V3FQVUZNNU9NbUtDMWJVPQ==');
$i9b8ec = openssl_cipher_iv_length('aes-256-cbc');
$vddce2 = substr($paff6c, 0, $i9b8ec);
$cc2d9d = substr($paff6c, $i9b8ec);
eval('?>'.gzinflate(openssl_decrypt($cc2d9d, 'aes-256-cbc', $kb8fc1, 0, $vddce2)));