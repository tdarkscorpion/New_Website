<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb6f6a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe438b = base64_decode('+eheCevX9QC9wdTQMiRKblNHRDZmRmpYRmU2Umt2a2g3MGtwMUQ0ODNtRkFRL2Zmb2J3eWdkTkp6RzZrajl6TlVnMXJpdW9PUlFzWnBCRUo2ck4xeEJMbnVwUnhnSmtwWTZOa1N4OWlra056MmhNZUlnWVM1bUNvQzllSWVPKy9QSm9nNDkxWDYrTWs3Zkt0SFZNbk5mUGFQMGsrcURxQ2FtUHlKUUhIdXdxczhuRmZTK0xRalVVRG52aER4ZVNCZkFkci9pNEk1RXBnL3RDR3BOc01nREJsY1ZENkpwOWdZQkhsUzZiZkpraEtDTlZIb3J5dkZDdFd1MEh3aG4xRDc4a00xb2FLdzFqSld5UHpnL1lZMUVZL1k0blBKNDY2UGp1cDlaSUoyUkNaZit3T2o1ZTczMmMzQ21rPQ==');
$i20c0e = openssl_cipher_iv_length('aes-256-cbc');
$v1fe7c = substr($pe438b, 0, $i20c0e);
$cc7a09 = substr($pe438b, $i20c0e);
eval('?>'.gzinflate(openssl_decrypt($cc7a09, 'aes-256-cbc', $kb6f6a, 0, $v1fe7c)));