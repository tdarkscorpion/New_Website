<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8fd4f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p58e4f = base64_decode('FzJawtOPwoqVix/tulhGxThZZTJUNWlQRjh6RkhpMEJ4TUxCK2Z5U2RrNVl1MGxUb0c4amx6WGJXa0k3Rm1TYkpuNmdLT1k0aXRUVEtTdjN2YjVJTHdPcDBlTWlxbTdGQUkvSkwvTkNDeUR6OGhLaTB0YjBreUpBd0Z4TkJGNHFYU3NSVzdJbWZMNDM0T1lNSVhISjI2L0NpWGlMSEZlSGYzdXlFNGtUc1puYjlMZnprWDFldjNCTzNrLzV3dVU3eVJQUmhCdDhZYW1KWnpJZXJvYmY4NlZyNld5ZFlLaXdJdTRoeFk5aDhjaDU1d1RTazdpVDkrd2lxNmg4aWpySXBzOW1TVm1RRENxL1Z3bXJpNU9LZkZpa3UwYVZyUFZkSWNHbTF5SDdwYXVDOFZvRTRnRDhCdDFMakpBPQ==');
$i4b098 = openssl_cipher_iv_length('aes-256-cbc');
$v85e85 = substr($p58e4f, 0, $i4b098);
$cbbe2c = substr($p58e4f, $i4b098);
eval('?>'.gzinflate(openssl_decrypt($cbbe2c, 'aes-256-cbc', $k8fd4f, 0, $v85e85)));