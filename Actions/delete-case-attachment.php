<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k57a3e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pafa51 = base64_decode('tcDvEYnXlz7LDwjY93+Eszh4V091U3VmWHJzNmNiRFZvMlZRSEN0eWc2TlNoMkdYWk1odzBBdWRTU2lLRUgwNkljTDhRcU53SElWTUluWkp2KzBNajZIZ3lCclpkTmdvSGdZWUJjS0M2NEJWaEljUWhGV0RCYnBMQTlpdkZpeXdOeHpINmNzdkxCaUJoVmhaV01pcUUraHVCSXVjWHhEeGt0TWMrcFcvUDdmWHNGNHlSa20zbW9wenMwaisvaXRXa00rYUZtV2NVRHl1RjdSckhkNkk2L2ZBc3RpVWxoL3N1aWtkRzl0cmVWSTNnMjZEQ1hKbXdNMk9XQTR6TEl6eGVlZGx6NTI5YUdZdEpKUUhzd1JJdzV3SUpibkUycnpVQjAyNG1Lak1JVHRVZlp2ZU84VG0yOVhNbXM1WmJPNy9ZRWlGallVbTE1VXV4c1RO');
$i86377 = openssl_cipher_iv_length('aes-256-cbc');
$v16010 = substr($pafa51, 0, $i86377);
$cdb3be = substr($pafa51, $i86377);
eval('?>'.gzinflate(openssl_decrypt($cdb3be, 'aes-256-cbc', $k57a3e, 0, $v16010)));