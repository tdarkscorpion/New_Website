<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcc4af = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p00557 = base64_decode('vZ4uMMlvvtQIuyPMSIMNOkN3QUNMVGQ0RVVJR1F2eG0yRXFvQW1sUEJwK3Rsa2hmRHAxY1dtUkY2bzBRdmdLWkErbDJ0L20rMW9RcVdJNDBKc2haNTF4ZkpUNk9XTUdlOVA3VVZLQng1MXZkNnl6N0IrNlliMUhnaDZjPQ==');
$i3a5cf = openssl_cipher_iv_length('aes-256-cbc');
$vf65e9 = substr($p00557, 0, $i3a5cf);
$cc3d55 = substr($p00557, $i3a5cf);
eval('?>'.gzinflate(openssl_decrypt($cc3d55, 'aes-256-cbc', $kcc4af, 0, $vf65e9)));