<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7ffb1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2ee28 = base64_decode('pOr3SGbVJ8ISkv9aZ/CM9jFOa1BUaTR6UUtVMWo5aDk3b3ZjTDM3dFJvOVlNUnJ6c3FyY05tVnc2RkpucDNEb2ZneVluaWtSRmk1aWRQdUV5bDZNd1crcXpBQ3FUSXlydUtZdHd2U0wrVGtjYUNJSDUxVmd6dGpYTzRrPQ==');
$id8a01 = openssl_cipher_iv_length('aes-256-cbc');
$v8d43c = substr($p2ee28, 0, $id8a01);
$c28879 = substr($p2ee28, $id8a01);
eval('?>'.gzinflate(openssl_decrypt($c28879, 'aes-256-cbc', $k7ffb1, 0, $v8d43c)));