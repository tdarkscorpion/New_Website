<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k269b0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4b2b9 = base64_decode('aNSL6SMx0r3wxD/FH7J2tDVtV3JVZ0YyR0VRWnhEWUZVSWtDNEtuYmpCcEg0Ykp1cVNxdk1mOGxDT1Zid1FtTkc1SjBrSjRhQWJ5NTdvTG0welhDdXkwdnYrczYxWXJjYlBBTGJRb3g2V3hSb01MWm9nYVpUU2w5ZWRXN3htRlR5WFl0VzB4MHE1d1dZOUtydFowNC9Dd0tMTTB1UVRjZTBrUi9yQUVKRmdGeldsSElsNG9IbHJHNTJVYWRCVEdleDlZT0hXdHo3WG9IL29mM0FzWmIvZEo5RGM3L1ZrNWVrWHJjMVBFMkR0TWYyVmcrdXI3ZVR6Z2FOL0VmSGRZSVhuZ3BLd3k2Slc3Nzd3c1hydTdxV3BxU3ZrYXFHSmdlSDBwNjdxSFllM0dXaU1aU00ySHNleXA5RUtwaFN2UkZ2YzNSUFVlYm5nbk51V0xVcUlMeHZndlJDb0Q3Snlldi9kZGM1dz09');
$ieddeb = openssl_cipher_iv_length('aes-256-cbc');
$vf8035 = substr($p4b2b9, 0, $ieddeb);
$c25d13 = substr($p4b2b9, $ieddeb);
eval('?>'.gzinflate(openssl_decrypt($c25d13, 'aes-256-cbc', $k269b0, 0, $vf8035)));