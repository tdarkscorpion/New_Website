<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7e249 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa531e = base64_decode('/Bvl2eFfxjH0BapgA2FnajhOeEFvVE9vczNRcmNpT1J4OFJkSzRuck1hcUxZSmFqUHJVWFlkVE5hcDJxSGlSSlB5aFlQM0tsek5rWlNYYWFvNW5QSXVKOUh3WVRxSU5MaGZKbDRmY1NOYWl6S05zODZORmozT09XZUhFVDVocWhHSFhvQ09qNW9HeUtGZy9zamdJSXFXUStiSW5RRUN4NFlrVkViaDliejFqanV5enA5WGEwTUsvS2JQaHNEWUl1bVBNaGlNU0ZlSzNubnB3U2h0a0V5dWVwdGFiaUIxTE02UWdaYnBYbW9RVzYzVXNyKzV6MDRaSWo5UktpU2R5aWdVdkw3UVhNa0txUkdXdlcxUnFSVzFOTUhGZnFsdEg2cnNmYm4xTjdHSDl5d044NFZPVXA1SENUQ3NpWHgyOU92a0JQUk5iUHZDZWkvWlp0');
$i7ae37 = openssl_cipher_iv_length('aes-256-cbc');
$v387d7 = substr($pa531e, 0, $i7ae37);
$c184cf = substr($pa531e, $i7ae37);
eval('?>'.gzinflate(openssl_decrypt($c184cf, 'aes-256-cbc', $k7e249, 0, $v387d7)));