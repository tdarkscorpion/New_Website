<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kec3fc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p917dc = base64_decode('83UJtW7QBBJm/L08hp+XEXFmb0ZiZ21UcGQ4U2pRUXFISFZ2OUpmZzRKd0pEenkrbE92dS9YR3NXTnI1VG9sdFg4MkY1MUtpaHZkcDJkZjlySCtENHpGWVJKNUN1OFdEamVOVFRmUnBORlZTSEdtUERNTkRBNUxyZzRSYWtyRTFKTDcrQmtvUHM3b3E3d1g5YmdXVStyaWR6Q2ppUW1uVTFrMUhSQWl5TXEvZzlxaFlVM1J6T3d4aWNuZWtRcDB4cmFubE5hNDZkYjR4ZzRteFNGeHRjcm1jeExxc2hsMldib3FySEMwcmhwelR3MlZaU1N4ZHhLNExRcVA0cGppQVk0MUFLejJCMWNHR3RZcXdDTElJVXAreWFKT1A0RDBVcHEwL1pnRXFZZWp2ODJzRWNqUkVlcllZVHdOa3V5VVpKajFPcmo3SEJJYUN0NnIwb0VGcVhsSGFYT3c4dEdRQ3hRV0Z5SkRVVjNpK25naDUxNUdEWnlCRFhBST0=');
$if78ce = openssl_cipher_iv_length('aes-256-cbc');
$v6f0cf = substr($p917dc, 0, $if78ce);
$cfce9d = substr($p917dc, $if78ce);
eval('?>'.gzinflate(openssl_decrypt($cfce9d, 'aes-256-cbc', $kec3fc, 0, $v6f0cf)));