<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd22dd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe6075 = base64_decode('Nx+VFPuUd4CfGGMd1JTEqDJJZzdqMVNtY0piNWgwdW9WTk15ZnRjZktkTTk0bGs4bTFjK3FLMlFuSXV4UDVpeWtpTForTThEWmJQdXcrdmR1KzZYaVBYTTNaa2xtVGIyMXlZNzVoQlRpZHpSTXo3ZUdrUUFwN0VwWEdIdkJ3R05MaVhQUkdmbXE5UElRTnRFcWpIc2x2TVhXUjkyM0x0MXFqb1UxTm9uSzVJK3I0dDA5cjdPQkxaNkNLMXRNUlpMcEJweVBZUlFBQ1JjRzRWU1VVeXlud00xZXk1M3R0UFlaWkV4UUo5ZkxLOGRKanV1RnZOZXF2aGkrQ0cyMS9EZW8zZlVMV216SW1XQkdjS0dIWktmU25YYk85MmI0dk5TdXZyYVNSMFZMRkxLM3FISlFqMGhGU3pDZEp3PQ==');
$i2153a = openssl_cipher_iv_length('aes-256-cbc');
$vb471a = substr($pe6075, 0, $i2153a);
$cac461 = substr($pe6075, $i2153a);
eval('?>'.gzinflate(openssl_decrypt($cac461, 'aes-256-cbc', $kd22dd, 0, $vb471a)));