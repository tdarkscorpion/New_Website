<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k66cbd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2eab2 = base64_decode('ZzAfupdiHlz80HPIpAVl6E1tYXNiQlJ2RW10UHA0dmE2ZFRmLzc5Z1duOXdvZWZXdkh3aUo2bW5DZWxzTzB6eDMra1NyZzdnMUpZVGcvTmZlZ0p4dzNTTUZGRldpYzVwYklab3crbVAxTnYyVFZYd1ZaOWZoaVZkK3pVPQ==');
$ie37fa = openssl_cipher_iv_length('aes-256-cbc');
$vdd00f = substr($p2eab2, 0, $ie37fa);
$c41c65 = substr($p2eab2, $ie37fa);
eval('?>'.gzinflate(openssl_decrypt($c41c65, 'aes-256-cbc', $k66cbd, 0, $vdd00f)));