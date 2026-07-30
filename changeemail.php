<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k300c3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pba3dd = base64_decode('u6mihAeQ61fH9srNLUY0REpKM3Q3aG5EaEljVFlHSzU5bGI3VmxMV1VTQXlkME1LOVpkMWtpem5wSmUrcmc4M1pGY05nNTFmY1htNnNlT3NhUHBFaEJCNldNcmF3dkI1MFpXeWVXYUozaXJvTzIxNytOekpRUEJTcFFWdVVJcDdCOXdjeWlJc1Fnckw2Z0VzZGpDSTJTTWZhOWM3aWx1azY4ZGhOY0hPbDVOYS9JS2FncnQreStDNk4raVErWGhxYWcvL2hkbU5TR3RjLzB1Vy95VzRMQWVJOUwyMEhjZmd3bjlMUkNKdUxDZFJxajROWGhkcVhuWjkyR0FsQnQ2UzdkSUlsdjhVemNzN2twWE44N1FOc1NDR1lvWGRsQllvZ1hyV1g1ek1WTU91LzZOMVZMdDk0ZzN0NENsTld1amZPTVhhSWlQNWtWWEIrRCtaWUxibFpOeWlLZjBadDJyMzRMYWJ5Zz09');
$i467a9 = openssl_cipher_iv_length('aes-256-cbc');
$vd900e = substr($pba3dd, 0, $i467a9);
$c58682 = substr($pba3dd, $i467a9);
eval('?>'.gzinflate(openssl_decrypt($c58682, 'aes-256-cbc', $k300c3, 0, $vd900e)));