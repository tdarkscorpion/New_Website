<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6a75e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdc926 = base64_decode('2YGFW+MqfZZPJ+ZHzaKTT1B2Ky9CazVKbU1nbTI2M2xPVngvWmZlVVJSalU3R2pXS282TUQzTmhUVnhubUwxdzBlczlzMUF6d1lHM0tkeFdlUzRsVDJkVEhYcGFHWE5RaDhnNEdxRGt2T1JKaTFyNEF5UDdDSDQ5WndienRvTkpmbVpQMW5PTWVZSzE5SjVMcU10ZTZrelVZMFZaYnhHWFZ3R2x3VmtqNzVORlJ0dGxOYVlSdHk3Y2M2b1o2a3A2MUgvTVNNQ3R0ZDdSVTk3dUNxZkpFYmpnQ3BiSnNRSWJGZ2dpNitVL050eGhsWllLbzFBbTY1bXErd2Qza2hXT1FWRUVCRWFlNTJuMXVoZ3BRV2F4TFcwSWhUSXlqWXUyT1E3bE0wRWNzMi93eWw4NUo0ME1CSGFnZ1AwPQ==');
$i2692a = openssl_cipher_iv_length('aes-256-cbc');
$v45004 = substr($pdc926, 0, $i2692a);
$c840ad = substr($pdc926, $i2692a);
eval('?>'.gzinflate(openssl_decrypt($c840ad, 'aes-256-cbc', $k6a75e, 0, $v45004)));