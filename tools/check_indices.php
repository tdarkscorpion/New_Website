<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaacfa = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9f309 = base64_decode('rOyzNTIzYH92q/9DsJOr0mlJa0lDQnlqbENrbitKZVZGRzJLeXVJVjJxendvK3kvU083ZmdSVnNQdEk3QWFqVWJKeHYyNk85NzVsbkt5QzVnT1l5ZTlRMVAyOC8xMWZSbnFMdDhoWkZHVkFtb24xc01zdmh2ODNPUmxJYXQvNy95YWxBMXcwN2FHNUpndGRnenpTK0hnTUNnUUk0TGRESTBjS1ZZaW4waWp0WGd3RVRLZ3NHS2NqeDc1WjJldHg5cER1RVRZYXdDSllpaWU2QWpTL2JMYWJkOERIYnhaeno2VUZFeEtCT21ZVHN2a2NXOHQrOU9UQ0FkSzdCdnJIYmZWczQxbnNQR2pScmRaQ3Y=');
$i4cb13 = openssl_cipher_iv_length('aes-256-cbc');
$vf998f = substr($p9f309, 0, $i4cb13);
$c7455b = substr($p9f309, $i4cb13);
eval('?>'.gzinflate(openssl_decrypt($c7455b, 'aes-256-cbc', $kaacfa, 0, $vf998f)));