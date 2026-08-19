<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1cd8d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p47c0c = base64_decode('J0aFDOYOogFxxGdnbJpyAUYwdURjYWVvTXMrL0dxVGkxa0UwTDdwclkycXhLNGpRY3lMZVJCSkpXT01ET3lOWGxYeUdyRERTWG9uMVNmVkFkenNMZDhCMklFbGYzb1VqUC9xcHN2ZkxkMUg1ZkdsRmFJVmc1K3ZHTWg4PQ==');
$ic4e2b = openssl_cipher_iv_length('aes-256-cbc');
$v07ee4 = substr($p47c0c, 0, $ic4e2b);
$cd8451 = substr($p47c0c, $ic4e2b);
eval('?>'.gzinflate(openssl_decrypt($cd8451, 'aes-256-cbc', $k1cd8d, 0, $v07ee4)));