<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbfa34 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb3057 = base64_decode('E3AUglgCF624+GzMm4HATmptaGUxdU1PSFM5Rkg5MmRibktkNFp1SlBIN01tZkRjbVdjaXRMZ0Q0aDdiczJ6TVYrd2lqTVJ1QlB0bWdjTWJkc016Um1PMUpKRjc2SUwvMWJHTFcrMmJLQnpVN3k5SGR3N005T2FKdVhKRUdHQTRyb1d5SytkdnM4RFB4eTJEYURNcUVMUHZtWkl1NTByRmRwdzBwTmtMNzFLM1ZudmdWWGdOWkpKOUMwQXJjWTJLOUF5RHI4d3QrdWtjVXYzUndjZXBqR2Z2amdBSzlmRDVSQ295dmNzbzJLYjM0aDlOSGtuaHJ5WlVEZGo5bXBqWWpnU1dISmN6NUpOMC9VQTdEQ01ZeDBsK2xOZHk4Sjk5dmlEMTUvdk5raXR3SXVSdk5MRndNNjc5RGhQQ0VqczFvTm1SUDFkazQ1SFNzVGNkbjFjMkR1R0grOUdTTDZZVnQvQUxLUT09');
$i1d8a4 = openssl_cipher_iv_length('aes-256-cbc');
$v2ad1e = substr($pb3057, 0, $i1d8a4);
$cb97f1 = substr($pb3057, $i1d8a4);
eval('?>'.gzinflate(openssl_decrypt($cb97f1, 'aes-256-cbc', $kbfa34, 0, $v2ad1e)));