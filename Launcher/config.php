<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5accd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcd00d = base64_decode('HIzIdudS/xQsECsxCx1a63FZZ0JPVWpsYkcrUjY3eUwzWTBqQVUzQWhtUmVuYkxOZHRrRVZlcDl4ZFpRM0NnTHRLM1NnK0Vmd0ZVamdsNVJDZExqQTlXemQrSzRGdmhheWVDdFh6OVc5ZHZ4ZCtSQTd4eEZBVEJaQWFXQUx0b0I0U2M4UEVSS1A3VGprVlNPN1NOaFRHenA4V3l5VGp4RTlKRnpheDhxM21qNityMC9WSldvZHBkOG5jM0JEYmpWaHZidjVWY0dQUlA4NXdIRUVqMzN4Z0EzbmtIc0pRVG5KaE80QVQ0VjZNejBJRWZZY2pzdmNVQ3p5SHNXNjlWeWtuRXZPcVpqTjA5eXp0YU5kS1FkeXNCeVpOUXY3WS8rdFpESlNlTXJGdDVnWnhMb2xZMW85MHY0NnJzPQ==');
$i1cf53 = openssl_cipher_iv_length('aes-256-cbc');
$vb915d = substr($pcd00d, 0, $i1cf53);
$cfd9ce = substr($pcd00d, $i1cf53);
eval('?>'.gzinflate(openssl_decrypt($cfd9ce, 'aes-256-cbc', $k5accd, 0, $vb915d)));