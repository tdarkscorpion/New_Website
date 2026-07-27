<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0190a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p56c96 = base64_decode('avj75ELBWKTY6A2DdXrB01Q2T21IWGVCQTBaLzFQWEM2VnlrSzFHUXB1ckZSWGp6Zkd5ZjJzRXpqSnM5ZmFtTnJNME9hWTNPZmNESkw0TXo0enpYT0gycTNwSmpJUHpSSmZDYWg5VitqWlp3VThYQWxnNkNRbVluMDVOdVZFYWd6eG4yUks2RUJrWU1QU3VTTWIxYUVzc0JkRGFSQVdSbk41bHpXM3dUWVR4NUE5R2Q5Zld4blpoM1dRSEh3Qm5nSFpsQVdScEZRR1l2ZjlxQjlLTk4reWpvWml4b1ZEbnpkR1hiLzN0SHE0NzNyaUIxZ3dET2ZJczBva1pUNm5YWFYxWGtvSTBSUlZaREpROUU=');
$i7a542 = openssl_cipher_iv_length('aes-256-cbc');
$v7f60e = substr($p56c96, 0, $i7a542);
$cd637a = substr($p56c96, $i7a542);
eval('?>'.gzinflate(openssl_decrypt($cd637a, 'aes-256-cbc', $k0190a, 0, $v7f60e)));