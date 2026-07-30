<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k33a83 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6f0e3 = base64_decode('McjyPnn8Sk/SJP1XSFYUKHMwMG5KZGMwb0p0OHM0c3lFaGV6dVJEcEJpL0t6RG5WZ3laVE1zekNKMlJob1JiOEVtTHJuYVRRUDlmSEs4RnY1ejR5TkgvWGhUTVozeFlzeU1qOG1zZDJPVG53NURrSlE5bmJtTnlmOFFmWlc4WnZ2NVBJa29Xd2FSVGsrYzVNRFk2ckQzSm0wTTVPOUNneTdoaXFJamd0MEpWT3R3Q1hWNi9wdXYreXA2VHhrb2pIM1FlQmtEcmp6akhwc2JsQ0o4Z25pWmlBVXVvcENzMXJGQXRQeEFBV1pyS0lNNG5PMERkaThsa3BQcDFNMEthY0JMbndoNGN5RDRtK3VIM1JRQjBmZVFFWWVmUWF5V3Fua1RUb0xiWTFYVE1nSnVkaFJZZEpzME95M05VPQ==');
$ia5d23 = openssl_cipher_iv_length('aes-256-cbc');
$vc6b24 = substr($p6f0e3, 0, $ia5d23);
$cdd401 = substr($p6f0e3, $ia5d23);
eval('?>'.gzinflate(openssl_decrypt($cdd401, 'aes-256-cbc', $k33a83, 0, $vc6b24)));