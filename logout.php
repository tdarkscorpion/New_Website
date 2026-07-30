<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k34da4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pab857 = base64_decode('CBTGrbjYy2FC+ifbRf/Q/W90YUZRMG5LdERiVjBMVHliN1pqU1lIbUNjVC9PS29qQVhTYllxUmpKaXNNNGlQOElIMGxoRkRqYm9OK1FHK3BKTHA5NkFZLzdiRlFnSzlKTUhSZDRwY0dQVi92ZU9CM0dNTXUxTFMzQnNzPQ==');
$i3d34b = openssl_cipher_iv_length('aes-256-cbc');
$va9b31 = substr($pab857, 0, $i3d34b);
$cbcca0 = substr($pab857, $i3d34b);
eval('?>'.gzinflate(openssl_decrypt($cbcca0, 'aes-256-cbc', $k34da4, 0, $va9b31)));