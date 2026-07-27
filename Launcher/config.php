<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k85870 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5d43d = base64_decode('v83YzpOJCjQXTgjTQEhHMHhVL3Uybmdra0JSTWxoL0RyNjJlMWh2b2ZDS0ZMWnIxVy9FeStBbTJuYk50NGo1Z0lGc0djUzEzS1Zsc3NoMngyd1lHQ2l0NW91MzFkU01heEM4WDh2dXp0UFBhTFZnQzV0OU5KUmpIQzFSc3IrV0hZV0tCeWw1bXlZaHFxOFBMbDhCSXFSdm1RaURpRlo1NUg5ekxHczFUdmJvSHQ0UThtc3cxYWx6TkZaVnNUdmVYSmdDVmFhTm5TeE93dTVTaDVTZ2IvZ3ZmSnF3WWNKMnh1MTl1UjBzb1JpWGU1UHR3OGhaSjBSYUZhc2NwWTJlSy8yaGdqcFlVaDcvc3lGMU9ZanBOaEdlcS8vNEtoN3BoSU9zN2NDMTZ6Zi9iNjYwNzMwbzhxOEgwMHVnPQ==');
$i6d6f2 = openssl_cipher_iv_length('aes-256-cbc');
$v2bd02 = substr($p5d43d, 0, $i6d6f2);
$c73be3 = substr($p5d43d, $i6d6f2);
eval('?>'.gzinflate(openssl_decrypt($c73be3, 'aes-256-cbc', $k85870, 0, $v2bd02)));