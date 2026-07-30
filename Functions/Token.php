<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kad53b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p56199 = base64_decode('SW/cNMfE/LW+A1XzRYNnczZhN3d0azJUdmlUUkhxN1JjL3RYRUppUjBqNUs1S004R1E4UUtLbFc0UXZhOS81QXBKY0p0WGdFeTlSQ1ljcnU4c212ZWpUaHN2UDYzbUk4K0xIZVhKZ0JzYWtmbEhKNWduYmNMeGV1eTlsZnVuWk16L0tOL1dxdjVRSyt4UWxoUUNzRFBhNXhrV1h3WnBMcTVZKzNRSzFiYkZXdmZPY0lJdVhVbEpua2VlMFVFcUVIcGkyTDFBZTBqNXowYVBDSmNPQXdGTDNFZmk2RlBVbkRmdVF1V2VTQXNNMFc3c01HV1VGYmRRQTlNS09Ma0x4cWc0QktlQ0hTU3ZUQ3lqLzA=');
$i86132 = openssl_cipher_iv_length('aes-256-cbc');
$v16d35 = substr($p56199, 0, $i86132);
$c48f11 = substr($p56199, $i86132);
eval('?>'.gzinflate(openssl_decrypt($c48f11, 'aes-256-cbc', $kad53b, 0, $v16d35)));