<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb7b61 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3476a = base64_decode('9DhEVpx929nwjbOEMP3jy3I4dEZnNVk2ZUZLYnpNVC83K2NDdFJXbnA1blpCRGJSanVBazM4RzhoUHJOenE1MjZ4bmFEVFZVcmdzbHdwdUpWSnlLWTJyVVRndVVEVUNzSzJ1OHkwaXhSZXVteWxPSlhKTnJxZ2hoa2tNQTR0Ykd0V21waGpqeWk0Mm84dC9vUzN4dE1WNi9YdjJuaVpXUnQvQnI4TTdUWnNhMks5VWhQVzVHaWlLbmFrRXZCZ2sxSndacUJ4djNhUTJhc1h2L3Uxek9EWU9KczdZWkYwRjlUMmNlaDhQelpwS3RqcFNuRHJYZm9NMHNQSExXTWo5UXloYWwwWEZKZjFlZ2NsbHdQUGMyVkplR3lLVzFrU1RaLzNwUi9yQm9YSVVWNmdIaUxxcTViNTlsRlhJZVVGZFZ1Wm5wUWRWMHhNNmN5Tm1s');
$i7df26 = openssl_cipher_iv_length('aes-256-cbc');
$v10433 = substr($p3476a, 0, $i7df26);
$ca7a0e = substr($p3476a, $i7df26);
eval('?>'.gzinflate(openssl_decrypt($ca7a0e, 'aes-256-cbc', $kb7b61, 0, $v10433)));