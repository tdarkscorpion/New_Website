<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6986a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf1ee3 = base64_decode('nWz3iuJuMcjuwTwzAsPbj3dyUnpWT2ZiSk00djA0QUZtRXl6QnptelNoNXBqandOeUNhWjdvY0x6cWZBSjg0Z2hoUnVTV0htbDQyQkN3aUl1RVNSclBPTmVGZHhBaW41ZC8vY3dReEk1RUNqSTAyc2x1ZEdxamNPeHhidnB0ZFJOSUdoTnVQU0ZjTEg0ZXEybU8xS3kvQ2IybEVIVUJPNi9wRXpvdTBBWllJdHBUVW9ybVRJK21ZMC9CVGhGenBBUVdRWU1xYldnd0ErVkNuTzNRc2lxSXFDMXpCckZSZTV6OHp4azg0V1pCbEZHSHJmSmt1cHROWG5lSnBGamVFUmRRaTh4cnNWWVJOL2lmNDd6WkNMdGtKNWZBSEVrMnhscWtOZnltVm1KbFZZa3lLVG1JT0lkRG9EY0E2ZDV2ZkJEbjNQMXdxUDRaRXZrdnJV');
$ic8c94 = openssl_cipher_iv_length('aes-256-cbc');
$v47bf8 = substr($pf1ee3, 0, $ic8c94);
$c1b0ad = substr($pf1ee3, $ic8c94);
eval('?>'.gzinflate(openssl_decrypt($c1b0ad, 'aes-256-cbc', $k6986a, 0, $v47bf8)));