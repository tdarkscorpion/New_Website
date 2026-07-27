<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k92c17 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4944 = base64_decode('e5MPiWGw4rReuCeFeV/Q6CtJTC9yVUEzS1JrU0JnakJDYklwRCtlRndCbklscW1Vbm1meC9GbkpGa25rN2NJc0dUOG1LWDhMWlVqaDFUTFNydVRxQklSMXNMNDlOWkNZOFNYMy9DaldIQ1d5VjNXbUdGditKdnN4bDZUQUZZV08vVjFDZzBvK0pGd0RqYW5ndUwrUkhNbnpab1B4c2MxdU1DV2pBU0xtdTdQako0WU1tM1kyckh2Zlo4Mlhva0dVMXVxRmd0Y0NFUVpCajV4VlFVU1hlanJOYk96dTBodzBVdG40UFRJWnpVajNvMkRJcmc2Q244Sm9SQ0ZERFgzRVZnRVIrL2txalZYcEhid2Y=');
$i24d2e = openssl_cipher_iv_length('aes-256-cbc');
$v7eeaf = substr($pa4944, 0, $i24d2e);
$c5864d = substr($pa4944, $i24d2e);
eval('?>'.gzinflate(openssl_decrypt($c5864d, 'aes-256-cbc', $k92c17, 0, $v7eeaf)));