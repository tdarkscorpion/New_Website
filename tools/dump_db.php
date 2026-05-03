<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1c4d5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p84da2 = base64_decode('lBQxcf1kfq6xz1tavs+Ja0lKckQ5RU42QktrREx4dVk1TllpdEJtNFcyQ1IwZkV5ejdodWJSUndXS1MxZDh3RUlzbFVRbit1a3FSNjdVRTZ0Q0Mzem8xL2k2WkRsektjYzBVSWU1UGVMVDNCcCtQc1pvVWQzQmVqS1M2Q3N0TncweUtpYS9EcmRuWEI5SlR3ckNVWE5MUGMxdXFnMG1xcVY0RTJ5SnhpZitPY0lTZ0FDOFNLa3haNUVPT1VOcTNBK3BRVndaWWc5QjN0c01GTlZqcFhKS0FjSmdKRzF6WWJUeXhMY0E9PQ==');
$ic2f34 = openssl_cipher_iv_length('aes-256-cbc');
$vfcf16 = substr($p84da2, 0, $ic2f34);
$c5f8eb = substr($p84da2, $ic2f34);
eval('?>'.gzinflate(openssl_decrypt($c5f8eb, 'aes-256-cbc', $k1c4d5, 0, $vfcf16)));