<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaf5fe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc4be4 = base64_decode('SHX9Wx89fEgeEb22OXK45FFLR2xWRmttRjVjV09PZ1QxbkdKT3QzVXlkNXNkRWU3d0hGSmttcWhNUzRqMmVtUkZFQ3YwQVl6aWl3UG9yN3Y3cVNiZHJaenB6aVVGREJHWnpxNVlpUnBHajhhTFh4YVN5NEV0eFcxbGI0ME9NWTcydk11N24vM2d3RTBYQ2dDU0VoNTRKTFlNdk93YkxvOUlRaGEzRE11KzJVdGpueCs2Ly9XV2N3NVpkQnlaYzZ6MVBhMldiYktjZmY3Q1lBaGVzZkpRR3lWRDJRUFVtdms3c1N2UmZXSUVnY2VmSkJaZGwrNTMxd2J2QW9lM2ZweWtnT0kwUk1PV05GbEVOMlI=');
$i3b177 = openssl_cipher_iv_length('aes-256-cbc');
$v3a616 = substr($pc4be4, 0, $i3b177);
$ca17c5 = substr($pc4be4, $i3b177);
eval('?>'.gzinflate(openssl_decrypt($ca17c5, 'aes-256-cbc', $kaf5fe, 0, $v3a616)));