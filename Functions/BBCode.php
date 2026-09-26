<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf99fb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7b607 = base64_decode('GiZRCx7jhWXCxll/62cyvFpaUmIzVFo3ajVhWDRlNXhPL29vKzFpNkY2QjNzQnVZaGcxeExJZHNvTkJmVWk3SEhaRHppR2orTUllSzJieVhkelBJWmppV1NDem04RURLVlZ4bjlzbm9NNExvQzVGV1RjNFlwOHZkSlJlMGh1b3p4NTdiNHEwdkpkNms4cDd0L3piYktGKytDMnJRcHYxdk83MEhoZ3BJNHQvUjB0QzFkeGZFSEtnSmJ2Y0JaOSswY1VmVUVnT3MxQzZpTmt2ekwwQkJoNmJaTkNuOEZSM0JybHdXUkFpSmtMcEtiNDlKRUxSbjBpc3k2dllzQ2N0Rk1pbXg5VlpvM1BRWGM5cUJ2bDA0NDhIZEgzNzRubXR6TnNkdVRSN0NsUUJ2YldHTnAyTEU1RHlGUW1SWHc4WlBPQ3FYQkdVM0N0Qy9JK3ZU');
$i5b905 = openssl_cipher_iv_length('aes-256-cbc');
$v9dda0 = substr($p7b607, 0, $i5b905);
$cb1e6d = substr($p7b607, $i5b905);
eval('?>'.gzinflate(openssl_decrypt($cb1e6d, 'aes-256-cbc', $kf99fb, 0, $v9dda0)));