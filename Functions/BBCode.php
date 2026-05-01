<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke551f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5df62 = base64_decode('d1SvjU+z786fxWdR7w9rFUpOTjllMXgvcU1EU3JqRUxQVThmeTNnTGE4VzdudU5BUmpXUDJBVkhNTDV5V296d3hRTjhzNjk3cHVWancwYmJnSnJ4anB5dGZvVlZvYTZEZGhFQTdINEhjOGFkNU1UbUNmaTlWd0ZNM2c0TEtWa1ROTDcvY1dIVTE1OHRDbHduZTJ1U0ZnRlUvMmRSNVQ3VzE3MVp4T2Jra2FZYU1zc3ZnRjQ5MjR0My9qejRNWGthODgzZFJJcndNbDJSZk5Zd1hqbGZNYlU1bDN5UzBJRDZaSmN3dzNrTTJpMTg5V1dsQXVNcEp1Rm5XMkQ4WS90UnUzZmZDZzd5SDFYWDJja2dUdkdMSlRhU2prckZmUjlTWE0xMlY0N1pyUms5VlpqNGpmT0JxT3RyTWx6ekJKN2l5d3FROVUrMk94Qk12VTly');
$i164e2 = openssl_cipher_iv_length('aes-256-cbc');
$v557a5 = substr($p5df62, 0, $i164e2);
$ce8a96 = substr($p5df62, $i164e2);
eval('?>'.gzinflate(openssl_decrypt($ce8a96, 'aes-256-cbc', $ke551f, 0, $v557a5)));