<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5d10d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peeca7 = base64_decode('oI40kC2/dlvMHBWUWp6AmTloZlRpWHFJb3VyaVpwdWpOK2o5Zk43QTB6TUcybTg1NVJOY3RDSTE4T3R4UmNtSjVSU3NhSEdDVG9UYVdlOHZsY0s2bnZmTVFVVDJWaUpJTVNVOGRtcjh6bTA3elMzMmhaYUJNZjRCdjNhY2hCNHRkYUVHc0hHVlEyWE5FZjhyTGZCVG5qUWlRZWtnbG9SYUR4TE1ETUdwUUkwQjFJaVQ4aFBydkNNVnhOTUU3dWpWZ0dvV2cvdy9RS0t4RDU4UnlhZlAxMDVHNmRYenYrM3Z2dWMrTGRFSHZLNDhydFkzajlBeUYvNUJpM0NZMXU4eDJ0Yk9wY0FNM2d1WTJPeXJyeWRlOGd0a05pMGZYczBPSmREWEhpMkNCcHJrbDJteWdyTW1uNzZMSEZNPQ==');
$i2fa35 = openssl_cipher_iv_length('aes-256-cbc');
$vb947c = substr($peeca7, 0, $i2fa35);
$cae745 = substr($peeca7, $i2fa35);
eval('?>'.gzinflate(openssl_decrypt($cae745, 'aes-256-cbc', $k5d10d, 0, $vb947c)));