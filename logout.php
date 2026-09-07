<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3130c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1655b = base64_decode('ZKIsE6ne2ARO8oHXcHNBrkxMY0dtYi9NTHZONmI1ZFRvMVg2aFJYY2hiSEtVZUYzZzBRSDhSTmt6M0QvaVFEb1pDbGFLQW4zOEw5YmJ0bXNjU2IvWDBDb2NadWFHZmtpOUtHWUFrZUJZbys5K3ZEWjVOZ0pMemIxVzkwPQ==');
$iabf36 = openssl_cipher_iv_length('aes-256-cbc');
$v31f16 = substr($p1655b, 0, $iabf36);
$c73d55 = substr($p1655b, $iabf36);
eval('?>'.gzinflate(openssl_decrypt($c73d55, 'aes-256-cbc', $k3130c, 0, $v31f16)));