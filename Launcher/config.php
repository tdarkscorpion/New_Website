<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc2568 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p29b26 = base64_decode('wP9JWeoyeuzz7uYmjf9r1C9qSTdiYWhReGR5cERiSzVUcXRIS1VubEVoZmVWK3JjNWw3NmRMUEtYZ3hnSURENVN6YW9VbldSOUdWbTQ1THpWNTZhcnJWbXhYNWdGNjY5bC95ZzY1U1V4L0hxaXlPVzBndFpJUlBqYVdnM1RINnRlUnN3alE3QnlxejZBSTVmL3gydWxRZUpoOEI3M0p5ZmhjQ0pnUHh3L3pPUEQ0RjBzdlJsemJxYnBzT1IwaENjdnBtOXRIbWZTb3ZnOEFFbXRDbEhqTm40V1oxeVh4VGdGOVZabzluckdrMFJ2Z1BYYXJJMmdST1c5UDdvRlJPOXNnZDE0c3NjR0lVczhYYUxpSno0UmRiSm1FRjhVZVRLaWVjVDJQWjNudnhqOERhMjJxU1RlSGdMNFE4PQ==');
$i114de = openssl_cipher_iv_length('aes-256-cbc');
$v9f51a = substr($p29b26, 0, $i114de);
$c40a7a = substr($p29b26, $i114de);
eval('?>'.gzinflate(openssl_decrypt($c40a7a, 'aes-256-cbc', $kc2568, 0, $v9f51a)));