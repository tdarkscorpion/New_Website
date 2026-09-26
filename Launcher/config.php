<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdb20c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p52f16 = base64_decode('Pej4J9OXlSpO8AppKD9dDXRFeElvcTZFekVPSkJRS09lY3BlVk1XWU5uYkdoRzVib01jNUZWdnZZdmNtd2d4ZnRzOTZ2WXRFNEZLQkdodW5MZGhaeGUrSVJnenNOOU9SSVhSRHVRNHo4Snd6SExYYjZ5MW1za2JkSjhPZmtxL1BENFIwVC9wYUpCTUFoT2tDOFRsaVRreTY0d3JmNG4zTlFTdktvMmU1OWlEbmtUdnZUdzIrRENaOVl6VnpVY3prbjZBZytPMkZZTVBQbjkxSEwzLzI3S1hLQnJNOXNOUG9yajFmMndpS3hGVnlZRWEwQUdQeUdSaTlrbHduaWZZb3o3RzdTd2VjUlZKZXpmejNSUmg4bkZhVFJZUkhoMThhQm1lREtWck9FNmw0TGFScjVZREVoM0ZnanA0PQ==');
$i97e7d = openssl_cipher_iv_length('aes-256-cbc');
$ve5983 = substr($p52f16, 0, $i97e7d);
$ce84c0 = substr($p52f16, $i97e7d);
eval('?>'.gzinflate(openssl_decrypt($ce84c0, 'aes-256-cbc', $kdb20c, 0, $ve5983)));