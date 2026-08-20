<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k69366 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6f231 = base64_decode('ln6jQ/lv9h1Fz63RcPpvajhOTEplY0lzOXJvK1E5YjlpZm9STkpsVWcveXIwN3BNNWVSSEhsOHRiWmpOOXJSNkNhSzJxaG1veGZnSkZOTStRRGVUU01XWHhUU0ovcnY1ZzR5eS92dmRmYzdDSEZxS2ptaFcwbUYxUFJoN0VIaTBaMjN0YzBySWpuYUZEWk1NUU9pc0d3c1c4K2pWaUMxcXhlSS9oRDQzOHRWTkV5bWpqZUFoZDFQaW9yL2hLMWRUMXpqNXBQN21seVJPR2VxVzZWTnpjZCtSUVFJelNGejFDWUZWbGkwc2pOVGEzSWtWQVlGaVZzMEIvV1B0SW1rOE4rc09IYnpZNGJUVVJ4bUdwM0hIM01QYnY5WUNqYVFvck9YMFlnL2xEU0x6Q1ZyVE5oRWRIeHdlbjU3aGFHUXdDV1cyanBDbGVCNGxmdlNJ');
$iac158 = openssl_cipher_iv_length('aes-256-cbc');
$v3d4e7 = substr($p6f231, 0, $iac158);
$cfde9a = substr($p6f231, $iac158);
eval('?>'.gzinflate(openssl_decrypt($cfde9a, 'aes-256-cbc', $k69366, 0, $v3d4e7)));