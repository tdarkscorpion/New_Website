<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb15fe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe58db = base64_decode('4tukdsRG7m1v8wB3iK0u+0huVmN2Z3BVNUZQdlZ6dmEzb01RSUx2YnBYaXQ3WHdNVlhCd0wzc2o0U0k3LzAwTWtmeHg4MGtnZ1lxL0o0a1NDMzJESlFKN2lNTy9ZYnJlQXJ3Z0IrZXFUM011THRYTWNPSk9GcTVFRVhQdkd0L0VuOGYvOCtQL2wzbE1MeWdEbUxrblYzOWtGUzBQMnQwelFzeFlyejhuOEQ1cnY4czg3alhoTjZ0OHEweXc4cEZYcnlIUjRCZXByTjVkY1kvTVhNM2o4VE1UVTl3VVlXbUhnZ0p0TWdlcE5PazNDRGVIQUVETmZaMHJmZHh0VHR2Z0VwV0Z2SEtVeHR1czZKZFArQzBiK1JuUWlOMWVCU0syYW1uVS9uVll4eWJLSS9uY3Exclp6VU8xUEpTd3ZaWGc5OU9KMnMvZGVNNVpFMC81L3Rxd21UTGNpeTBoZzFxb1hScFEvdz09');
$ibb993 = openssl_cipher_iv_length('aes-256-cbc');
$vf5eb3 = substr($pe58db, 0, $ibb993);
$c1caef = substr($pe58db, $ibb993);
eval('?>'.gzinflate(openssl_decrypt($c1caef, 'aes-256-cbc', $kb15fe, 0, $vf5eb3)));