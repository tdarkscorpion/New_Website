<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k903ea = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3b18 = base64_decode('JZNCLsYm61zYWBiy47Isx2FXRVI3VFAzRVpvWW4yZDkyeDc5MnJTQ1p3VlNjYVd1Uis2Nmh4YkhXRWFWT3p1SWZqWWZoTkc0VFpJQitVTHRxNXh2eUZLRU5zRG1RVEJVRCsvSlNuVjgvdWlxVWQ3ZTlXRGVhNlF5MUQxZndTUUFyZTFRVzRYWDBEYzlVSDE4TkRQNEZVNFNFSzZlMTZTNUJHdGVpb2ZHVFBvc002czVvazY4ampjb0Nqb2xkaGlnVG9TTXMyYVZDdkwzL3dPRXp1R2pFeWFDM0lmYXNwRE56aUM3VnJidlU3eVBKSDJORGdiazFJMEdYWitzZGgxOXJ6cEgzLzRPWC9QYk9vNkdPc1ZZbXJQdUdqNmRaeCtzY0pyZ1hMU25ZZ05oZm1uTnR2YlpoNkNzZlk4ZHUweEZ0aEtnZHpVUHlCTWdsYkdkMVYyc1V1b05DdzRYbjdrTkZmekVMQT09');
$ic6c21 = openssl_cipher_iv_length('aes-256-cbc');
$ve5ce8 = substr($pa3b18, 0, $ic6c21);
$c57df8 = substr($pa3b18, $ic6c21);
eval('?>'.gzinflate(openssl_decrypt($c57df8, 'aes-256-cbc', $k903ea, 0, $ve5ce8)));