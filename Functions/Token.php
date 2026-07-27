<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb20bf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p08d08 = base64_decode('D/KIlYzwWnkIIYIBZMTSF0o4RDZhUmhSWEFvLzZPZVE0K0FwUGYzSWdEbG5GMDJuRm1MSmJGYWp5QzJUSkVGekRsOWRoKzZLYkRxcnlOQURuSVJWVGZjZDBIRVV6ZU5WWFVYdnZtNXUyTWZIK0NERkkvQ3JCdGVQNFlkVHAwSmlOcytkdGxjcHJpd0VCdWJPR3F1U1hYL093K2Rib2FMQlQ5eVF4NlhidDJDMjZlZGlYbzhSaW5TU3pDa1JpSkRlcFVXYktacjU0UC8zdktxbVNkUTE0anRRaUJpN1p1aGp2YityVGhwZjl3ZUI2akM2bTZpZ1NpRmRGT1VNcVN2ay9qb2NiUnN1cFVMRGZxbGQ=');
$i19ac0 = openssl_cipher_iv_length('aes-256-cbc');
$v9f553 = substr($p08d08, 0, $i19ac0);
$c7883d = substr($p08d08, $i19ac0);
eval('?>'.gzinflate(openssl_decrypt($c7883d, 'aes-256-cbc', $kb20bf, 0, $v9f553)));