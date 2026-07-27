<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kde8e9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbb2f0 = base64_decode('J0QXSwgoPAgNEZtqFs3V+HN4NzE1dnQ4VlVwdERvOWVFSE5lbGRMOWlUdnIzVVgreTBGcm0xZEtSWnNkais2a2ZtOHNCVlYvSmtmYkJZVTh3c2o1dGU2TXpqanRjaGRCRzZSQzFSQlF0QW9wNzJSMi8wYVQwRU45Vmg2R0dSYTlYUnloNTkzNk1oeWhnUXVDY1IzTU9xVnJvV2VFUkZEK3NrWGIvVU9HdUVaVEdqWkRIcHEyNldjTytwUDhNUm8rRTFFVVYvTU1UenRTT24yc0FqTkJVTmN0d3g3VkNqcGRRT0JSckFCYWFkZytFaGtncEFFQkQxaXpsTHcxZmM0UjdwSUNMTnVSQjlMQi91emRvRE9HTjk3S3JqZk9YVW5RUURWUy96MnNwTFhUR2g2QVZwRmp1Q3hSY1FPNzlMTmFiSEhUTktnVW9xTVBqTXNZSlFtWGplY2ZNQlNqcFVULzhKNDJIUT09');
$i8181e = openssl_cipher_iv_length('aes-256-cbc');
$v3b4f4 = substr($pbb2f0, 0, $i8181e);
$c7630a = substr($pbb2f0, $i8181e);
eval('?>'.gzinflate(openssl_decrypt($c7630a, 'aes-256-cbc', $kde8e9, 0, $v3b4f4)));