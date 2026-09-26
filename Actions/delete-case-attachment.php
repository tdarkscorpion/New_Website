<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kffe80 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5ba14 = base64_decode('mcbCTlmfXRsbwKJDkw3WInJNMDlPbG5FdXJBaFVOeUNnbWVwYXJjNC8vUGdHN3lLQjY5MWsrZkQveG5wSjNkZ085WEFEbkxtaHlSTk9BUEVLdzAzN0pQdVdKSm91ajlIMWppUkp1bUhnb253K29reFUvUWtMZmlnNWNSKzkyVlRLSVBXbTk3Mzdqb2kxNk1SbEQ3UFltcGEwQkxzSm1OWW9saVRmY1o0Z1h0K2ZDNEdQMXUwQ2ErVjgzOEZxcE9NVTQwODNlaGsrTmk4a3VGNTJoVFRITHNtZlhxcHVuVW40ei9XMkhqc0NtandFNkJQVjBDelVHOTlsLy9hbjdYTFFYcm1aMVk4YmVtSHFteSt5YW01OTZLcTdtVXY2RGMvWVZ0amwyMUM0czEzK3RaQjB4TmdJaVRiTHpXY05yeWJsS3BPaExoaTNLbWxGeUF1');
$id0e69 = openssl_cipher_iv_length('aes-256-cbc');
$v0cc7e = substr($p5ba14, 0, $id0e69);
$cde77e = substr($p5ba14, $id0e69);
eval('?>'.gzinflate(openssl_decrypt($cde77e, 'aes-256-cbc', $kffe80, 0, $v0cc7e)));