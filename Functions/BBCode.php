<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k00867 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62ff8 = base64_decode('iCb8AIWsfL96euNez8eKvURzRHJMY0Y3THZodmhGblJJUjZ6T0x2VlE2N2kwcWt6clpBeHZ5SE0wTzJZVFFGcWJVQ1huU080cWd2S0JYU3ZTNG9GblVwU3E3MFVtejZoWmE5bEdpSGR1UWtQQW43MmVPTFozL25xT1lacEtsUU9Gdkt4OFpOb2dHbHVRd1MvWE1yYVJndnptK3g1U0pyNHNuY3hzVDYwbFV6Zlc0REhGVnFZc2V3V2JiWmNzd2RISEUvTFc2N1d1ZWVnNVl0SVhZY2tTb0xFZHM1VEpXZy9TaXdKT2lES0RoU2VTUGFZTFdRS21LOHdST3lCWkFxVHh1TUdMajRRbWdhMXhyT3loZWZ4VmxBdEtYblY0YStSZEMyYzJsNGx0ZzN5bnkvL3VqbXpHcEllcWFXb1krRGIyQ2J5RGIwK24vYUhLcnFD');
$ica448 = openssl_cipher_iv_length('aes-256-cbc');
$vd7f44 = substr($p62ff8, 0, $ica448);
$c2be0a = substr($p62ff8, $ica448);
eval('?>'.gzinflate(openssl_decrypt($c2be0a, 'aes-256-cbc', $k00867, 0, $vd7f44)));