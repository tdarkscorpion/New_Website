<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0c22f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe2b82 = base64_decode('aRoLUr843CoTjP0VWAPNrTBUNzhpVk1vUURERDdBanFMWmRTZkd6V251Sk1xWTg4cHdsMnZZODJtS1BpQnVkU29uN2JTWDBCckh2UGxLWkFsUGNlMDc3UFl4SWZBQTNjNk81Z21JVUk1Y2sza1RlZ0R4TC9yRjI0QzZJdFlCNUdNYVBVMUhpWHNtRUpERU5vRzQxK0ZtbDByVXE4eFZ1cVVqNW01eGY1ZGd5cldHTkJwTUlvUlRIa3JDY0huUjJRaXZrSXg4ZVNYTFVnOUx3YUxwc1JoS2JaYUVTQXpWRE8xcU9kL0poQzJ5OWFIOWR6UFJiTVhJOTgzN00rKyt6MzdzVE1yTmQyaVF4cDU3cG0=');
$ib3d2e = openssl_cipher_iv_length('aes-256-cbc');
$v79f1f = substr($pe2b82, 0, $ib3d2e);
$c4a06e = substr($pe2b82, $ib3d2e);
eval('?>'.gzinflate(openssl_decrypt($c4a06e, 'aes-256-cbc', $k0c22f, 0, $v79f1f)));