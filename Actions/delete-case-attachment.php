<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb176c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4db48 = base64_decode('14wnOWaEPHIKI9dMtIuICEJqT2VITzZwdHNid0ZNcmZBQkVxRlVURlFVbGpOVDkySjdiL2R5SFR6TjYzYkwxQ0JZUVJ1S2xPUmlySi9qNVZoOXpVbURkU3J6ZGUvZnhqeWFKSlBwdVpYcUp1L0FoZFVuWHIwOEtWWEprbHg3UlRhZHc1RXZZSnpyMStGSVR4Z1BOaGNmc3JSZkNUTm0rVjVDQlc3K3JOdTZtcTh3dmdxTEk4ZjdwUWcwRWtCR0F3QXU5QTRZY29pUlRubzRGS2VBZy9qNUZSN1lZbU1hNnR2ZUMzdWxLV052ZHZuRm5IbjdtcTdkTzUxemlpLzlHSWhCMi94UWJHRHo5S0RmRmIxSjZheTFLYmZ0Q2Uvb1dHaDloTFA1OWxoN0E0R3JPRWxGN0RvUzBkUFNwOUpTdWFPU1RkdVYxeWRESE9QU0xG');
$i17bce = openssl_cipher_iv_length('aes-256-cbc');
$vdfb49 = substr($p4db48, 0, $i17bce);
$cbceca = substr($p4db48, $i17bce);
eval('?>'.gzinflate(openssl_decrypt($cbceca, 'aes-256-cbc', $kb176c, 0, $vdfb49)));