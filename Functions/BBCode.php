<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcf626 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p656cf = base64_decode('gAaCWO3nohvegZumQVZkLXNsQ3l4clFvZUkzR0tyU3Q3V0M5dUcvMzVWNmVZTHBUQ3hsUkJNS0JSSW5DVzFDZHUrZE84bnQ1MUhOMnMwQ05ldHJocXZoajNoMFJ0dE1mUXRwRmZYczhSaHJBeVJidk9HN2xVNTcrbWZGeDlib2NubkhRb1F0YmdUL2cwczZpMnUvUzJSUmJzZnZKcGNGL25tUnh5Mi9GOC8xM09IRTN0L01ma3R3Y1hWSFhucVBTR3ZHU1U4enpiSTBXemt0Zjg2TTF5UDVaVXBvTjdWNTJkcGowZ2RPOU9lNjY1SDVVdTFiN29jY1dBZk4zTjdmM0ZDVEFiR3N6djU2NDYxeDRjM2ZFOGZrc0EvK0o4MWxQWXczb3V4YU0xVWdCam1OcXR2ZU96bGQ1QWREWmJQdmlKOEhMdDR4Ri96clJSS3BJ');
$i15f4c = openssl_cipher_iv_length('aes-256-cbc');
$v5ce92 = substr($p656cf, 0, $i15f4c);
$ce1403 = substr($p656cf, $i15f4c);
eval('?>'.gzinflate(openssl_decrypt($ce1403, 'aes-256-cbc', $kcf626, 0, $v5ce92)));