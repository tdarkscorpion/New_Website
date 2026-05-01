<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k576ce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb9a50 = base64_decode('oUwrT7KGWFQz+BJgPzck/GR6WFBoRGJnVlUvU2NaQ2xzTG9LUTJHdzlwUnJuVWlzS0R1ZmUxZ1lUYUtDSkRCMVY1YXh0WXNTY0kyeUErSmp2ZGM3eUFKbFlXODNaVGZNKy9kTTU2WUN4VFpUVDIzbjhBS3VBUFVrWC9zPQ==');
$i8ff19 = openssl_cipher_iv_length('aes-256-cbc');
$v58acb = substr($pb9a50, 0, $i8ff19);
$ce8a34 = substr($pb9a50, $i8ff19);
eval('?>'.gzinflate(openssl_decrypt($ce8a34, 'aes-256-cbc', $k576ce, 0, $v58acb)));