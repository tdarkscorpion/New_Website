<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k165f4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62a95 = base64_decode('OfYinwv0/p3tHG8isKTIH1ZxYjgrWEJIbWZsanZiYUJUSEdKK2t1KzdQRE9RTGllSlY4RCtnWGd2Qk1xcUk0K0hSTS9tTWE2WC9qV1R0WlQ1emRNdThqaWtSTnFCL1RIMmdsdmJVK3BES3VrUlB4cDRNUlFSVVV4TlQyNU5GQUQ0eHdVMHhWTkl6TjZFUjYvMzlXTWw3TjhueWdqMlZmM3QyZTB5MVVNU1ljdWEwUG5teFBtTjZXT1hucGM4UlF1NFdJMG53QW9XTkNwa2ZmbWdqaHVOWkZPbFpOaytIWnVpaGcwOEx0dEk4NEhRK1ZpTld3b2xWY211Ykk0YTNXcFRublE1bmJpeWZCL0IzQnpoMWFWTy9lb1FoQWxjMklkY1NtcCtKaXZIa2pxTFVrSGw0NjVTMDh2NzBqNzFLZm1yUWZCSHUwcnFLY0JIOEpW');
$i60322 = openssl_cipher_iv_length('aes-256-cbc');
$v66553 = substr($p62a95, 0, $i60322);
$cb6842 = substr($p62a95, $i60322);
eval('?>'.gzinflate(openssl_decrypt($cb6842, 'aes-256-cbc', $k165f4, 0, $v66553)));