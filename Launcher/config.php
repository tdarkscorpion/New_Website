<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2f408 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdded1 = base64_decode('+McXHDp1NoB1THXk7f6J+0N0blBFZ0NOVm5HS2NmMU1yQ2hpYzlRaC9NZlZ0bEppWWJQc0tiS2FFT012cCtjTkpVT0E2a2hKTnUzWjZzTTFLQnBNOXkvYnJ2TWxsdTdKQ25yeTkzREMzdUZQNXlXdWhYMTR3alJNSnd5a0RWeWs3dHEzMTVvQytRVlUvQyt4QzNnL2JlNGVjc2ppbjhpQTRMOEZwNDlUQmZCV1UxL01NQ0pEVWFOSytSaXE0Qzc4UFAyY0d4MmlvNGFZZnE3bFNGREwybVllMytoL3JlaXFJR1o1WGIwNFhYS1QrT01HUzN5VEgvWFNVVERURWtMNW00Z1dkYlNpSnNEU1JmZ0xFQXZNTmlXUklUN3lpVjBtY2k0ZFRneUJOd1Zvc3M5NHNtTDhRYldCSjdVPQ==');
$iddf3c = openssl_cipher_iv_length('aes-256-cbc');
$v8b37f = substr($pdded1, 0, $iddf3c);
$cc5825 = substr($pdded1, $iddf3c);
eval('?>'.gzinflate(openssl_decrypt($cc5825, 'aes-256-cbc', $k2f408, 0, $v8b37f)));