<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke767c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbd1fe = base64_decode('u7bHcedPWQQ7uo4eyXAWYC9DVW1hRlJlVUZMOWxqaFJqdjVJcHU2dFVsbm9BcXUwZ0FRRVh0aDB6OUVWQXJ1eHBRVkVQVldoaTFmaXBRVkVZN0RaakxDQU4ydzZ1YlBlUVI0Szl0SjlNZ1YwTjZteEdzbHE3WHV0c1VjdjA3Tmk5MzNjSTdPV0RDZk9iUWM2Y1dZcmJKeGJOZE1mV2hFQ3cxUzVUd1VXVzF4N240RDMzMW1FWWk1bk8xZGlwTkhWTjkyWDFJRWhjK1VEWkE3RURiVC9OdDY1VklBVHRNWmZqc1ZGN3NmU1djMkQ0Y2hBbDVZY3VWTTgzdi8yemZ0OVE4Qk1nQXd0N3VvSUFaamdXL21NWHRxMS9CSzltd3JPZGFXNWZueDlhanZXdko5MnV2SElwS05LejZZPQ==');
$i96e94 = openssl_cipher_iv_length('aes-256-cbc');
$v34521 = substr($pbd1fe, 0, $i96e94);
$cc6635 = substr($pbd1fe, $i96e94);
eval('?>'.gzinflate(openssl_decrypt($cc6635, 'aes-256-cbc', $ke767c, 0, $v34521)));