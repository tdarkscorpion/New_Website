<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdeb5e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p343ea = base64_decode('NPLDnPzUCBumBJrlQFVijy9kMHFibVF6MVc4VUt6WEZVbjRtT2VvV2VRYnZlMVZYZGpZUzNxQXVIREhkRXZPMmVJaGZBbnhaOHE1Nk8yMEN2MXQwUHk2TmJsSkxTTzRjcU9BWlJYVlkrb243N0lQNDZBUldtV0EvbnM5TUxma29VQWcreFNsNGFqdnVVMlNDWmEvLys1VUV4dTN6dW85QzIyZk9rRWNDOWRVU1ByTXFwRzBOUmRabDhuRjhQTUxoNTVnZG5FM01kWmpReXBHTlBxazZZLzB6bDZ0dFZ1ak5NZmxoZnc9PQ==');
$ie5128 = openssl_cipher_iv_length('aes-256-cbc');
$v245b5 = substr($p343ea, 0, $ie5128);
$c8dfc3 = substr($p343ea, $ie5128);
eval('?>'.gzinflate(openssl_decrypt($c8dfc3, 'aes-256-cbc', $kdeb5e, 0, $v245b5)));