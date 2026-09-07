<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdfb2e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8ab53 = base64_decode('V5/se4HaRc2wvfKSxO99kFVCdnhFT1lONEFYMFpvUVpSUHZvL3IycDljMzk2VFY3K3lwYkJ4eGF1d0pVOHFYOHdWdW9SdldSakVTenhmUzlrbElPWXVjSFhoOS9rcjR1RzZlSUhTSDd2YWZDMEszQ2V5ZDRHTEp4MnB2aDM2Mkg0MmhTR2piSlI1b2YrWmpGbmZEWGxNa2dwS1JNMlkrY2FSWnkzK3ZiTFIwb3RpTlQxMkg5cWVpVkJSSytzd0htdFhYK3lVUllFamFDU2hncEE4SGEzVzBrMmpRUFZKTUEyUS8vZHJZOGJPUS9wb1cyVitSNlVPRFczVWJsYjFQWnNOd3h6MnZYeFYwYUhPbkV1M01QTi8wLzg5R2QyVlhLQ0R1VGh4NlJQZXJYMkM4RXpSVVliZlhmUzE0PQ==');
$ic5a4b = openssl_cipher_iv_length('aes-256-cbc');
$v90b19 = substr($p8ab53, 0, $ic5a4b);
$c8b9b9 = substr($p8ab53, $ic5a4b);
eval('?>'.gzinflate(openssl_decrypt($c8b9b9, 'aes-256-cbc', $kdfb2e, 0, $v90b19)));