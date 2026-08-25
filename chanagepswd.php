<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4cbd3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p18918 = base64_decode('ArFWIaIP2BuFtEKEzgIPOjhzQll1TVVBblAycTlRVThxTFR0RDdVb0pmR0ptQWhEM2JaSzRwMnlEL2dtcElkYTZIMFNHYkdhNlpJNmRseXZtV2V0TTZDNmphb1BQYnMzVEh1d1JGWjhXR2xTNHJXTjFFQWFoeCtXWS9iMnh6Ty92NG1IVDliUGlOTktZL29QMTJGNzhYc3lCazI0bHVRU1B1REZoMUJuNTZiMElObUlnVTlQbEJiV0Q1VHJTT0RuU3NKbE5xUkFxUi9TOEF5eFVqZm1qcytoZ3U0WjNrSWliakpoU1RHQkZsQzVrbGNxZ2hGeWU4OXFIbWJ2QysvK24rNllRMk96VTJCQ0Z3QkQrZGdiM3Ftd05CWjdkcHMzakJEZEJJdDR1dGdtU0oxN1BiRXpsclJiRTdwbm8wdDBrTkV4Um11aEJUbzBkL01hY0xROEFsRW9SNlp2bU0xc01SK3VnUT09');
$i3b4f5 = openssl_cipher_iv_length('aes-256-cbc');
$v756d2 = substr($p18918, 0, $i3b4f5);
$c42370 = substr($p18918, $i3b4f5);
eval('?>'.gzinflate(openssl_decrypt($c42370, 'aes-256-cbc', $k4cbd3, 0, $v756d2)));