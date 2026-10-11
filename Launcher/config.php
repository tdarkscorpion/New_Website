<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5a767 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5ddb1 = base64_decode('UIRn1HSXra9kiD+MTQP5GWRqOVJoYTc4czhBQTQ3aWE1NWw1aVhFRkUzdjM2T0F6QUdXVGc1UXYvU0FjSndnSEZGaEFrTmNGVXVvb2d2eXR2bjFhTzNEV25yODh5TVlTczZmOUk4L05oTVNteHJaTHRsUEdkeUhaNFhIRER2allJamZMVnVYMzkvTGxrV1kxeUNaRzlFb3psV1lrTGVvaHFTZ2QrNWtrN0xYRDk1bS9KcGdpWk51L0ZDdkRJSmRYUmIzZEJoVDR4MUdod1NqYUcvbFNXMHNjNGg5RDJ6ZG82a0ZIS2w1cjRMUDNkUG9QWm5sSEJCcG1uQUJkQWVCY2Uxcmh0bjRKUVRENUpmUkJYazdyS3NtdjRnUmRhN0dqejVsK2Z1c3VwZTRQUXhkTjIyTXhSUHd6ZEpRPQ==');
$ic163e = openssl_cipher_iv_length('aes-256-cbc');
$v188a3 = substr($p5ddb1, 0, $ic163e);
$cfa960 = substr($p5ddb1, $ic163e);
eval('?>'.gzinflate(openssl_decrypt($cfa960, 'aes-256-cbc', $k5a767, 0, $v188a3)));