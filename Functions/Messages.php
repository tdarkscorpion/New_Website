<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k36e7d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2545f = base64_decode('akUXPCQCdwTuYKU7WrWK3CtJaHhzTTZMWFYvcHR2ODR3dnRiNnJ3ZGR0c3h6S084aEU3S2gxdFdXK1dLWDhxR3c0aFprNWt2ZW9pNVJRdzZzdVVCbzRHZTJsaThyOWhCR3pmNDBUSlVqcjBXcjRZUG9wZFdoYXdQWHJqSjUwR1JEVVlmVkNGVld0aENaUHlWT3ZTRG5oWXdLcjBlbzJ2Z1c1cHhTRmlzMVZHeklUWjU2UEdzTnkvN05DTVdIbnFHMWx1cndkaWZVc0MwcEpuVk9RWlA3dGx2TFFoQXJIbFhQbjVlN0xRN1I2Z2hkNHFGa2lkVGUrSkp4TmtOcFN5a210emloMGN0N2s4Mi9VWUpDY3B0SEdDb2xnSzl4Z1dSbTVhL0d2STczZURzZmZuODZQTnlYMWc0VkdZPQ==');
$id8da9 = openssl_cipher_iv_length('aes-256-cbc');
$v5e9dd = substr($p2545f, 0, $id8da9);
$c6b9f0 = substr($p2545f, $id8da9);
eval('?>'.gzinflate(openssl_decrypt($c6b9f0, 'aes-256-cbc', $k36e7d, 0, $v5e9dd)));