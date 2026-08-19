<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kebbdd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p01afd = base64_decode('NJuyqI7QTbiu0lq/sDOrp3RYOUhqdHF4cWxPeFJJbkFUSXJvNE5nakxjY25Pc3RKRm1TVTRMRkxxRnpKbVZiYXNONXFYQkxWbFJjSWFyWWhoNzJsVzlEVlVuYVE3RGVBNXRhb1IyRlI5aTlHSFQ3UExNK2twQnhSR1IvTXBFd2h5YlBKbzNNNnc3cTczWFcvV0RlWFZVQ3pDNEZ4L1JQYXBvWHYvUlNXNHF5UjF1Lys5WGo4MEtFRWZVdTEvbjh4YkNjbHFxd1ptVjdYRzdUSmphS3hEa0VUSzcySlFiMHF2KzgycjhUaFNwM1RzdFhlclNmaWpPWmNYYTd5ZlVUbmNoQytKSXpWU3ZiUzkxdUdaNklRYXRzc1ZwMjNKanZHUkY0T01LVkhYZXpDSHh3Qk5NdGNBLzFuTlFnPQ==');
$i9565b = openssl_cipher_iv_length('aes-256-cbc');
$vf874a = substr($p01afd, 0, $i9565b);
$cb8dc5 = substr($p01afd, $i9565b);
eval('?>'.gzinflate(openssl_decrypt($cb8dc5, 'aes-256-cbc', $kebbdd, 0, $vf874a)));