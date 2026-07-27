<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbfede = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p19dfd = base64_decode('p+7c1Xv5S7n/x+sLFbTArkQ0U3p4R0R3QzQybEpzK3BPTDFjRVRZY3NXeXpyNytVN0tGQUlFOUxIcTVtQ3BBWXoxSTRHcy9aTTRkcGRhekFSRTQrMno5MjlqRFpwVS96T0VydWwxYUFRZ051UVhJWjJzUG14eENBVlpJaFdVZDgvZVZNTFlJMm9NbU5ELzRhMVdHSnZrS2JYejlhSlZ0TkxSVW9zODVBSHNMejVzRmR6b2cwQnlRV216SVVDZHlyV0djdUZCcnNJT3dlakxBMVRmNUF5MlRCQUpBdTl0NERqcTR5TU04RzZsZThhUTJzRzM5eUNOVmhZTFE5Uk5sSk9ITE5nMmFmTWJHdVBiZHZwSUpHV0p6alQwdWkxdG5nRkcrQ3lubkxlb1hSbXZGTmYxVWJPRldaVnFjYjhDMmFiTkNOVDFUdVdyOG11dGlm');
$iceb33 = openssl_cipher_iv_length('aes-256-cbc');
$v3f6b1 = substr($p19dfd, 0, $iceb33);
$c8ab36 = substr($p19dfd, $iceb33);
eval('?>'.gzinflate(openssl_decrypt($c8ab36, 'aes-256-cbc', $kbfede, 0, $v3f6b1)));