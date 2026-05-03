<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf063d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p72bd0 = base64_decode('jjufrAAzooiBhQ02iEi7n25SS0hrYkpaNlF4QjdrWndDSWdLZ1d1aklOVHFzMzdGUUVLM2VwSysxRUtpVkg3aXd1Y1NUUTBzNVllb0c0Z3hzWTdsbmxheGt4ZU1zNUczUnhKbGFXdzVCeExNOHA2RUxzSFBSZHVWeEFEL21NYytJcGlha243a2I1ZkViQ3pJdWVQWEJmY1NnQTVVMHhFakRNbVpFRndhODUxWkhFdnpUWG5DSTRmQitlV2hHczlTaStRbGhyc3YrWVJYNkZ5Zk5abjdzaGdSeXQxTmtSSU9oQnZSN081bGpINXV0RWlJMEhQS1ZPOUJPYmhqdnB3SFpHK0pEQTVwYVFhR3ZoN3JOQlhoRENseFZqWjhKQzc0T2ZldXlrcUVKQmdIbFdUVGpxU0MyR1JxUmQzS25hY0NSbk9PS0kxSkhxejQyWGNJ');
$i9b775 = openssl_cipher_iv_length('aes-256-cbc');
$v0aca6 = substr($p72bd0, 0, $i9b775);
$c23ce9 = substr($p72bd0, $i9b775);
eval('?>'.gzinflate(openssl_decrypt($c23ce9, 'aes-256-cbc', $kf063d, 0, $v0aca6)));