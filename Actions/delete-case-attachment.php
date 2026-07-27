<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8bad6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2a6aa = base64_decode('cHaw/pXVCCG2Z0kg7rKee0p3VlB6dDRGYlRhQXRUUUhpelRnQ29HRUNoM21uZkR6ZmJjZHR4Sy9CeW91ZTFrTW80VUtiN201NUVOazIyejBGc09JSHJuN0QvNTZhY3hSeEM3ZDNubGk2OEdGVG55ZzM3alF2NnZRNVVHWjRsQnZsOGJtQ2JmSGYvUVFYMHl0TVJmY0dPcXhEZUFtcmlHZzdnQStTWExYR0QxN2RQdGloSmhXL25WdmdFaU5aNFRwekRheW1nVE1VemFYeWR0SkdrWUY4MTNqYmJOU0JqNHJZSFlnOS8zM3JxRnlsZGZlTlV2czJwTnpoTGx3OUZOSUZMUzhWQmF5aHJLenREK3RyREtTR2pEYjBmUXVLTU1yRXF2Z0E1VDdrOHFhcVBIQVVBcDBOQU1KcFRjbTJHeG1QRVF0R0VaYUx2cHJuUkt0');
$i215a4 = openssl_cipher_iv_length('aes-256-cbc');
$v2ed2c = substr($p2a6aa, 0, $i215a4);
$cea981 = substr($p2a6aa, $i215a4);
eval('?>'.gzinflate(openssl_decrypt($cea981, 'aes-256-cbc', $k8bad6, 0, $v2ed2c)));