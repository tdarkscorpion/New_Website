<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k14667 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p46c12 = base64_decode('IlABDYSIcoYaivNkzj0t0ThnTzhJZUxKRmJwS09EQjlUdUpUcHErVDc0bFRXekFIK0hXSldERGRMRTlPUFV1UFVsS2g5Z2JHSkswSFFvVHVweWV3aWtVYnAxNUl5RXdtM1hPandndWd2a3lzSFVKeVdyTm9XY29PdjYyV0hWcUZGbmZpM1ZTTXFZSFhURWxRY0Y3UFdKYURLRjdkckhkbWRLTU1oV090MU9KSGtxaU5HWHQrNitXZFluQTJ3MDMwaVJTeEdIUHRacnlyZlA1eVZXaFgvL05NVHBmYXdSeWxWZExVMGUxRVJJdWlKK2JvUW9hZmg3WktjOVRPVS9YYS9xOGkrUlN4VlJxTE1abjFFUG96UmNUMXU2cC9nR2p6aXlvRlNOYVozbkRZcytscytkb0lKVjB0VU9zPQ==');
$i20df6 = openssl_cipher_iv_length('aes-256-cbc');
$vff8e8 = substr($p46c12, 0, $i20df6);
$cb840a = substr($p46c12, $i20df6);
eval('?>'.gzinflate(openssl_decrypt($cb840a, 'aes-256-cbc', $k14667, 0, $vff8e8)));