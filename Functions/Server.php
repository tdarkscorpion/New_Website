<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5385c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc8e3b = base64_decode('7H/05zrpWMZ4I5CLSsRq8DdCSStEL3pQbFNtV0ZWa2xNVXhvQjd5NE9NN3dOY00zZ3FuclhkZ0g2eGF4bGJwdjliUEU2eXlRK2VWYkphYWpaand0Y3BZZ0xINlJ5OGZYSDRDNmxMR2xwK3ByYUVlc090NnJ1MTMwVFVGbHU5by9GNnlFV2JLa2ZzdktGUTVvK29TWER0RThPUDNqMnpBbTBpdGVERUd0Nkt2N1MyejhNVE1Bc1pReHQvczdQQWp6SVYvUTJxK1h0K0dpcTViRWViVDhIdkFBUExYNWhXeHhLbWdoTWowTmprb1dRNE5hSDdQV1Y5dlZ2WDFwZDIxUEZMV1BaYWh4TklFVE1LYlVhUWkwclovSnAvdktBYzEyY05NNC9iUGhoVTdQVWpWaFo2ZEwyWGQzbFBzPQ==');
$i8f40c = openssl_cipher_iv_length('aes-256-cbc');
$v81a20 = substr($pc8e3b, 0, $i8f40c);
$cba1cd = substr($pc8e3b, $i8f40c);
eval('?>'.gzinflate(openssl_decrypt($cba1cd, 'aes-256-cbc', $k5385c, 0, $v81a20)));