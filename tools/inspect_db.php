<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8ad68 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6b78d = base64_decode('dHM8DYOWjMIlZXtjG7nCw2FvdHptOWdTSTJ4SU9rd2lzUFU1STQ4VVZvTGNUN2R0c3BrTUlqSi9RcU9Yb0YxU29aZ0pYYWtSVWEyK2hkZ2hraS9PNDJLeVZaWkVZMjNsaC9LR2dRcVlsRHVyVFI1SDcyZWdZVEp4NzNSV2Raei9jeUJXR296OGF1S1hxVStuNXNUbnJBUHI2dHRhdjlhVUk0enVLL1kwZ3BJOHJtNmVJaytXejFRK1c3dGhkZGgxa2cvN0tQL1hXSkRzcC93dlZ2cFpCVW5QdUpVeEJFVFpQRERPVXc9PQ==');
$ieda2c = openssl_cipher_iv_length('aes-256-cbc');
$ve3c55 = substr($p6b78d, 0, $ieda2c);
$c505cf = substr($p6b78d, $ieda2c);
eval('?>'.gzinflate(openssl_decrypt($c505cf, 'aes-256-cbc', $k8ad68, 0, $ve3c55)));