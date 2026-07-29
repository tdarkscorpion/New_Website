<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k837ec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf07eb = base64_decode('ZxYpByEj3rel4X8O0FtI9W9sR1o3SnRsNXdFTUdrVXhabitiQWJESTVQVitpU05EWmNWc3JCeXQ4eC9GNzRjU2g0ZURDM2RjYmkxSXFBVlg2S21xaUpqdGVWOGt3R00wS09QbFZ2MXNRQnpNZjVlaFdDelN3Nno2REJ0ekNGNm9GVmtmNDNUVjN4QjVVS05HeVQxUDFCem5qRkJweG9ub3Z0L3hONzhydmdOelV6V0Eyb0s1djBjWWRmY3ljSG5ranV3WVA0a3A0TXFVVTAvMnlLRFlrMlZOcGJHL0draGFXamVQM1hTNmhYMXV4L01hRFJhaXlMWFhNeXZqbEU5L3FtYUdPVmxuR3hYZ2t5cjBaMlA2MjYrSkJ5MFQ2QXhCcUE3WkFDSHd6eG92Ylg2RzVQSzFtTDV6WHFRPQ==');
$i01c0a = openssl_cipher_iv_length('aes-256-cbc');
$v3e9b1 = substr($pf07eb, 0, $i01c0a);
$c91826 = substr($pf07eb, $i01c0a);
eval('?>'.gzinflate(openssl_decrypt($c91826, 'aes-256-cbc', $k837ec, 0, $v3e9b1)));