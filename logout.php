<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3c3a6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9723d = base64_decode('KjKZUQUKbhOnKBXV71F0gnpIZWdTM0xGd3dNdDZrZlBPN3QrUFhSZXB2TCtld3RpZ0QrMnlpdzBrVllqcDdIb3J2NDd4d1k1QzNKbWNiRTZyQjJ0L1hwQUFvWGpic2hEc3FZUWxXUEdEY0JCQ1hkQkJwQ3pDZytsZlRBPQ==');
$i7f3da = openssl_cipher_iv_length('aes-256-cbc');
$v79ef0 = substr($p9723d, 0, $i7f3da);
$ca8081 = substr($p9723d, $i7f3da);
eval('?>'.gzinflate(openssl_decrypt($ca8081, 'aes-256-cbc', $k3c3a6, 0, $v79ef0)));