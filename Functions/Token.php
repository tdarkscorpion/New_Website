<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0b6dd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a5e7 = base64_decode('VTrLCJTEAUdR0vrkUOcR7UtyRmgvNzJiQlBQMU5SMzZobi80ZGN0ei9zZ1ZXS0hvOHlaaGY2MTJGQlp1Vll2SENxelg3ZDZMY1k1aDkwUkM5akcrMWJPUVM3cFpNSDVMdVNvNUZmZU9Qd0RPWTRuZkdiWGlTSkVEM1pwNG1zTEo2UEFhZ2FpbEdxZ1ZaM2h4Q3hhVTJCWldTSXRLMUdCMGxzRW1qdkw2SDAwK1preHdEcmhxZmNvM3hGNHUwaU5Ca2Q2YnpianRpMDFKR0gxQjIva3RnT0hFVTc2T1N2VmRIY2hCZ1RoOEJmcmUycHdnU2hSU1JKR1Q3MElESE9ubG0zem5tNmRaakc2S0d6Y0I=');
$i4ed4c = openssl_cipher_iv_length('aes-256-cbc');
$vc8262 = substr($p5a5e7, 0, $i4ed4c);
$c1b30a = substr($p5a5e7, $i4ed4c);
eval('?>'.gzinflate(openssl_decrypt($c1b30a, 'aes-256-cbc', $k0b6dd, 0, $vc8262)));