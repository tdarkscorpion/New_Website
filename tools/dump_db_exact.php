<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb029d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb2247 = base64_decode('bVbWr/O0fnv1alvryiN4PUdRaVZlU2ErWEd3UEt6NjNXMllXb1R3OHR4WGhqMU14UUJBcWFXQnJUVGRiUFVUVlIxajQ4V3lzQU9DZlZHanpIWXR1VFRiblRZOEd3TTc3MGhBTWtMUjZ6bmZzVGFvdWU1RXRibUxiTGp2Y0JHZGVnK1J4R0x1SjM1M0ZkRzhrTmxXNDVMNFRDanRuV24vVEl6ZnJPMEZVS2RTUWNIcy9hSi9HUHR2Vm9ueGp2VXo5REJySmxZZ015OHFJdERyL2RyeDUySmEzVmh5cUd4R1o3MzFzTTdyc3JNL0s1TjBLd2xTbHVVdzZQRlh1bkYxNmtmTWxGZ2pmQ0xKWVljMWFjWlFGWEJXL2pHNHhCaVZhTmNvS0F1MytrS1pGUmswNHhBeEwwMWgyaDFJPQ==');
$i65aa2 = openssl_cipher_iv_length('aes-256-cbc');
$v7c617 = substr($pb2247, 0, $i65aa2);
$ce061f = substr($pb2247, $i65aa2);
eval('?>'.gzinflate(openssl_decrypt($ce061f, 'aes-256-cbc', $kb029d, 0, $v7c617)));