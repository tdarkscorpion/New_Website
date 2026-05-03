<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3ba31 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc5d33 = base64_decode('G/c2JPWeD//B5k2rLYIOAHREcmQrV2dpK3JFVGR2YWlid1F4SzEvTkFsTHVoaU4zYTBFYzZIdi96MDZqWC9oMmkyNUcxdFl0WFJZMm1UUVduVmlsa3dRV2lEdng5UytUNzZNenNkM3hYT1ZSUG0ydkVqMDk3eGpOeEJRL1V1TzA5Z1BvcmxZTkMyTy8vNVg4U3oza1Z0RjlsRG4wVWRXa0puMFFxOTltcVJCZTNmZEtrY0RnUWNkNURaRkJ3Zm8xN0I0cDVkK3J0MGpzaVNFeg==');
$ibfa47 = openssl_cipher_iv_length('aes-256-cbc');
$vc98ee = substr($pc5d33, 0, $ibfa47);
$c69041 = substr($pc5d33, $ibfa47);
eval('?>'.gzinflate(openssl_decrypt($c69041, 'aes-256-cbc', $k3ba31, 0, $vc98ee)));