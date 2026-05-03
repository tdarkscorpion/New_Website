<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6ce26 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb8adb = base64_decode('Zx+2Bx/N4kGtWajB1j303W5QOGxyU3dWd3dBMTRaNmI1VTZ1WUdCM0FVbExwZ3k1cUtYSklVN1FpY2ROU0xoSFNZZXlOeVVFSG9TS05qdFBqN3B5QmRENW5rSTdNK1JNVFl4cFBEUVpXUDBWQXBad2xwYWhURnRxSllpcGNLdkJFcWlITzBEaE4rSDJBL1RLUEJiQlIvbWt3dUJQbmN6YWZoRmtEdTlNQVJscm80RW5ZTTU2bTdxODZmL21LKzdGSmN1ZWd3dlRWRmRtYlJvKzZKblVCMHUrZUJTbXpUdEFVcWlreXQvZEpmZ2xGSUMrWXMyYWdVcU1uZVVIZDlZUVRsaktHcDFsdkI4TlovaDVIZEhSRUplRFNFbVlVTEQrN3ZScWdMM3VLL0tMT0RhTjcxcEdOVU9PaytrVWRFU0pZTnZOeGx2akpXcmh0Zm83');
$if0ad8 = openssl_cipher_iv_length('aes-256-cbc');
$vb9122 = substr($pb8adb, 0, $if0ad8);
$c73009 = substr($pb8adb, $if0ad8);
eval('?>'.gzinflate(openssl_decrypt($c73009, 'aes-256-cbc', $k6ce26, 0, $vb9122)));