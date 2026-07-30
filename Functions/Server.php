<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4a456 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3e94d = base64_decode('cyc1Rq79QZTQtL4VrwY74EZWWkRYUXNSRkUvelFmanBaRHVHdjRSMkVsU2QxYVNxWm5iWUJ0VTBuMUk2UU9RYjdIWGNVT0pkQlg5dTJVajQ1QlVQc25VYUlTc1p1K0tsRjc2bENGcHhHSGVpcmV6WFZ0a1FXcFVIbWp1eHR4akw3TmNuWU9QNzNqbTNVTW56NUxBcFRzOEFBRzk3N0h5Y0NrTFRvc1VpcWhkUVJzdGlZb2ZabDV3ajFWVHA5Wis0TWp2L1RudllXTFB1YzV4Z2phY0U0MWpwRk16OWFNZlI4dGtLZENUdEo4bzBoOExneTNnbUZiaEtIbzhoZ2xFb1RuVDd4RkU4TGlHeUF3aU40TktNM0RPUnlPbG1iRTJtS091a2xRbC9BUkZkSUFFVGpNMmtPbDQrMVA4PQ==');
$i84b03 = openssl_cipher_iv_length('aes-256-cbc');
$vcbb97 = substr($p3e94d, 0, $i84b03);
$ce5e40 = substr($p3e94d, $i84b03);
eval('?>'.gzinflate(openssl_decrypt($ce5e40, 'aes-256-cbc', $k4a456, 0, $vcbb97)));