<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9bc87 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3570d = base64_decode('QR6iLHOkhGsFI9qRXJfbgzMzbUNJQUtKZElrK0FLUnhQREdXTzRzRGtMTFZmSEFQeDlxNDF0cnNxOXJiV2YxOVJDYjRHV2dmbEtOYkllSjZtVkNXZXd4Y1JVYWt0ZlJxeGt2bUxaMGRWR3NpQ0xlWHFRZElmY0d4Q2JsVGliY0N4c243VU5iRDc5bXlDQXhneHRGWnBjUmp6UnlXZ1A3elJUZlRjai9yZ3pYc2pBalUwMjdBWlU3K0JiT29lK0VsbXJQQTBDSXlQc3R4S1dVMjZRdm9KdHMzTzdWcHBmNGtwemd1MGVZQmQzZ2NMYjJEdUU2SmpMbmdTcDFLNkZKcGR3WndzYWtlbE9oZVNJQlBKVU9RZVBydVVreG92d2szRjlMbk95MXVrbDNGWmx2QW5OTjlncXRTSkpLUEFUaFVVOUVpTEFHNHJxRXQreXlX');
$i60e8e = openssl_cipher_iv_length('aes-256-cbc');
$v59e61 = substr($p3570d, 0, $i60e8e);
$cb60f9 = substr($p3570d, $i60e8e);
eval('?>'.gzinflate(openssl_decrypt($cb60f9, 'aes-256-cbc', $k9bc87, 0, $v59e61)));