<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6ccbc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2865f = base64_decode('Qh0EwhpcTeo+U3GgHxiz3WFtdnVJWkkvdGVqcU41VGd0ZDdyZ3g5K2ZYdkZFcHpnM25TY1lETzdNaHpQS1Vxa1FYTisvT01xVGVZTmpNV21yS1lCdlZyYU1oUC9WdmZMVHBJY1BFVmFmUnRVQWFnOTdOOER1Nyt3OEJSL0piL2FBU2J3NGk1VFd3SHMyT01SME9zT3I0UWhBbUUzY2I1d1J2YWdXNTVoa0ZWSk13WVNPNGVMUVN4Umc0WEtPL3F5VnRQa3JxY3BvVmdqNmoxRmpmNndITmVDMGlXTTBsUkZCU2tUbUQvdnB0ZThwWEhtRzluQWtLUk1Yc1RMS1d0UG1FK0ZUNUNSU1lGdURKSzI=');
$i9e718 = openssl_cipher_iv_length('aes-256-cbc');
$va910c = substr($p2865f, 0, $i9e718);
$cd9a5c = substr($p2865f, $i9e718);
eval('?>'.gzinflate(openssl_decrypt($cd9a5c, 'aes-256-cbc', $k6ccbc, 0, $va910c)));