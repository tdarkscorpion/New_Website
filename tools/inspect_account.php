<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfab62 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p14108 = base64_decode('9i5OqOUs/5kyXHcxRa7LEUhadjRKQ2dTb1lvcFRXaHdpSFRjSlVuaVdLSXI4UGhOUjYwaVpzMjArTnlOQzA3dkQxZU5kZzJUS3FrYjlrNHFrNlV4eDgxbEJuSlVBSVBPMjBJS0w4ejh2TDVQTWJTYW9sTW1nZnpVVjBpR01JZVZwbEZsTlZwUE1IQ2RtWUplMmgzenpOZ0dnWVdaWlVyeGREYjcxc0Q4NFRJTG1JZnV2QW5TTW1Yc1ZENFB6WkxwOWcxU3o3NWU5cU9CTXBjVQ==');
$i62ef8 = openssl_cipher_iv_length('aes-256-cbc');
$vc51f0 = substr($p14108, 0, $i62ef8);
$c0d7d8 = substr($p14108, $i62ef8);
eval('?>'.gzinflate(openssl_decrypt($c0d7d8, 'aes-256-cbc', $kfab62, 0, $vc51f0)));