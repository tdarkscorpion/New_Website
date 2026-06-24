<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6c8e3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p83d45 = base64_decode('hQnNMDFlCu9FDgtoaPO483VoZ3JvRll6RmF2a0hBV2U3S2FjSFFFR3JtVEwrVWdpVFpwZmZSUVE1MllPYnozeitXSytrOFJHQXNXYmhXU2g5ek16THhLc3Q0M0Z2elhyYTFranRveHlnL3FhTitreUxEcFZnRDk2djdNPQ==');
$ie1736 = openssl_cipher_iv_length('aes-256-cbc');
$vf7da1 = substr($p83d45, 0, $ie1736);
$c32c56 = substr($p83d45, $ie1736);
eval('?>'.gzinflate(openssl_decrypt($c32c56, 'aes-256-cbc', $k6c8e3, 0, $vf7da1)));