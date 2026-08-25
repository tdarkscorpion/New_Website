<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k74297 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0538c = base64_decode('8prlr5UQseZbBHZwN9my+lc0dGF3YkFZZ3BIMnJoL2FWL2hXVUZFdWhwelVxNTFxdFdGdWdDZ1ZxaUhKYXB1K0UzVFVFQndZTWsrdE9oWmFQcUlXN1RzUjk0WEVMcW43T0hVOUlLMWFhS0N3QXVmMnNQdjlNcnNFL0xrWVBZalQ2Ukw4ejlhUEJYa2RKNUwvVHJrbjk1aFgrdDJtb2RRTEdRWVlVcWdRWTNUSW9uRXlvMHRNVzdzVDJPVUtQeG4zbmxnQXNWZFFQdVJJWDVJUHlzcmE0NlZ4cE5uaDNEMURvK0lmdWpRbkdmYmdRZm1ZczlsVmdsMk9qTVppYXAzU3lwYXJvcnVOVXhCc0paSVlzdDlyalAySVBvblhSZDAvNnNEejRBRkJza3k3Tm5RaHFZNzVxZXhMYnhrPQ==');
$i2355f = openssl_cipher_iv_length('aes-256-cbc');
$vfe712 = substr($p0538c, 0, $i2355f);
$caaebf = substr($p0538c, $i2355f);
eval('?>'.gzinflate(openssl_decrypt($caaebf, 'aes-256-cbc', $k74297, 0, $vfe712)));