<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka666c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p552da = base64_decode('/OqCw/UaHObKDOcsqEMcDXBjekpNcnAvNTYrTE0yMUwrOHNoSnRzNjNWa1MrQU80NUhvVXlDYk14U3FVU0UySnhzeks4V2NjU1RDaW9tYURyR3U4YW1RYmFtQ3MzdEJkelo0Z21vSFNERlc1ZjlYY0ZHZ1d2MTEvWjR5SGlHV2hUNU0xNlk5Z3NleE1hbnk3di9FcDFwYk1SYWhPNElBeVpmYkJkWTI4YW14aXRYcktIazFEamh1aCszeUVIRWJUdm9PWXNKSWRxV2JSdUtiWDVrUlFKSFN0a2JhbFFlN3FlOElETzJGOGNNWmxLRy9TU20rek40bFVuR0Y0UGtUTU9oTHdxU0gyVExFUWFSUDRWOElJYVZMR0hWS0Z2aXBDM2dQdyt4Q1FtWnozaGIvdXlGam80bXhHbXFPTTA5MFA0ZjV1bXFFK2VNMEJZcUpiM1JYRVhoampMczdkVFRxZ0NYaThiQT09');
$ied379 = openssl_cipher_iv_length('aes-256-cbc');
$v3674e = substr($p552da, 0, $ied379);
$c4768e = substr($p552da, $ied379);
eval('?>'.gzinflate(openssl_decrypt($c4768e, 'aes-256-cbc', $ka666c, 0, $v3674e)));