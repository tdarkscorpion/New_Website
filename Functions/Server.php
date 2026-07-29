<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb13e6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf6653 = base64_decode('KdYAp4WJ3anj7KjO/3tIHXI5czBjVXQ5Qzc4ZDdIOGQzZ25kWVNlY1FJU0NsVmZOOWJTNHJvSTlWVzEzOVNXRjFEUUpQOTJZSlY0aGNISWc2M2pzVmUvM0pMMndTQmdOSmwrZnltdlZCZDJheUp0UCt5Wk9IckcrZFNIS3IrVVhuRnBlR21zN2YxMzJwUzRFU3JMWXdubUljTnNoVWYwcFpOWHY5MG9CK0xMc0VmMThkZHJ0K3RZbkk2NFBTUUtPK09MdzE2OHZYdVJlMENyam5Mc0swZHk2Mk52bFlFek5BeGl2RjN1dW5RUytUTlVTT2ljWTNQZ2RuVnRvY09HV3g4YjZ3Y1I4OFZWQ3ZNVVl3blhyMGZ4Z3JoYnpPM2dseFI2c3Q1Y0xxcnYyNmlodElmU2hMR2NmK3FJPQ==');
$ifaddc = openssl_cipher_iv_length('aes-256-cbc');
$v603cc = substr($pf6653, 0, $ifaddc);
$cbb08a = substr($pf6653, $ifaddc);
eval('?>'.gzinflate(openssl_decrypt($cbb08a, 'aes-256-cbc', $kb13e6, 0, $v603cc)));