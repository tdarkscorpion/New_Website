<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfea09 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfc469 = base64_decode('FrfvPWXxZNqCXgzDJtdN5kg0MGxHbHNhM2R3b01UMFBuNERUZFF3UXF5OTNqZlpXUEk4WFozSmk4RVUvYUwybzRhNnVqcHhPdjllbDIwYkVFeGsrK2lWZGZyd1YyZW5iZDZyVUZ2VFdDT2hrRWRVMjczOG5tYTZVODZaSGJ0dURLY0N3azZRMHpCVVBoSHlkdjJ3dWhpN1Zqd0JSQ21zM2t5VDlzcG5adnI5M2grWmlSNU5KQmNZUVc4MEFaYU9nTXUvck5rVWF0b1lrZTc5Yit0cWZ3SDVIWDBjNW5Ec01vNEJrempJdFQ3MmE0Y2t4d3QwaUdEOUxoUXVIU3JRQUE5bDc1QUNnUkpOc1VJczJ5ZjcwNC85VXdCOFgvSVYrNnB4TFp6QzNnQXU1bjVlQUlXbWgxUTNTQTUrMnQvQ25tTVYraldyQTZhRGM2WVdp');
$ic9586 = openssl_cipher_iv_length('aes-256-cbc');
$v3d29f = substr($pfc469, 0, $ic9586);
$c8f83e = substr($pfc469, $ic9586);
eval('?>'.gzinflate(openssl_decrypt($c8f83e, 'aes-256-cbc', $kfea09, 0, $v3d29f)));