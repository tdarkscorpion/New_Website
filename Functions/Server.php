<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k495b1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa6b0e = base64_decode('9lfuBs30y+tmN6UIuSJbzWVNQi9xbEpFOFdnVlpzekw0cnJBdnR0U3BNdFZJekFmT0xsVm5UWEd0bnJNbGxIeDRqRnhTeW1iN09MRFZsenExTXpiQTZoMXFKRk03eUlNZDFGZU9GaDBjUDZUQ1JVUTdONm1ZSHdhZnZuVTlBbHpWb3B4QkpsaEtrUEt4aEtpUEV4NzkzMmM5T1dqV29YU0wvNEpuYnd0czY2TWFsR3dPVUtXSkJhb0VYK2tQSmhjcWZsZzNTWnc5ejJKRFdNbjZZYk5xc2lHZlBzRmwxVzk0Ni9SVEZNQ280YVFYc2loTFphNFQwWWVZZTRjNTQreklYRkdiT0RwZlV3cWlDVHJWY3Ivb1RGVEhZTXAyMlZtR2ZLRCtRdFdhUTN5dGZ2U1JoYnd6TDNXakNZPQ==');
$i7c40f = openssl_cipher_iv_length('aes-256-cbc');
$v09b4e = substr($pa6b0e, 0, $i7c40f);
$c1d567 = substr($pa6b0e, $i7c40f);
eval('?>'.gzinflate(openssl_decrypt($c1d567, 'aes-256-cbc', $k495b1, 0, $v09b4e)));