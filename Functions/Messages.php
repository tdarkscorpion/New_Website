<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k107e4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1c3cd = base64_decode('OSthpEnnrUTbtPiK2ESh7zZ1TFU4TWJObmRMOHJjZkMrVWFYbjZmSTRTQzlLQzAxcExhSS81cmgxNHhoSEpmeGhQakVRMURXcWxoRGV3NFh4ckI5TTI5WnVkeWF2UXQxRGVqd1FJa3N0bG16aDZyRkQyR0RwY1BhcGwyT3lxdUZNUDYzMWNmZG53b2tEaGRicFhlL0h0QXZiVDhQMXZBR0VWZHpSWEV6aG55RlplbnJjRkJrKzB4STBnSzJyQ3dJU21YTHJFd3BOeS9kM0ptRkI0ZFh2c2pxWHZDaDdTckZPeTZxclJEZ3JvYkFLR2JwalJvemRxWnAxL2pQK0M0aHBiTUdQemtKOXhDUVp3bFA4N3JFWGVCckNLNElIVGhpZ2xsYzlUazNlSkRvc3U2akVML0dPYjR1R3UwPQ==');
$id91e1 = openssl_cipher_iv_length('aes-256-cbc');
$v252b2 = substr($p1c3cd, 0, $id91e1);
$c17c12 = substr($p1c3cd, $id91e1);
eval('?>'.gzinflate(openssl_decrypt($c17c12, 'aes-256-cbc', $k107e4, 0, $v252b2)));