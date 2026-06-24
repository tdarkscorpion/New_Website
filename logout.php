<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcf523 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3a41e = base64_decode('UYTRF4xicdeWjv6tD8EgjnRuVzBCdk1veXNhVXFFUlpWN3JubWhRQTI4K09RblpXR1VMZzhNRjB6MW8rM25rcUJnMUk0UFpQZzdjV1N2QTJGcHJGcmYxMjlFQU1iUWpPeGZabGh3MlBRM09JTThjcW9aRjNWYVEySzQ4PQ==');
$id0eee = openssl_cipher_iv_length('aes-256-cbc');
$vf7654 = substr($p3a41e, 0, $id0eee);
$cc5a51 = substr($p3a41e, $id0eee);
eval('?>'.gzinflate(openssl_decrypt($cc5a51, 'aes-256-cbc', $kcf523, 0, $vf7654)));