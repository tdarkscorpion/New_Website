<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8c933 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe24ba = base64_decode('HKbPuLpprOUyORZTEHq3aFJtamNrbHVGdUx0M3NsM2hraTF5M1pMVjQvQThNVHRKTGcrNlI0cUZNTzY3Q3FhNjBIa2YveVhGcTA3T3VQeGs4K0JaK3lmbHN4bU9CTlQ2eGF4TWg4Z0kwVnNlSlFlUFIwY1piZi9FaUM4aW1aaGxFUjk3d1JoNjRBUmYvRHVVL0YvTHN4NG1jWk1KKy9FOVdoMVl4SVk2d2VveTQ5c2IrdXVkSUhxQUpHMW5UNlg0SnVaT1QxMDI1VGc0Uk80WQ==');
$ifcaea = openssl_cipher_iv_length('aes-256-cbc');
$ve535b = substr($pe24ba, 0, $ifcaea);
$c01f68 = substr($pe24ba, $ifcaea);
eval('?>'.gzinflate(openssl_decrypt($c01f68, 'aes-256-cbc', $k8c933, 0, $ve535b)));