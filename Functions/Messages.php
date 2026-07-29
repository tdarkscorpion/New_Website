<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb98c9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbf294 = base64_decode('CODDMcnCsWYf6qmCM+GhQGkxaDRqWFRxdjRra2ZiMytRT3NvaHFNZUk2MTRkVXYwS0F3bnZDYm91WWhpQzZLMS9hVDFnRTlsdEZFY3RnbGxKS3hSYXI4YWo3Wi9kejBsSzFyZHgrSkxLQVQ0WmYxQmQzY3MvMGVmaDFpRkVCQmNLcExRS1B6NkdHZXdkQWRiai9aQS9RSm9na3RHOTJJbFA0cGhVMHpuV0orWVVMOUtqV1YxNWxiV1QyMDNhaC9QVHFJZmlJODRQOHlkNTBTUUpOT0JKaWlMYWdjaEc5OC9XS1YxaTBYNTZwOGxDRDdqS1BxNk5PeExDNlZZdFovU3ZoQUJObXN1NDA2clVrYktpcWlNWFd4VE1wN014c3kwRU1jWGtNR01MSnhEekRDU0JFclY0aHQvdGlvPQ==');
$i100b2 = openssl_cipher_iv_length('aes-256-cbc');
$vb24fb = substr($pbf294, 0, $i100b2);
$cd773c = substr($pbf294, $i100b2);
eval('?>'.gzinflate(openssl_decrypt($cd773c, 'aes-256-cbc', $kb98c9, 0, $vb24fb)));