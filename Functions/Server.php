<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3ad54 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbff99 = base64_decode('aeXEXtpb7rIJ+MN+NXeFajlOUFFQRlVabjRQbndWdE8yOGRFL2xHdkNBaTZRNDgyUWIxV1BSTG9CeUhoT2EreVdKeU9jWlE2NWxUTEtXeUczdFl4dTREVFBGcDVJRFBWdjRwYnJ6SDNIWFFpTjFYYkxPSkZqYmcvUmRtalNXdUxXMDE0bTlaYjBiY2pBUDFITlNNYWJmcjA3dHJ5T0J2RXRyUGE0N3V4a0p0RURsLzhLSHZhTCt0RHZJcjRWSzZPUC80WEY0K1dvSlB4dGtQSGFkaGdPZUdMZllaRXpHRmlIcTVpWkMxOWZKQWViSFlDVUdTMnRsUnQySGNRbXMxY3RZTU4rV3ZZUS9OUUVISmM3TThpbTdDdmxqYVNRM2d2RUhlYnFnQ1dNRldvRDRyY3J2Z1pLekY0aXNrPQ==');
$i40d2c = openssl_cipher_iv_length('aes-256-cbc');
$v66cc5 = substr($pbff99, 0, $i40d2c);
$cefe4a = substr($pbff99, $i40d2c);
eval('?>'.gzinflate(openssl_decrypt($cefe4a, 'aes-256-cbc', $k3ad54, 0, $v66cc5)));