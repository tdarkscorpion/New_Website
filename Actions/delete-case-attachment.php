<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1201a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7f1e1 = base64_decode('VKHMfZZVtlLzgLH/zyLUi0lVNHVtdUhpb24rcWtRL052SW5YL3o2K1VlU1QzYWlkVGtTd21ablVxV1RaTlhxcW4vUTZEU09lTkNaallwMDg3Um1YRzI5L0dPUFJsMHUxdE9NM2pVanoxYmd5YzROWkh0a3kvcnVRYUdlcTgvb0VWMWFJbUhpbUYrRWNOSEVBem1UVHlDNGFNZ1RrNGF1R2RUTG82OG5LS3ovaTU4SUJKRTZBUmdzSjdsWHZwMTdoaWtRaHRTQXl5dUpSeTM0MzZVblNzRXN4NkVHVnFVTlJKak9hMEJmMktoM1lmNUNPWWVkbnZQUVBEWlIrcGhuTGVJM0c5QmdpbTFyYmkwb3d6V202WmMrLy81QUNPT1NHdlNXTWVnR1FwSHU1TEROYnhuczRCd2lKaDBEKy94TURTOVBBRExLYm9rSUl6OExr');
$ic13b5 = openssl_cipher_iv_length('aes-256-cbc');
$vd1e63 = substr($p7f1e1, 0, $ic13b5);
$c54bf2 = substr($p7f1e1, $ic13b5);
eval('?>'.gzinflate(openssl_decrypt($c54bf2, 'aes-256-cbc', $k1201a, 0, $vd1e63)));