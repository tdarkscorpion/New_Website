<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k93ade = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p81572 = base64_decode('DM1qu1rBaMpXPGLpjkHLWW5VT1RGa2V3S1hEd0tCaFh4OGJRN2dDcDFxc3pjQkR6K1MrK2hlU3JrblpNSm55WkZORzFZeUlFaDIwcFA2YW10cE1OVXh0Yi9rcFVxcTNwL1ljTjZQdERLZmI4Qm9ad0lZVlA4Mmp1dFFiLy85N0lXRjlxQzMyWXJsRXorUUlBVVQyNGRzWFhmS0syTHRnbWlpOTN3U0dQN1hIbmsxVzRGbURKWDloL2sxMHd3Q3FvSU93NGlxZG42ZDIyRnBCYlJOWXdlVythNVkrc09HL29lalAwZnpwL1kzTC8zcno4SFJzMXFiVURiblJPcExpU2hPblk2NmpKSXowN2RWamNmdUtxeEduYTU3V3FpYk5sNXMzeXZ3PT0=');
$i83e4a = openssl_cipher_iv_length('aes-256-cbc');
$v85b26 = substr($p81572, 0, $i83e4a);
$c861ad = substr($p81572, $i83e4a);
eval('?>'.gzinflate(openssl_decrypt($c861ad, 'aes-256-cbc', $k93ade, 0, $v85b26)));