<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke0a2d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfb77b = base64_decode('LxdRHbFyHmgO5buFljZWXW1pTHRtYTA1T2ZSb0JoYndnSHBZcGF5MmlaOXNOalFCcmRTUlpQQUpRa2xLZzNqRk00ZlVNQ1U2MGJ6SkFiQmRpeXBtQkh5N2lvT1FRcGI4ZkhyY0c1OUVwS3VXQys4ek5lWXFRc2lzS1UzbnFMQ1BVaWxRUUxrVGl3ek9JNXo4dXF5V2d1anZTWXdyTDBETnp0cXhIeGxiSlNHVFQ5dWZrbzU4QWVXWEdnSmNmQVJYbTlsejJjUEdmRkpRTWpTcjVPTElIK3lTc2JpZ3YrMDdmYzd2KzZZTTQ0a2FjaFFOU0dVZm5hbmk4bGxadmNTK2ljRTR2RDdwRHEwWitqUHJxeTVmTkJpbjFPblAwZnZLU0c1SmsxekRUV1d0V25nTkxtTVhVaEJCOTNVPQ==');
$ib523c = openssl_cipher_iv_length('aes-256-cbc');
$v4c427 = substr($pfb77b, 0, $ib523c);
$c8abf3 = substr($pfb77b, $ib523c);
eval('?>'.gzinflate(openssl_decrypt($c8abf3, 'aes-256-cbc', $ke0a2d, 0, $v4c427)));