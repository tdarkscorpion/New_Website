<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k20372 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p06dc3 = base64_decode('qf4GXNt5bRBTjMHpLNN4kjVLblV1d05jSGtOZGxnSWdyTlZPb0EwNDRWOXdSWkt6VEhDU3ZoUkEwT211b1N6b0pXZ1JpK2N2RFVRNlB6RUJPN21BRVB5djJoMTdGWk1XN1oxSHlMb25Ca0ZHL1hxVVZ0T2ZkcEpQaXRpWlRuVGYxUmNDRndBdkZONTRHUmhUK3BaaHFwWnorUTF6NXZwRW1oTFhSbkV2b01XUFpZeG56ZmQxZFliMU52QkRRQzBMekh2andFUGZFT0VXb1NwV1oyOEVpaWpRejBjL1FWNlE5U0U4a0FqUjR2TEh0V1dxQ0ViakZPOUMxSjhKNW45NnUyY0pRQ3p3SUlWNlpLdDFpQWRVODdGLzlYWWc0NTFXQVgwZnRpd3pZT013K3JYSXp0anpsSHAyOWtZPQ==');
$iaffbc = openssl_cipher_iv_length('aes-256-cbc');
$va5d9a = substr($p06dc3, 0, $iaffbc);
$c4e7c9 = substr($p06dc3, $iaffbc);
eval('?>'.gzinflate(openssl_decrypt($c4e7c9, 'aes-256-cbc', $k20372, 0, $va5d9a)));