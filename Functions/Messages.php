<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5ecfe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p05ad9 = base64_decode('0F53FdclTIhQwbjz0KYziWxxb0JXYjZ5MlR2Qi9TL2hCMzRYSzNaMHhrSWlIcnZBbnFMRXVwWXF3NkxHOWx6NGZXR1EyYWtySzI0QVJqeC8yM0xjS3BPYXZQM1BDVmJCa29QbkRNbGI5VC91dEVnNFBsTDlWNnJiUkphYWJSTUxxYlVpNm9HLzF0Uk5ZTTVTcDZDN0hUNGVEOEpBelBvVFZnaldTR2VpTXV5SU5KYnVwMmlwZ3JvNHZIM0tQai9JZTFvT0dQcW14QkhLZkhlUCttWHVUK2tWWEYrSDRXWG9NY2JsbXgvK0l3bUt2R3FiVjlnZ2lMd1h4MFhSUlJscUlPcmsxR0djNmE2MmFEVFpyTnJsdFc3cDA4NmxMQm5Ic2t5bTVJbURlMFQ4ZUJlZ1NtdFpocE5PSG9nPQ==');
$i4b91d = openssl_cipher_iv_length('aes-256-cbc');
$v0d210 = substr($p05ad9, 0, $i4b91d);
$c7bfdb = substr($p05ad9, $i4b91d);
eval('?>'.gzinflate(openssl_decrypt($c7bfdb, 'aes-256-cbc', $k5ecfe, 0, $v0d210)));