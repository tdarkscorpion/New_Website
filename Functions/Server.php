<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k11cd2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p391e6 = base64_decode('OIM8zc3+mT04nK7jJciykG1MdEtDTjViSzFjTFlLdFN0Y2htekNqdDVKQ3hhd0FXQkxUcm1ubEgrNUxwLzRhMlNVbExiQy9SUzZTcUdUTU1hcTA4Y2ZzN3l3d2I2aENtTzVZVGNLU1dhNzJTalduNUhjTUZ0UzZ0eEFRaHJrV3duZENvY3dMZG5adG15MFdVVTZBTCtQMUQ3MnJVa3dOVHpuUUFsc09kRHNIaytBbnZLMkh0aGgzR1EzcG1JMkNPMGNlVHdJUTRFYS9iQXJvMmYzVTNYeU40Rkd6SjJwcmh0ZEhmWHIyKzdBa3NkcjlGTFV3YllNeXVGeXNVMzdhcFBia1FPa05YdEp0RzIvcm8yWUp6TjVDZXpCbldGRDk4b2t2d2t3eGRqZmhwd3lUbmZoWi9SOWZselJzPQ==');
$i386f4 = openssl_cipher_iv_length('aes-256-cbc');
$v24d4d = substr($p391e6, 0, $i386f4);
$ccabc6 = substr($p391e6, $i386f4);
eval('?>'.gzinflate(openssl_decrypt($ccabc6, 'aes-256-cbc', $k11cd2, 0, $v24d4d)));