<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kef9a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p60ddf = base64_decode('YCLJqJlWWJ/liU+uLIzNDU1Ic0IyNm1YQzBxNjNvaU9Cdkt2MXlzcE5JQVZ3YUNQRHZyTEJlenBlMzk2VG9oREZpRHBGOGRibE00d1V4NzhXaDMyTWVyOVFOK253SUliYWloSExrSXYxV3kyNU91eDdEUVVrODlvYmRLajc3WFlLS0dVL2Y4a2FmdWJjT0ZOR1Rpbm1heEhHaktHb2sxMC9Yck05NkxJM1piNEdNQlhQMDduUk54TEs5aklSS09qV0hvSnpnTnNRand6QjdvNDFyelN2alBGdnhNOUdQT0I2VkFXSmVMQzJsYWhHaEZnSVpEMUFRc05VaWQ0N0hCZmlpSXlBQTc2TGdGdnlPZnM=');
$i39589 = openssl_cipher_iv_length('aes-256-cbc');
$vb525a = substr($p60ddf, 0, $i39589);
$c822ae = substr($p60ddf, $i39589);
eval('?>'.gzinflate(openssl_decrypt($c822ae, 'aes-256-cbc', $kef9a5, 0, $vb525a)));