<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0eb60 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdb095 = base64_decode('Elu378kUMfvmnxg2NvsZS1ltUjhrQSs1L1ZUdmpPeFAxYnpyQ0dldUsrNWdDcStqc0NldnpQanRxZjljaUxOd3JNMXN2cHJmWjJaL2MxOThEWGFyWnE2RGZXU2hCbGxaVFZyazB1VXBZUk1wSHNyNUdrbWU1Z2JPREJFPQ==');
$i66c9a = openssl_cipher_iv_length('aes-256-cbc');
$v869aa = substr($pdb095, 0, $i66c9a);
$c4d01c = substr($pdb095, $i66c9a);
eval('?>'.gzinflate(openssl_decrypt($c4d01c, 'aes-256-cbc', $k0eb60, 0, $v869aa)));