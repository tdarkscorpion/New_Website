<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k51c14 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1b769 = base64_decode('nV33IfU0b8hBypPKXRp2q2krZ0lnZ0xxYjhHQ05DSE83WU53b1RudXZTdkNJQ2pnOGVnNzdESkRFRTgwQWpySGlEc1hsaTRLTUwrR3RQN3BoU204UXFzZExMN1FQN2RhRlYrSlZTUzVVQjN5alNFTENEWWdVT1djaEF6WjdtcDFiL0IwRE8yenBLRk1USWVwR0dOU21rQzk1a3JIek1VRmFNa29mbEdhNDVxQ0JvaGRHdEs3c2IwZHJHZ2Q4R3N6eWt1dmVDbWNyMDZJMzVYZ1d2cHNmUndpM0htb2RrZjRKeTBSSGhGY2dMTk55M3E1YmpuY01oODJBSlo2UDRCMEhHc055ZDcrMXBzQzdrVWE=');
$i1b5a7 = openssl_cipher_iv_length('aes-256-cbc');
$v15cca = substr($p1b769, 0, $i1b5a7);
$cfeb9b = substr($p1b769, $i1b5a7);
eval('?>'.gzinflate(openssl_decrypt($cfeb9b, 'aes-256-cbc', $k51c14, 0, $v15cca)));