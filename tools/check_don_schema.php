<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka727e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p16b84 = base64_decode('0HCvYGntUGAk0HFoA2BPhFYyQUU3QmpSR3hEanRlM01pVFpHcXY3ZmN0Smh2YlBtZW5BZVpYTlYvN3RhN3F0UTlBRzUxcnZ4YUo5RVpqd3JhNmpudjZCWHZtRUlLODAxTTJmR09JaHp4YzhmRTRxeTUybGZGTVNuOFVTUlphUnNSR3M3dzhJL3lXUDlGdW5vODNTK1VYTU5VRTZvdE00OFZkWlJHdEJVTHg2MnZuVlgwRlp2eFpXNk1DRS9NcUFzRWtFVFVOc0VMdlYxQjh2ZjhnM1ZieDZiZ3dVV1NYZ3NDUk5vTTkrREhKU1pwYlZDMi9CVmo5Yjk2aHM9');
$i61114 = openssl_cipher_iv_length('aes-256-cbc');
$vff7ad = substr($p16b84, 0, $i61114);
$cab097 = substr($p16b84, $i61114);
eval('?>'.gzinflate(openssl_decrypt($cab097, 'aes-256-cbc', $ka727e, 0, $vff7ad)));