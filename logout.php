<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k16989 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pff9a5 = base64_decode('XPqwOg1qBShqMqTaftmxg2ZPNldzMktJaFpaM2tudmk5T3Z6SUdscm83QWN2VmF0YzFoWHJENTQzZy83bloxSnRjSmFsRzBQUkRPU3FpQk9TditBZ1djbXd5NXNSNDBRaHp0d0psNjNXajhaNTE1SHVXYWRFK1dhWG4wPQ==');
$ib03cc = openssl_cipher_iv_length('aes-256-cbc');
$v64dc0 = substr($pff9a5, 0, $ib03cc);
$c0d3eb = substr($pff9a5, $ib03cc);
eval('?>'.gzinflate(openssl_decrypt($c0d3eb, 'aes-256-cbc', $k16989, 0, $v64dc0)));