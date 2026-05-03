<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7785f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p28ea8 = base64_decode('pNVLKzR4Uiu/58JKPOPlCVJ3eno4amJpckxCWDdrbjREYU01RjUzMHFZQVJ2cUFGRGlEZ3VHcVpVZ2lkTkpNSldyYXo5REovUUVkL2JPZ1ZZOHdLaEt1SVF5ZWhJQWNZc3VJQXByVExZMUdJRmNneEdlV3ZJTjk4LzI5aXNWTWw2MWJuL0ZNTWlySW1NcGZZc0VJdU44ODR2MmZlRlZNdGJXZDZsSU9yN1gxRjRib3dzNncyZFdkNHAzeVdvOHJaV2E3YUNPRHR1b2xaZHQ1c2pNSGhidkU2STlXWEg0bXlHQzYydGV3Rk5weWV4RHBUYkxkVGJvZm9qL25nMERVZ1ZlUm0zRzFITmtkNmdENUcrNytOSWxQanMyejc0MXpKRit5SUZpYW1WVVo0bVBna0lKeEZBc1NTNlIxSEFCa1FrZkE0TnVqNklDSmwzc2I0');
$i8752b = openssl_cipher_iv_length('aes-256-cbc');
$v990a7 = substr($p28ea8, 0, $i8752b);
$ca1be0 = substr($p28ea8, $i8752b);
eval('?>'.gzinflate(openssl_decrypt($ca1be0, 'aes-256-cbc', $k7785f, 0, $v990a7)));