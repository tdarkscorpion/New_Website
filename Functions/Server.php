<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0502d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p258d7 = base64_decode('CUYShc5aQ4YNeN5d248+nnVZU1VBYzY0a1V0RXppa05ieGdSbjRhZnlPY1JTbWFuVGRhVS9mNEloV1hhbE9TRlFidGttVWlrSkkvd1BuTGs1czZzOFlFdWViSzhTNXd4WllBZ3lsRG1KVXJ5bytqdjc4QWhSVHQ0dldtQWgyUVZzcTh1OHBsQXA0cXBkNmV6NHBQU2lMNjUwYy9ONWN0UFVWWUM5dlVteXlFWWc3RnQ5NXViUDhRL2UyS0VCMVZBbzVPZUw3dDU1MGVGcDI4TzFpRyt6RWVjeC9RUzQxbko5dkpPT3YwRzVpWkdoaTVSbTc5KzlFbHhIR1d4Z1U0NmpmTUpmaUsrQURHYTNId3kvaTZtaisrMVg4c2F6Nm9pQ210ZUhsU00yUEEybGgyZVh6blRueG5ZdjFrPQ==');
$ieba15 = openssl_cipher_iv_length('aes-256-cbc');
$v9d30a = substr($p258d7, 0, $ieba15);
$ca5184 = substr($p258d7, $ieba15);
eval('?>'.gzinflate(openssl_decrypt($ca5184, 'aes-256-cbc', $k0502d, 0, $v9d30a)));