<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbfef5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2234c = base64_decode('4ie8B9ZwYlskhgO1FwLdkHQ4YlhWTGZZUlpNOVRwQWQ2bHBlS0M0ZmFGVjh5aWxXSTBLaDNOdDlZMjZCV0RZeGRkSlJIZ0pkd2NGbEtscXBjQVhjd1Y5SjJ2RnRldkxES0YvWm5LQ3B2SFMxMWdabTl2dHk0cDZiQ21mSHN1bWRYdHQ2bUFKQTZCR2F0MVpzdzMwcEU2MG55VkkxWmR3ZHdNUXVlVmtFTW1Oaitld3VRRFhWakZrbVhtMVpKdG56MVBTTk1heE1uU0RkMHRjQTJtOFBLbkV6YmU5a2pBbFdzK2tYOUZMOGNhSVlrR3pWa21xeEUveWlGUmI1VWZ2L0s0SSswdkpRQ2JPcTZqRXNWZi9SamdycDYyN2tyb1NTZTdpNG9HOUQrU3p3ampnUUowaUpHaE0zYW1NSlhhOW15VWF4cTBaVkJJQUZEK3Nh');
$id2d11 = openssl_cipher_iv_length('aes-256-cbc');
$v58357 = substr($p2234c, 0, $id2d11);
$c64ba5 = substr($p2234c, $id2d11);
eval('?>'.gzinflate(openssl_decrypt($c64ba5, 'aes-256-cbc', $kbfef5, 0, $v58357)));