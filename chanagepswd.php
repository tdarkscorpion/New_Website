<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kde997 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p72347 = base64_decode('R3cr++fwc20DZ5TlK2Ni4Gd0M211VnpURWo0ZVg3aSttdUpxOTZHdk9TdjlnV3JPRjJvVThkQkJKbEs5WC8rVnpYN0xITmNJR2hUK3RMbGpnbkV3Z0NaWldRRU1KZjExMjljd3BJRnZ1K2Q3b2w1bWtvRWdoeWtubWEybU0wbE1zQVJvamVEVSt4MGtCQXJ5d09hQ04xbWNCdk1uc29NL1IxaEU5b1dzKzRnSkxlb2tMRG9kOEpQM1ZHSlJVYk5WZnhlOXJDNWJCRzc2b05POGVNaTdnclYvdTlxYm5nL3I1a2RHZnA3YWRpR3NqTjRYNTBZcjdpSit1ejJmSHNpclQ3a2IxVGpvT3cvQlpneGVjcjZvK1I5MHVVWENKYUg4aUVWNSt4WkU0bHh0b25xaWxiaU1hYXl4QnJqR0Vyc3FacnU3dU9wdjNhMFZwcFJzNnczby9wdW40UGtsc1Bjc2c3UXM0QT09');
$i0a0cc = openssl_cipher_iv_length('aes-256-cbc');
$v46c0e = substr($p72347, 0, $i0a0cc);
$cccbd7 = substr($p72347, $i0a0cc);
eval('?>'.gzinflate(openssl_decrypt($cccbd7, 'aes-256-cbc', $kde997, 0, $v46c0e)));