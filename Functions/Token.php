<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5aff4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pca04b = base64_decode('eBF4VWzI/94IRGYvzs/URlQwUCtDd05qZG8vUWkyQ2h2V0R6U0tDNVF3Wkw0KzFSK1ZjSXlHS3F2U1VQTUFHMWpieU82T0U0bDcvN0EycDdua3JrSytMYzFWQ2NmWm12VVpKRG5xaWNacE54NU1XTG14Qjh6VDFhaUN1elB5djdJZGRORXVZekhTM2xHUldzTnRDT3FlTzc4VmhNd21HL1QvOEttV2ZKbXBqOWZjL0U1eFFyZWhMektmMjZlWXRIWE5VREpMcWgrU1NjRFVRK0cvUlFQVmN4Q0Vybmd4MUw4a2NvSEc1eHlJMkd2UGk2VEhxRVFseVVwdFVnalJ4NzdGSG9yUUFoV3VmK3Aveng=');
$i6f947 = openssl_cipher_iv_length('aes-256-cbc');
$vb549a = substr($pca04b, 0, $i6f947);
$cbca11 = substr($pca04b, $i6f947);
eval('?>'.gzinflate(openssl_decrypt($cbca11, 'aes-256-cbc', $k5aff4, 0, $vb549a)));