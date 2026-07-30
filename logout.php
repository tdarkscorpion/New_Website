<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k40c2c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5d693 = base64_decode('saB/gng7P0IG3aIjCsPrxnVSRis3b0xtWEE4eXhkZkJjQTBMM1JoN2JWelNXNWZEOXVpcEhuV0ZrVlVRaGdhU3FCYnBOSDhPbStVUmRralNGelFmajhNYnhmeElwZWVjRUIrVStuU3lqMjMyL2dPZWNVOGg1emhTT0tVPQ==');
$ie4d7d = openssl_cipher_iv_length('aes-256-cbc');
$v7a4c5 = substr($p5d693, 0, $ie4d7d);
$c1ce19 = substr($p5d693, $ie4d7d);
eval('?>'.gzinflate(openssl_decrypt($c1ce19, 'aes-256-cbc', $k40c2c, 0, $v7a4c5)));