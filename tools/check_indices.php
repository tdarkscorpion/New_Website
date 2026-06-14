<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdb2cf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p14d45 = base64_decode('V2br4rxxHjyw2PmkrcyLDEhkdWxlYmdTakRrVFdqU24xWWJIRGpoRGlaTWVhSWRRWCt5N2JleXBuajVWUTdraDhJa3o3akIvVmxDQnZFcjU1Q1BSd1U1K3E0Y3BabUp3RUJMRmRXMXBxYVJjOG5NR1FBRWVLc1UyUXNva1d0NFlOaForc09OZVdpbnl6L3J3NlhiWXBBS042bHlpem9sUnVVczZlemlUY1dzVjA3WlFrOTBPNkd1NnNaNEFJd1NqY05XbjdaREY4MUN6eW5XanBScWRNMG5YOE1XM3dUZ1AxeURGQ3hIWTZIcjk3UUU0VUNrZTNIS283emx6aHZCSWozMVNXUWtCUUl0MWhUVG4=');
$i4d847 = openssl_cipher_iv_length('aes-256-cbc');
$v1a1b6 = substr($p14d45, 0, $i4d847);
$c308e1 = substr($p14d45, $i4d847);
eval('?>'.gzinflate(openssl_decrypt($c308e1, 'aes-256-cbc', $kdb2cf, 0, $v1a1b6)));