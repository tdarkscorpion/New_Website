<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k98d03 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb6702 = base64_decode('pITlnBi6Ngh0v/BFkwQikFdrcldrRE1hLzQ5Z05EK05QWXZHUmZldDdDckROa1lNQTUvbFJQSmp6OGhGY1JTY0lnWFB6NXZORmhDNzRZeHhpTG9KdTQ0cXN5aFAvSVZJVHl3bWdwUW4zZjZJWFFVN2FJVTJSeElielo1Rm5YWXZhM0g2ZnhWekVaOThhL21wOHZJSTMzb01XN3IvN0lrQ2I3aGV0ZXRkYkNRT25DNjhUeWpOa0RSWWtQZTlQam1Rd2duUHNZbnNmYjBmRjNORWFlVHpNbHJhWkt2TUVJRUcxM1I3VlU2SkhyTjAvcktRMTM1UGZ6VURjdDYvUE44YThjRmorOU9XRXhHVUFVbFI=');
$idcea0 = openssl_cipher_iv_length('aes-256-cbc');
$v8839e = substr($pb6702, 0, $idcea0);
$c71084 = substr($pb6702, $idcea0);
eval('?>'.gzinflate(openssl_decrypt($c71084, 'aes-256-cbc', $k98d03, 0, $v8839e)));