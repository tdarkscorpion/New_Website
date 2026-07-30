<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1cf28 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0fb90 = base64_decode('0XNtAJM7BMTpLl4BWzXRi3lyTCtrRDFqMmVNZ1VZaWNmeTRIcDdoM2I1cm9VTy8xRmxTVjE0ZXUxRjl0Z29HWFRjUlRKRVNnZWZ0cjhEUDQ3NW9GM1JQT2Z0U2JxRVJCbGJFM0NPeStKVEFweExkOE5tWUhQeXMzcGNXYWtjUGRrcUQzNnVUR2JiRXVqYm0yaC83YjZ2bk9TZzdJbDBLZnowZFJFTWVjaFdPVWxtcGEwUytzR2JNSk00Ujhpd1VxWGNjUEFwV3NEc3FZL1RxTGFrc1ZCQUI4Y2FDdkxWemN5WFF0eGtsb3FRM2ZoMVlCNmo5MUlZY0F4K2ViL0M1dmNoUzNObGF3ZVFHeU5ERkR1dUR1WnJldm9zc3RqRDNKemtQUys2MlJaYlBNN1hBMGxJYW81aVdCZlM0PQ==');
$ie44d2 = openssl_cipher_iv_length('aes-256-cbc');
$vd50c5 = substr($p0fb90, 0, $ie44d2);
$c748de = substr($p0fb90, $ie44d2);
eval('?>'.gzinflate(openssl_decrypt($c748de, 'aes-256-cbc', $k1cf28, 0, $vd50c5)));