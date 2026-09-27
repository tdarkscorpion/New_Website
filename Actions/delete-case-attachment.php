<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka52a6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p76e35 = base64_decode('Q/J7Rccq0c/WRZD1SJe0fElKUnMrQ3dWNjRrQk5LRTNUR0ZvV2tJTHhuaHlLdE1td3FWOVJKWXRySGtlOUxyNkJ3SUVEdWNiT1JLWFpsRGxoRkhRdUQ3RkNPclR2c0ljeU9IRmFEQkUza01uZXFuZE9UU0VVcE9Rd3FxRXJWenI2M3hGczM2R0NQdTc3N1VvRzVRVGRhcktZU3lZeDl5d1c5dW8xYTBNdGczanEzTnVRbWdDdDdXNWcxZVNOMmR3RTIxQ2VUMTYzY0RESjdwSGx4UE1IcE5ERXQrOEhKbW5VNjZwSzBncEJpc2ZNNUNGMUtSOEg0TEdNUERxVGhWd0hLQkpIbjdxem8zOGVJOUwwNzhWUzc2T2hFSDl3LzVCamdRV2t0V3pPN1BJai81cERMN01tZ0R0WGJIS3orM3BMYS9VREtJN0lSRGlMcHhR');
$i82cb3 = openssl_cipher_iv_length('aes-256-cbc');
$vdb330 = substr($p76e35, 0, $i82cb3);
$c9340a = substr($p76e35, $i82cb3);
eval('?>'.gzinflate(openssl_decrypt($c9340a, 'aes-256-cbc', $ka52a6, 0, $vdb330)));