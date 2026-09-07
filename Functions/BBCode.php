<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k31d69 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p03743 = base64_decode('6D1h106vusWFjN68zQorUVgzM1FjNmtwTU0rd3F5VE9xY24vejNSb0NTNnpRKzkwa2licmV3M3pIVS9YZ2NPSUxXa0ZoSExkbE5iQzluK2tjaktORFNBbHRQMGsxR2NhZGxGbXlqdjdodVR2WXhBcnBadFhzbGVMbjZ5aDkzTkNNSGhncXBLKytZbndvMVN4R1FIaFpBZTlQdnFPT0xlaWdwNkVWb2lYMm00YkdiTHlvTjcwcEtadGFwbURvK2QydHRyc1FJZTE3Y0hpZEcvMmRGa042OTR6aWN2MVpCRnVEc2dNZVNvWFk3MTNBNnhuaUNvbmZOSkJNajh6YjZNZUpCZTBTS0FJUDV3T2YyVFVScW9pRHhwYkNWaXJIVjVXbW9Ubkl5c1IydU0rL1pVM3RUb3hEU2E0c25UcitDSkhiVTB2UUtFWndpUU4yaGpK');
$i036ff = openssl_cipher_iv_length('aes-256-cbc');
$v30c89 = substr($p03743, 0, $i036ff);
$cd492c = substr($p03743, $i036ff);
eval('?>'.gzinflate(openssl_decrypt($cd492c, 'aes-256-cbc', $k31d69, 0, $v30c89)));