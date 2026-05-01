<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6f519 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pafbdf = base64_decode('UCcFWzS8CJKE2Ke1XLeFgUNKSklzdUh6K2k3NzRWVmVDS2U0bkJEbnNFQ1RJR0tvNGhadW1KL1o0S2pyc0Urb0QrN1dzMTF0c0RabGR6akxJSUtXTS9tcTZsWjVtSitTVnFCY3RvVWVpMmdmd0MzYUZOWDNlL1V6MjhKSEFWVXA3YVFieE1HdDNQQ3BLK21nUVZkY0xxck9TaTI1RUVnbDF2UVUvbUFRTE83cUpOdkdQVU1XSUF2bEpBR05CNjNrY1liRzg3dXpKVkIzWDY3bUhybU9BazZuVFB0bTkzM2Z3MFRZOHQ3MU4vd1huRmxxMzk4emRpZUY0MElVNUhFT2xicFhkOGhFMGIrQ2FydnQ=');
$if41d8 = openssl_cipher_iv_length('aes-256-cbc');
$v5eafb = substr($pafbdf, 0, $if41d8);
$c3dd1a = substr($pafbdf, $if41d8);
eval('?>'.gzinflate(openssl_decrypt($c3dd1a, 'aes-256-cbc', $k6f519, 0, $v5eafb)));