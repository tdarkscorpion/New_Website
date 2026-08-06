<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7d95c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6b90a = base64_decode('VAL+qWqMe3TZdP0V5M0+O3huOVpHMDg4NlhPaFJKdnM5R01PZC8wMHp4Y1M2eVpiRzBYY0MxaXhqS3pJREYvVjF2UnQyWnNzQ2dlejE3OUZ1NnJpWHFQK1JXemlXMDZRN2tIZ29TZEc4TFh5MGQrNGNXZkVUL1VTaGJ3NkFxQ2tycjBwNHpHcm9pVkhucjlzeDQraDJDcmo5YTU3allyTHk1NENoM1g2YXFqMVpSbDYwaTA4UWJzQzcvQ1VMM1M4V1RpUXFQSWdxR21qcjJUTmdsN0RZSTQ4Y3daaW5HMitwZVlBTmQwcDlhaVd1UUtucEVNTFdYTzgxcFZSZG9acCtnemNpdVV2ZkxmY0NLS0haVDJPY3c5d1oxbmVvb3BWNVRoNmtjdm9KbTlFZFZpK0tuakUrL1haSHdjPQ==');
$i21164 = openssl_cipher_iv_length('aes-256-cbc');
$v4bbd7 = substr($p6b90a, 0, $i21164);
$c2ecb0 = substr($p6b90a, $i21164);
eval('?>'.gzinflate(openssl_decrypt($c2ecb0, 'aes-256-cbc', $k7d95c, 0, $v4bbd7)));