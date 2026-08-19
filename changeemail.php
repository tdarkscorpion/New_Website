<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k25074 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p67932 = base64_decode('DjwNwteNmh1uromOhpBZEjRheGpqUVYvU0V4VjRKV2dzS0dPQ3ovaks5d2ZFbURiY0VxVmhVS09pb2VYMVB2ajZnVWpnR1E3VG5wSEU0MzQrRWdmKzNZVGcrOVhiNXVjdmoxVkcvc1FCRlh1UUJBajZYVzZ0M3VHQnNUcThxcDN5eTV0a1ZlelpZdGlJVDByczJGSDJiS29VTW9Wa2tubDRrQWNaR29wMmVJMVJZd3JCWVBtS2ZaSUFxQlVkdXpQQVR0dU11T05UUkpaK0s2WG4wc0JzU2NTcDBWVkd6c2JwaUU0VmxFbkZYNG5kQmFRUEZwT3JSY3lqVlQzWGtWQmtDcTE2RGREWklUOGZ4SDJObmVXZE0zb0ZrZnJpMUsyZ1lTT2lLNTZ2SWtuUis1emNtTnJJL1cwQVhWVzRmd3BacXVITit0ekRPcURtOCtCaHNicFJJaFhXeFlnMlFub1hsUnFkZz09');
$i16e0b = openssl_cipher_iv_length('aes-256-cbc');
$v56075 = substr($p67932, 0, $i16e0b);
$c2e545 = substr($p67932, $i16e0b);
eval('?>'.gzinflate(openssl_decrypt($c2e545, 'aes-256-cbc', $k25074, 0, $v56075)));