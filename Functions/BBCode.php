<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf0b89 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p45ac5 = base64_decode('v0i4bKlW0GCueLRIYVpfODJXTnliVFF6ZUNiQmVaYkpXc0pYNHU4RGVDK2NyYUFsbGZ0WXUwRXE1QkNiWDZ5d1J2WUVQRzd1SzhkTW1EMWJtUXFBNzBNY01HbFFaZldNdkJtRnVmRVhUVVFIaWM0alh3aVZ4eXMwY09YYzZGUmZ0YVdNbDJhRktmd00vY09KdWxRZWRzdURDdlp1a3VBVWN0VE5PdlpHazc5Nkcvb25oRi9ydzFoNnEvb2FRU3pDd0MzdHVtbUtNSm9yVW5Fc1VYeUZtc0p6a2hVOFhZeXRrK25IRnFvY3RZSjl4aXlHTVRJU1JBZ1lCZThleitMaHhnODBaSWhVOFEwS1NvTGNuQzdSa29rdnVacjlhYVdpa3N1OWk1eHBIM2kvL3BIUlpTenZSYzJBQjVzUTB4OUtUUGZTTUVuZ2Yyb3JDSzlP');
$i1902c = openssl_cipher_iv_length('aes-256-cbc');
$v83be4 = substr($p45ac5, 0, $i1902c);
$c3c888 = substr($p45ac5, $i1902c);
eval('?>'.gzinflate(openssl_decrypt($c3c888, 'aes-256-cbc', $kf0b89, 0, $v83be4)));