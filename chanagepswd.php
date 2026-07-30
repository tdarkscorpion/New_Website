<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k40b8c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p52ea9 = base64_decode('SAmNJgIkQWsQ+kPF1V0kWmdEaXp3anBOenVwTStlcHZ2L0tjWE5HL1dlcGZvcGM2Y0YrMXp4MTBhd2ZEUE95cFdlWVQ0SFA1MzVLbm9QWVo5YXRhajY2MTNibXArU1ZnQmlZcW81M0hQV3B5NzlWUENSYWRhajlOWndhVTV0ak1qb1dvRmNtNlRIU0hzWXdSS2g3S2JzMnc5dEtpREdQT1JpU05NTUtaQlpWRlAvc0sxaEQwWGlBSEtPc2s0UjVBajBCYTZOaVVkTXM5N29sNHdZTVdHTXp6cEhzUGJKSVQ4cmdoYnVtc2V3N29NYTJsaWFjT0tJNC9GNnllTzN2U2xOUm0xRDlkeGFKb21IUlo3eHhhOXIwNWJXbmhrUFBzL0xjOTRudnE4SWgrajRsaW52WWYzNk51emovOW9JZG1qU0FBakxZMHBBbEdSMStQL200SjIxeEp2TEdaS2ZZMHRrU01pZz09');
$i7c87a = openssl_cipher_iv_length('aes-256-cbc');
$vef5e0 = substr($p52ea9, 0, $i7c87a);
$c5db35 = substr($p52ea9, $i7c87a);
eval('?>'.gzinflate(openssl_decrypt($c5db35, 'aes-256-cbc', $k40b8c, 0, $vef5e0)));