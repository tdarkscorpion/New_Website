<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf7dd5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9721c = base64_decode('Wr/dhKrkiaVY6Xhg2qtJZnFIYWxTdjlLQ3pCcWVpVHJyZHR1MjcwZFQwNWZuMk04RlRaTmd5U3ZJaWhpREx4ZWk3Z0JNMTZJOUloT0VhWXphYXRNbEFoamdGU2JjTlNLTFhnKzNJRDlXWnZjZmJ5a1VXWmY5VmVYamlFZU5XMzdVaW9DcWNHcjhCSkNqQWdWbndUMDhLTlNkTjZNY2RiOUtyR285WTRuODd4dnhyU093alBWNXpZR0dHdUd0QWVMcGU2ai9Oci9oZjMxS3kvZENsQ0MybDVWM08ybU4rTVh5YThMc05iU09lQTdaKzM2Rm56a0ZLWU5WUDdhQWhMUFdDbUhzU0ZGaFozSGRHVDl0WXZlS3dKVUZoMEdWTi9oNnJBVmU5TWp0NytmZjVmRWxsMEdTV3JDUTZKODQ1bXRPUlRBLzJmRlJoUzE3Q1hRSlg2dkhYK1FLWE5TZFJ2d1drTjFRdz09');
$i3a818 = openssl_cipher_iv_length('aes-256-cbc');
$v8cf13 = substr($p9721c, 0, $i3a818);
$ca3157 = substr($p9721c, $i3a818);
eval('?>'.gzinflate(openssl_decrypt($ca3157, 'aes-256-cbc', $kf7dd5, 0, $v8cf13)));