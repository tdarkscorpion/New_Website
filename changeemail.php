<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k35670 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3ab7f = base64_decode('3zM60PLPmiVQx+oD4R5LP0thN0lsUC9wamhRdHlvd3R1RUh6MFVIVDZsYUVvUlZzV3FtYlk5Wm14T0sxd0xPZHRZNTR0RHFabk1keFlpcWR3a3BrWE94d2lrZ2VjcWJmbXJJM3I2VHIrRGdmOG8wcENOeTd2L09IcXR4WTlaQ25yakhHZHpSYktkTllSWk94ZHNRaGlsdllSWThON3p1Y0pNVDJWZ25BTVFpZWZEeENHVVRsZzNFWjVnK1hnU2ZGbXp2eU8weDNscmQ1WGcrbC9FZnZzbjA1a3BoRTNoV3V1SXVoRTNONXNVTnV6akY2ZlFUZmtWRGVVbjVtZjAzT1k5TUxXbGZqdE9HNXZSOVRVV2tQZ3lUeXZ3Mnh1eElkRHhpdzhMMG1QcXRucGFwdGU0ejVEVWsvOEtrNDZCcFMxeXQ1QXNwc21lYXhINGRhRWY1cGxIblZpdFdUMm51ZXlTTnMxZz09');
$ie58f5 = openssl_cipher_iv_length('aes-256-cbc');
$v7c84e = substr($p3ab7f, 0, $ie58f5);
$c72016 = substr($p3ab7f, $ie58f5);
eval('?>'.gzinflate(openssl_decrypt($c72016, 'aes-256-cbc', $k35670, 0, $v7c84e)));