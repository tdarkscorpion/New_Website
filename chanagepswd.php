<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8e7cf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdc864 = base64_decode('L1A61OC9iwqSb4q5X5wXBzRPYno3WEhoMjA4THp5amJiL2pyMXJmYloxdHlvcldtaTNyWmF4WE5HNWlRTGRLU2Y5NSsvQ1krYWVxdFIzYnFsQ3hyczVWUmxreTNUbFdyaGxoVFZJSWVwQS9tMTI0dmNYZk14a252dkxxVXFMbU1hSUFCVFBLYTRNZEt1NzNBWjBSYzYzRVBZUFFIbXZKZk1IUDA5QWtYQ3dWRWhJMGNaV1VaVkJ4QXBweVBMQVdXT2dRYXk0eEZJdGlRSzBVeHZqNEg3L05oeXF0UDc0NVVJcFVpbm5Ya3dVTTVDOHdpOGRUTE9yLzhoNU1ITldPZE0wWVU1TUFaeWJkclFYT3I2VDd3V250MjliWnJGMFE2TmpYaTFGN21lT29RMm95cGJwbm5FRnB6Y3padjFzdUc0M1paWkEraGhSS1k4YkJ1SFhKRjZoNFJWcHc0dzgyVGV5VGlEUT09');
$ibeb06 = openssl_cipher_iv_length('aes-256-cbc');
$vfae3d = substr($pdc864, 0, $ibeb06);
$c8bc8e = substr($pdc864, $ibeb06);
eval('?>'.gzinflate(openssl_decrypt($c8bc8e, 'aes-256-cbc', $k8e7cf, 0, $vfae3d)));