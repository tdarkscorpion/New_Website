<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8cd29 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p44085 = base64_decode('z30W1xS2u777/Engg3Sbr0I2UFlQU1hOajN4MTd4SnlKYy84Mm04L1ovdFhxMFZiUkhMZmZQTDU1YjNadEdmODRVVUZ0WHdSSGlmTXlUdkoxNGJvNUhFZWFqTW5mMzN4dU8wVDdXY284Z0JSdzA3cmxEYktHbkhNdXdEMzNSN0JOb2lJbTVLNTVTSDZHZERqODhnVGFncG1Ceml0UmdhZ3VoMTBvbmdlMlJYcVREdE56bkJvVXFjMnJMR1phVk9JM3ppaGhTUGRCazVSNDBjTGpFdytCUDFJcjB5VUVYSitzcVZYdlF6OG5RNHZLMklvMDNYQVFWaEQxUHROZkp5RVRBWm1IeHdlSUNkeDRsWFFMaGFwUW03RE44MUcwc1dpZldZbnV3PT0=');
$i650e8 = openssl_cipher_iv_length('aes-256-cbc');
$v4f272 = substr($p44085, 0, $i650e8);
$c234d9 = substr($p44085, $i650e8);
eval('?>'.gzinflate(openssl_decrypt($c234d9, 'aes-256-cbc', $k8cd29, 0, $v4f272)));