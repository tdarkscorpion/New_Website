<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf611e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3ecba = base64_decode('FTk68lm+5oXY7ky42pL6czFUeHFXMllHL0VyQ242NFR5ZmxRS1ozcVh2SE1MQlNzQmR3T0lkTnh4S2g2ZmdZWkFlOEdWYW4wdWJINkZHVXNOVTAveHNXbjFXeGF4SmZrN3ZuaVp3Qjlua3VDS0RCTUdVVnZ5UVYzSXlnPQ==');
$i44c1d = openssl_cipher_iv_length('aes-256-cbc');
$v9dea7 = substr($p3ecba, 0, $i44c1d);
$c83eec = substr($p3ecba, $i44c1d);
eval('?>'.gzinflate(openssl_decrypt($c83eec, 'aes-256-cbc', $kf611e, 0, $v9dea7)));