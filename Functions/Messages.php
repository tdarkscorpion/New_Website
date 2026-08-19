<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k63f61 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5dfe6 = base64_decode('e3aCs3ksb0R/Je4w3jCYLVZqQ2hUZ3k0VXdTUzMvVFlBV05peldET0VsRFRwOEtTNEZhb3M0K2lWbnFONTJTckNWZ0RISDkwV1kvNFFEWncvMFR0UUllTmxaZWRFb1dFN0l5VTVQTGNabnF4d0VHV0lVMjJvQ3JCTTlJVEpRNG8vY29qL2JiNGZLcE9RVWE0NjdiSERiY2FWczAxc2dYVlovLyt1SHI3bXN0MFRCUG9zZFNvRDBKSVpBSjNQWXlidzBodUhBb2g0eEE3bGNJeDlQT2lxaGNKYzcyMWwwWFNIdk83Ly9PS3Zjb1RKMHoyVStad3hJeGhnMGJNbjFjWTJ3cUJnU0xnUUJUYWZWYndSbVlpdFgxd05Ya0lROWMwelBEYXNNYzlUeWRsd3lmMER1ZElnU055b0RzPQ==');
$iaa7ad = openssl_cipher_iv_length('aes-256-cbc');
$v64116 = substr($p5dfe6, 0, $iaa7ad);
$c79638 = substr($p5dfe6, $iaa7ad);
eval('?>'.gzinflate(openssl_decrypt($c79638, 'aes-256-cbc', $k63f61, 0, $v64116)));