<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3111b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p439d8 = base64_decode('VTg/dJZ/Z42sLjMViBsWnzBpOG1mcjA2Mm5vMzRqbkNjU2l1dTVYNGs2ZlA5REJxYkRZdjIzV1FRVWR1QkZvL2wvbi9FOVNrZ3ZuTG41V3dTSVNHYWZ5VlNCSVY5Z1Njb2VvWlRXYVg0WkppcU55OE9mN1hBejBEbFRJPQ==');
$i18222 = openssl_cipher_iv_length('aes-256-cbc');
$v02415 = substr($p439d8, 0, $i18222);
$cf8382 = substr($p439d8, $i18222);
eval('?>'.gzinflate(openssl_decrypt($cf8382, 'aes-256-cbc', $k3111b, 0, $v02415)));