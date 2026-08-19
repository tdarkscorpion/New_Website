<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9f253 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf624 = base64_decode('zMylafp4mrXfLN1ohap6RkZIeUhBZ29wZnI4bG1XMU5NQVo1dTFIcjNkSENHRlNESmlPNiszR2lnTzVldjh1S05wZjNicWdRUmlZQkVVdXZscitlb1oybEdlY1hMYlBTRElySnJuVFhEYmlodUhwQlpnZGNTN1pUZTdxbi9XZ0E2d3NYK1dFU2xFcnRFZmNQdzd6L3NGeENoUUZFdE1MelNoY1lZNytzc0dCeitKQ01yZmM1cVk1alA3NG1pWDVOYTgwUFBwVXlveFFIRFR2SElQL2hPNHZtbEdTenlCU2xqNGd4SGJlRXJKWnNDY0l0YWhvOGFDZkNKQVNicW1wSHo3VW92UlpTcHJvY290N2ZobEQ2aFZIaWhkVFFLYlcwVWczSGExSVp4NVZTSG05amV3dEkyRHFrcTI4PQ==');
$i912aa = openssl_cipher_iv_length('aes-256-cbc');
$v1ea7e = substr($paf624, 0, $i912aa);
$c779ed = substr($paf624, $i912aa);
eval('?>'.gzinflate(openssl_decrypt($c779ed, 'aes-256-cbc', $k9f253, 0, $v1ea7e)));