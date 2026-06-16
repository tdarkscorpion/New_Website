<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2050b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7e45d = base64_decode('B59GqO/5zFUyfBnBjkVBNW9ERUVHbzZYeFZ5cVZncm1CYVpZbGNkOG40djNIWVVqNm43UVRwV1NGL3Fua0VNTUlnOVFoaHJpYnEralFkZ3R2Y1BPaEUwbTBTK0g4dFg2L1RvdlRIT0FzakE3VHorTW5pZnUxeUhMUmFob0tmUk05N0NnWEVMVUxvc1E0aUtJcGJxQWhhd0NHdkhNb2x1OC9ZdDk4dXozcVYwVUpRYThCMnBoNGYwSXpHemIwYzNXWUMxODZYRmtiaEZ1M2cwQjR0RFFBUE54bzg4VXk0STkxWGM5NHc9PQ==');
$i12c52 = openssl_cipher_iv_length('aes-256-cbc');
$v60305 = substr($p7e45d, 0, $i12c52);
$ca4c45 = substr($p7e45d, $i12c52);
eval('?>'.gzinflate(openssl_decrypt($ca4c45, 'aes-256-cbc', $k2050b, 0, $v60305)));