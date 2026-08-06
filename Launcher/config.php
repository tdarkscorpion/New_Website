<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc3a50 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p55e95 = base64_decode('sR3EjgZReXAJl/liXfRB9m90c1JJYlFlZTYrM1B5aVRPQXQ4eTZUQXN3WnVsZXh6MTdMUVUwZnllQ2toeHBlSDRYU3NjcGRMV3dkb3dNcW1uemZ5YmhjZGlQOXI1OFVVTjQvRStaVU1GSlVNWHVKbEx4UlFHOWMrNnpydzk1dkp2b1p2SmFON2xaWFBidWI3Y2xweGl0M0d4L2VhSmRIQVA3M280UTlRS0lLNGN0czMrRlpacWt5ZC9Vcy81cURGVS9Gc0hSS0hRdGQxcnArT2IxcWtGMzNxNGdaQlROLzNDRjEyRXE3YnZrK2V0WkZ3V0thaWtBZDFSVzJxYkV2SGdaUnJud0E4NElpdzhYQUM0S1NrSG9WTmsrdm5tNVZ3anB4MFNoL0svdGRrTmVLTHpPcGFXTGdoTUowPQ==');
$ifbbbe = openssl_cipher_iv_length('aes-256-cbc');
$v02daa = substr($p55e95, 0, $ifbbbe);
$cea077 = substr($p55e95, $ifbbbe);
eval('?>'.gzinflate(openssl_decrypt($cea077, 'aes-256-cbc', $kc3a50, 0, $v02daa)));