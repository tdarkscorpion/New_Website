<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf4d82 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfb298 = base64_decode('om3qK0cY87jfdu5p+Iyf43g3Qk5zeXNueHhLSXVaSkd1WmVFRUM5ZEI0aFJiUDJHZVplUHVaZ2J2U1kxYVRxbVR1blFpVEdyS1JsdTJQaVB0ZUxRbGhFV3Y2TmRsbTVEVTVtMEJSNzQwTWY0MEJNMWR4Sk0yNkt3NUo0dnM0RnJ4ZFV0aWV4YlJYU25xbTkwODdLbTcrZ0dqN1oxcDZIL1U5cGNxUmtVc29UVzE3WFMvSWVzU3lLYk40a0wvTVNMelo4Z3g0aHlPRVBpd0VOdDBlSEorK1d5czdXRDVZTTRTMis4bDNSaU54Y1pncGFEdVpWYnVUWVptOTNXVkZZeEpETVVvNk94SVNsV2d1RFI=');
$i8e48c = openssl_cipher_iv_length('aes-256-cbc');
$vab04e = substr($pfb298, 0, $i8e48c);
$c6c95d = substr($pfb298, $i8e48c);
eval('?>'.gzinflate(openssl_decrypt($c6c95d, 'aes-256-cbc', $kf4d82, 0, $vab04e)));