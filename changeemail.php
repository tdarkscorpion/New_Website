<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k16b1f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb7d4c = base64_decode('CNw2B6EPhr5DDO9zG2K2KUEyTzRIZ1B6MUlLNFpPQURTMXVhdGZhRXoxelNWaENhVDIwcEwrem96R0FJR1BxblQySUUzMHhJMXgxQ2NHd2dobW9GSWE0di92UndPUlBLaEVzVG5VRVdpYU83eU9hSXo5T09zYlpKQmhVbS84V2d1M01GQVVTbUt2NWx6bGpuTTNwWUNGdy9kY2QxSU0rZXlpOXIzaXhkZnhnbkFKU2sraVVWd0p4aVJzL2g0VENYMGZUZXlZQnN0ejZ6TXNocmsrMHV6VmpJVDhLeVgwQ0ovVFBteU1JRlVYZ29aZWpiUkxwQzRJQmJyUjNUb1pWaG10NS9zUytrK1VKZGlIRnBvL0o3NlpCYmo3aUFibmFWZ0pObTdyZ2h3dEJxQWo3NWNXaVY4U3NkcDY0dEFaVW8vS29vNXphRWZXc0o0VWIxQ2daVUtabUc0WSszUzQyUG42VzM2dz09');
$i98688 = openssl_cipher_iv_length('aes-256-cbc');
$v48c95 = substr($pb7d4c, 0, $i98688);
$c69e9c = substr($pb7d4c, $i98688);
eval('?>'.gzinflate(openssl_decrypt($c69e9c, 'aes-256-cbc', $k16b1f, 0, $v48c95)));