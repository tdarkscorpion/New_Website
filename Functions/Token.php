<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k73d03 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf3ef7 = base64_decode('d1CEcmHAgSgsaaeZ92/sH1JmTG5KaG1taThkYXlVbFl4ekwvcTNoSDNDZ1N0Q1pjZmtXa2VaNm9pa0trYmVTUHREaEtsdnc1TXE3dVpVZ21UNXFHeEt6cmU0M0lrbWt1MzQzNHBUZEREZkdlZHBzMVFjdGRVMUdwRlBsckRTRm1PcThxTWpqRlE3YzY3dlhKTVR3clR0SzFmbFllamxReDh3cUdxelJDOGJrNVZaNG1DRzk5bktKcnoyYXRsd3R3Z3Fqa1hYcmQ5aHo1MnYrSzZZT2FNUDlCOXE5VmY0K0FGUzRSSEZyeXRDMlBvaXkzaHVyMEpnU1RBQUpSdm9LZE9hNUxOMURJMjZ1M2d6NWI=');
$i54dcc = openssl_cipher_iv_length('aes-256-cbc');
$vcfeb1 = substr($pf3ef7, 0, $i54dcc);
$c6dcc2 = substr($pf3ef7, $i54dcc);
eval('?>'.gzinflate(openssl_decrypt($c6dcc2, 'aes-256-cbc', $k73d03, 0, $vcfeb1)));