<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kee75f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p79afd = base64_decode('25rHttofTGlI7hatTR47qG0zbDVaWXExdUNsYnVSbDVRZlJkKzMxeVU1bWo5Wll2OFlLVG5GZVBLaFBFWnVDd3Bwc0c5QkZxYWFUNXA1UEFVRm0zY3plcStaT3BmSncyRGVNc0pjTFJ0djRmbUVGR2ZKWDNySVJOb2ZPdWRTa0J1MnA3d1dCREJXcTFlSFNWRXZ4MnphQng1eWVLRmp1SjFCS1d4Y2VrM1UrZi9odkJDNkk0MzZoQUFyeTBXUGRsQ2pWeHdtTG91TFVTTDdmMjgzVkJESDkwT2hmVlNuTUtiVDNXY2xTc05xb21yZlRnRjM3QlNLMXVaYTA1TTE0NDQrSlhQK3puTlgrdUk2V2NhYU9kWkYxWW5nc2xGeGRMZDNLUXM1TllDWW40M1dEMnFqQ0k4VytsbnNrPQ==');
$i78239 = openssl_cipher_iv_length('aes-256-cbc');
$v532b0 = substr($p79afd, 0, $i78239);
$c16688 = substr($p79afd, $i78239);
eval('?>'.gzinflate(openssl_decrypt($c16688, 'aes-256-cbc', $kee75f, 0, $v532b0)));