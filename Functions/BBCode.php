<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8a21b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1d2da = base64_decode('zhwPrCQnQKtsg1/LCwnRT3dONWg3WWhYSnpMREpQRnVHZVZ5d1VwQTVMTlhEUURkLzcrL1g4Z3pCeHJ1WGJYQm5zS1Z2LzB3MHc0ZVcxcjVUMGY1UUVDdlVRWDJtY0RneGdOdW85M05KS1RkcVVRSkNmZk95MVEvRTcrU28wQlZHbmRqY2JKRkdtbGRVdm1aTXJ6WG9vRnlHNjZFaDJsYS9obzZYcnlsT2swUEFvNTE2M2xQS3NPczJHZ0NuNkNOWGlUWm1xaWZlNys0Skd4TGxUeEp0TzNETGVTMU8zcERCRUlhVXhWTjRJQWZwQ1JuQXZtcWZ6bndiSkV6TUFPOXRoUVdlVC9hbzRYdFVPdXVaOU9ZVHBsV2dhVmplL1BuUkZzUUx0T3pmWDVZMTZYMGd3eWVkdnU2VGtSdWVWaFZTR3JZVzhWUUVqaTUrclNw');
$i867ce = openssl_cipher_iv_length('aes-256-cbc');
$vc8001 = substr($p1d2da, 0, $i867ce);
$cb7ab7 = substr($p1d2da, $i867ce);
eval('?>'.gzinflate(openssl_decrypt($cb7ab7, 'aes-256-cbc', $k8a21b, 0, $vc8001)));