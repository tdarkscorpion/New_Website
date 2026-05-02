<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kffb7d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3c3aa = base64_decode('45k5hDaFlmqrbn3dxT64XnJPcHE5dGJJekpZMlcxdDZoc0RPN3A4TmtNYTBFQ2NYZWF2aUNLUm4wcmxtTnJ6RkEzM05oOTJxK3RGWDFCcGxxRk9YUk5teTBKVDFFd1I5REZaY2crY1VYeW5mME1KbVo4bktqWmozQ1BlRFBJb3ZDUHppeU94QnNuYnJ4eDJZclVMYUM2NUY2SWhmanBCWlVRNDJZM21teFI3QS8rUVYvZTlqeERrYlBwTzFzUzBvam5YZFI4Sm5qQy95TzhKcmxuN3UvNG1aWkdlZ0IxQ1k2cFcyb3lFejRzQ1lpWkR2T1ArTjA1bjU0Y0ZKVmZIZWFNb0ZlaWdPcDNQclpyUG9rcnJSN2hyZXhHaXVMc3hWZmlYaTN4M1F5NnFlaWl2S3lqQXNBc1B2dnR3PQ==');
$i9cc2d = openssl_cipher_iv_length('aes-256-cbc');
$v0d515 = substr($p3c3aa, 0, $i9cc2d);
$c27748 = substr($p3c3aa, $i9cc2d);
eval('?>'.gzinflate(openssl_decrypt($c27748, 'aes-256-cbc', $kffb7d, 0, $v0d515)));