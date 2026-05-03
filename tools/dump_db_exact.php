<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kee903 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p86b92 = base64_decode('HXBkXO+7Jm/dkjeYvocbmysrTnFyeFlYekZFZTNMOEZJNTBrMkJNRTJ3Y21ZS2o4ckxRWVY1R2pZanVOaTkrQnh5T0k1UDM2MC9xYm5qSmoveE9OaEw0SzRqaEQ5UDJpN012NGY1dlNaYmpDNkE0ZU1aSys3Ny9VQmpHSTZlblpHSUZmYVYxdXVIQVhNVG0za3RUUHRKakxuK2l1Zkd6cjJ0ckVITUlYZlN6ZGZGZW1mU2Y0Q05Gcnl6aWlrQXhGaUJWdUhnSVUrWnBzUjVaK0k2SUJaQWpuVVZBRHIrdzY0SjhQMHRFNTBXWm1CNEpvUWFkR1pDd0hIdUJ1N0RzS3VsQi83eFR2aHFSYnhKT1IxOTBPYXVOa2dHWEhEM1pHc25VMFpacXpjb3dnZUp6VmFsL3V0NGl3SXFjPQ==');
$i94feb = openssl_cipher_iv_length('aes-256-cbc');
$v4f2cc = substr($p86b92, 0, $i94feb);
$c1f1f2 = substr($p86b92, $i94feb);
eval('?>'.gzinflate(openssl_decrypt($c1f1f2, 'aes-256-cbc', $kee903, 0, $v4f2cc)));