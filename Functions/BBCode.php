<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc455f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3b2b9 = base64_decode('LkJgC0UYZA9wtlCI7TFJ6DEwemxqZFhUa3FFU25KUTRMMGF2YzA4eGY2YnY3emFsUkI0aFh6RHlBc0tkY0ovUCtvYzFtd0VneHF5Qnc1aUxpQnpZV0RQdzFDbjBVdzRvazBLcm54Yng2VkhwcXFqVUdPck5vMGw4LzB6cUJudGIrUGlmWXZpWXVhRzYvNy9xN3djSUZqdkRqdmpXbW1hZjZpRDZUekNlSExJOWdsd3VmbHlGWmV6VG9OK0N2R2tEZUpHemZ0WGxadnM0cmZaelhqOGx0d0lCLzF4czVtZmlCa1pIMWNONU9DbVp3Mk9mb3lTcHBYUUR6TDhkMzVJcElqUFRxRGpIbUY4WERESnQyYklLampoY1M0YlFHRkFrMWtwanFBeUprdkVNbkVsenNOY3JUZmszVHNpWDFjdTJmU2NINEdNczBLTHcrWldU');
$i9a3bb = openssl_cipher_iv_length('aes-256-cbc');
$vfc14e = substr($p3b2b9, 0, $i9a3bb);
$cd0a57 = substr($p3b2b9, $i9a3bb);
eval('?>'.gzinflate(openssl_decrypt($cd0a57, 'aes-256-cbc', $kc455f, 0, $vfc14e)));