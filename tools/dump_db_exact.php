<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2f65f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p35845 = base64_decode('45m02TGqhXaoRpeYb+oM7EhieW1yL0k4U1QweGhtYzRERUtISktLRkFUdnJvVnBYTS9TRHlTWnkvVFpMbFc2QlAvSWtTTE5ReTFQdERwdXdBb00reDBNc05qZXY2L0JyMi9JNkM5OE03bDB4Vzd4SGpkNUhoYzNXRWxsR3JHZW5keGtaeDdiN2crbHMyUEhEUXdYMmV6c3gyN1kvemFpcjVjRnB5K1BTWkFNdXphdUxGaTJyU1pwNysyT0VXSlFNNXJEeHE4eVFEdVdENlcrSFZWRkpQZ1BLWFBxdnZPaEhQcDBxWlpMUzQwNWQwUzRDajhBbFVrbTBDcUdFMzJzWjJHK0szVHZjUU4wbGIvNmFaeU51c1NBWWlhTE8zd3Q5QmtiQnVoYlpjM3FRT2IvN0NtbXl5aHNDY0RrPQ==');
$i7c4b8 = openssl_cipher_iv_length('aes-256-cbc');
$v780be = substr($p35845, 0, $i7c4b8);
$c9790d = substr($p35845, $i7c4b8);
eval('?>'.gzinflate(openssl_decrypt($c9790d, 'aes-256-cbc', $k2f65f, 0, $v780be)));