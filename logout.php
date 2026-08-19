<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc74cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf7004 = base64_decode('RFJrNWgxbMA/H03GMPUnq09SKzN5ZC94N1pkdUgwcFBhT2pybUYyQjNOS2FKQXpyMDhOUkhsV0EwbDMyNEd1VTR1cmg4dmdZZlZNK3c5QkYySzZXQ1pvUHF2RmsvaDY4dTY1d3NVck8wQit1U3RkTGVWMDNWZ3diV0RnPQ==');
$i95a55 = openssl_cipher_iv_length('aes-256-cbc');
$v6e1dc = substr($pf7004, 0, $i95a55);
$c9f4e8 = substr($pf7004, $i95a55);
eval('?>'.gzinflate(openssl_decrypt($c9f4e8, 'aes-256-cbc', $kc74cc, 0, $v6e1dc)));