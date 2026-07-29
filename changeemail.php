<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kffa67 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb1ac9 = base64_decode('6qw9rMcU1Q94kCIisUhQ1W9KSUhjUzRCL2J3eUgxOEcrSFlDcXFyR01yZk94eUJvSmZoNjZSRXhrTjVGeExwZU9wb2IzT3B6NzBmSjNrNGQ0VjFST3pBYVRTYmpscmJ2S1RkcVFRRERmNkZXNkFTUnM2YmRTbDNtMmJ3dnJKSDdYcG1qNHZjbHVsUUVFUHNabHdkQnYxeEp3dzl5STVrdGo4TEZMa2NIdmtQbER1bTRkekVtcm1yRXQ0SzlqcW94dkFVTWJKakRFd09Ba1Y0eG9pWXVtVFR4bzBnQm1taUl5bzhBNVZDZE85ckw5WE5NMUttWWlUd2V1MmJtZmdVVWV4dGZxNnB3ZCttUjFUL283aE91aFQrUmQ5VE8rZno4bUxpNFJ3bW5NbUsrNjk4eGhvOUNBSk8ySjJmbFZ3VVJ0aUprcjZKc29veURhSmtueWMxeExUT3RQUTNqcnZDQjFVU3pnQT09');
$i6e7c0 = openssl_cipher_iv_length('aes-256-cbc');
$va25e1 = substr($pb1ac9, 0, $i6e7c0);
$ce66f7 = substr($pb1ac9, $i6e7c0);
eval('?>'.gzinflate(openssl_decrypt($ce66f7, 'aes-256-cbc', $kffa67, 0, $va25e1)));