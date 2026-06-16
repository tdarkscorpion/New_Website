<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k254cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0ab82 = base64_decode('yW7qoJbV1PNL9ToguHzRPWZPY3czQXNCQU9mcjdaTjlZQnZBUFJ3K1ZuOGlZdGpGTlJMbE0wUUNXUVVnOEFXaFZ2cGlXZ2VOUW0xRDg3dHVLazl5VTRDT1BTOXJ4OG8yNFdodEJjMDdXdXc3cnNIaXV6c1laRDU0L2NBekhBUmZ6dnY2d1RiUTFOTHpSUEdFbUExa2ZmRHJBVG5FS3lDcERpRkR0SEo5cm9NZkIwYVdGdkk0UlZPeEQ4UHozZStUUEZVK0NPd0tNdk9zV3lXLzdwQllkRjRBUjM5Vk9wcFVJT1BtNlJLRzRyTXBQQ2JVdC9oRGpEdmRmOWpGN2lkdkJEcEZ3L2ppWU8vYjMxNHFyWlBiUjhLZEovZmhZbTc1OEsyZmM3Z3ZhQVUxOHhQdFdmYXpiUTFoVDRrPQ==');
$ib6cf6 = openssl_cipher_iv_length('aes-256-cbc');
$v1c80c = substr($p0ab82, 0, $ib6cf6);
$c9521e = substr($p0ab82, $ib6cf6);
eval('?>'.gzinflate(openssl_decrypt($c9521e, 'aes-256-cbc', $k254cc, 0, $v1c80c)));