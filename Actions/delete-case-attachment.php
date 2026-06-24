<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k09c27 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p924ec = base64_decode('S25hKY+0F/+0zX2djprF2G0zVUNxWHJpakxTZFM2Tm44b1hqOEgxVk5TVWZiWldXK0sxSzVlaWM4dUpMOUpyYWlSNVd6S3N5RWtaWEpDMnMxcVRPaFk3a2Y2Y1NaWFBwVFU0VFRlRDNsZ2NTSGdRTzhZb2x2Q2UrRVQyWTd3NUoyeE1vUlg1Y2xKOHNKb3M5OUZoNW5nRndLWGZCQm1ra1NZRFpTbmc1Yll2ckZrQXM0cUFwR3o4eGF2SWhodEorUy9jRGMyWVBDQ0dJMU1mVm54azA1NmVHWmVrc0dScHduU3BsTzhOMjVXbGF4MEJ1NUlmY2VDNkx1SXN4R2xzSUJlYzRQUkdKODJhdktIRGVPdzEycER1aThyeXBDRThJb2hvbUZQNHdLWnBWSW5oOUpRYmlDQy8zUUNsRjFmamR3T2Y3cGJuR01WQzBXUFpB');
$i403f0 = openssl_cipher_iv_length('aes-256-cbc');
$vd63f7 = substr($p924ec, 0, $i403f0);
$c016e1 = substr($p924ec, $i403f0);
eval('?>'.gzinflate(openssl_decrypt($c016e1, 'aes-256-cbc', $k09c27, 0, $vd63f7)));