<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9956e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb99b7 = base64_decode('+6bEvz3XP3Af66XqKtTyn2pEUU16Ri9jcVMyR1F0MlI0QjdhbVBCMkhndTc5cjhZaVRiK3NMdVhIODdPNzdRRGlkdGVDYUxEWCswWWY0RzZHb1dVRVBZa1FiaFl5MW1GNFBlRkdlejk1Ynh3QVBTamFUd0M4a2xicVc1clVlNVJocmR2eHBVMW5KSDdVWCtMOWl0OVp5dFRBMFJ2WFpXamNiNXk5R2Y3S0o3SENDdVZPWkUrSk01QkczY3NzU0FqTC9uV3VaUG5aZ2tzaW1tblFYWm1MSUwwZzhjdUdUMVlVTWdrWHRWaEpyMnpuUlRBWHpmeXczU04reG1rQmNpcW1idFVZSnVaVE54REZrSVVsSkNiQkpTdVhKV0xLS2ZHcDR5RmF2azFpajNyL1hKUDZxelVqVEVqdDB6S0d2K3hGMGJ2ajJwK084QnhlWjRM');
$i17fe7 = openssl_cipher_iv_length('aes-256-cbc');
$v3c7f0 = substr($pb99b7, 0, $i17fe7);
$c82547 = substr($pb99b7, $i17fe7);
eval('?>'.gzinflate(openssl_decrypt($c82547, 'aes-256-cbc', $k9956e, 0, $v3c7f0)));