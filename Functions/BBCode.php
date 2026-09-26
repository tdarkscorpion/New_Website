<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4955c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pea85a = base64_decode('XD/2Z7mvzZ2GiiFKe+WI/09zU2t1RjZlUUhUMjljbDVSS2ZIcnlseFovdkRPcWRmTUhiaVBaVWNMM0dlRGgxbzQxbjJvY2Y2NzdrWkRlMnJZRjV6Yno3UkJ5VlFwWEllNi81WkNmdE11VUhkeWlDU1EyRDZjM1pMcFVtUkJURDV2OHQxSGNNM0dmeUZ0aTY4cXU1R0hCZldsNm1sTU1DU0JkNHF3UzF5MTAza3JzWkZrd0VDKzRISk5KOXc5Y1BEWkVtVWlVUHlwY2RuVlpPUWExMElOZnNJRVowTjBiclp0dE1OZGJOOW5pWm5WZDFLbDI1REVMZFo1dnV4TktERU02ejVSbjB6NkF3N3lYOXE4NkRZa1pWaTNma0IybThQK2RONGVES0JvRCszckQ4Z2J4Z2tBMkk5RHFUV0dFRHdLK0VteFdCOHpkc1JBQjJp');
$if6c3c = openssl_cipher_iv_length('aes-256-cbc');
$vc64b7 = substr($pea85a, 0, $if6c3c);
$c63aec = substr($pea85a, $if6c3c);
eval('?>'.gzinflate(openssl_decrypt($c63aec, 'aes-256-cbc', $k4955c, 0, $vc64b7)));