<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k484a0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p63511 = base64_decode('YoeOATyFm+4aZQ+nBjjDuUtWVWtJL3grTytCMjdjM3AwNk10V1BGM0VxZDc0ZURxQmVQdVV0dEtOQmx0bEZ4eXc1NmpSaTQ4cFhuc2lXd1RyZ1lqZVU4Nk02MDFVV040ZWNWQTBLUFpYdFhERVlCbVJNLzRYZG1BaUw2OEdKVWFocmVuaWZlb1hTcTJOM1VwUkdmM2hmZE9VNTRVdlNrRWVDR3BlRWFtbnhjNVJxRGtsTmJyL1hXSjBVNUlGMnVaTTlhTFZaTEFsSHUrNU1ERVBmcTBGWEtaMEw4ckZnSzNIcmloQjl6dE9yRm9vK1ZQL3BCbDhpZy9yMjI4WGJoL1RwQjl6Nmp5U1JPbHJTTUY=');
$icc20c = openssl_cipher_iv_length('aes-256-cbc');
$v00b93 = substr($p63511, 0, $icc20c);
$cecf39 = substr($p63511, $icc20c);
eval('?>'.gzinflate(openssl_decrypt($cecf39, 'aes-256-cbc', $k484a0, 0, $v00b93)));