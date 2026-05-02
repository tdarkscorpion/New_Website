<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1618d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p13540 = base64_decode('ZYR+G0zHpOd8crCGUqiGK2VmOThVb3lQV25PSmEzRWNpeXc5Q3JsMUdndFhFZkNlVHRSOWt6UlVleDBudmxiVlVxQWdCWCtSazBpUGxmVGUrelRodVR2R0pzQ2Q2c3RpUnJQQi9kVTRWZHpCRUVOVUJQeFdhalRnZGoxU2ZFamVTZUZqWUR5cnpDL29DMXVVemxmQU9wSExlVmM1SUdQdHJkK2tGakZCcHV5UmdyUVdpald4dmRyTkJDQmY4RjNEV2IrWEVJVnpWQ3ZXNTRhcw==');
$ida60b = openssl_cipher_iv_length('aes-256-cbc');
$v355f7 = substr($p13540, 0, $ida60b);
$c94ad5 = substr($p13540, $ida60b);
eval('?>'.gzinflate(openssl_decrypt($c94ad5, 'aes-256-cbc', $k1618d, 0, $v355f7)));