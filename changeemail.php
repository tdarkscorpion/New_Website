<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke7ce6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p26a3f = base64_decode('YmJPShzi7Tq0vytUZFbosXRpTTF5NHpoOGh2NkxLaXBaZERMNEJtZHdWWUExV0pGV2RXdllhY1poeUhBWXNEeTZmMzE3VWRQdlRxaVlDYkZGa1lVaVhselNNSmtqWE9TeWxEYjcyRDlHZHlVT0tORkllZklicEs0bUdwZDhqcVZ0ZnY0L2w2UlRwNHljcXI1ZjZJTmszZ2pXVFE0ZGN1eE1zVkhCaVlIMUFyVTM1dWdEa1JyeFg0Y1hBSVZuTkM5M2Jsb0RzaytpL1BsZUxpN3lSb1VYMUN6VEZFNXdlOFF4ZVZ2L1BvL3ArMUNLS0o3WGNkQ1R1MFA5bU5Kc3U1V0Fldnc2SVUrZUxXTklhY1hab0pyNkI2ZHVZUjZkZ1dxcjY4M0RpeE9SMlpvanp0SStOYUdLNEJocnVEVjBOZFhrSFFtaGYzTk02SitYSGJKSURpS3FkWjJQR3RtbEhkcGx6MkpDdz09');
$i2fb5e = openssl_cipher_iv_length('aes-256-cbc');
$v3ea49 = substr($p26a3f, 0, $i2fb5e);
$c3b5d6 = substr($p26a3f, $i2fb5e);
eval('?>'.gzinflate(openssl_decrypt($c3b5d6, 'aes-256-cbc', $ke7ce6, 0, $v3ea49)));