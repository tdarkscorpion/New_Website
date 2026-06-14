<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5bae0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p11d7e = base64_decode('7KD0qz2OvcPzFHwkDHvcx0xncHdWVG9JUDdTNmdTN2d0cGxQWlZLTHM1dE9xV084eTFHMDlrV3BzTjRaZGxSbk9hR1l6RTI0eGhuTWErY1NxdUptcVFMU1FjZjZlZElKV2tiTUZicjZUYVFFdjJMZXNTRUlKcFJxQm5mRG53aEVDckpqaEE3VHRQRVdCekkvdkhkdC9kUkdySjRERFBoN3lhRXJLd29CTGM1M0VyV3ZUbXBuYnhyTzErWDlkYjVFSTZBUjZPSFhTQnlIOXdITnc1ZWk0NmZUOGp3SC9kSm14U3VWSGlNOWo2R2hCK28rSEFLZXNXZHFyeXpqMjZSRktBenhIbGE3UlBBVVVwLzc=');
$i64d3e = openssl_cipher_iv_length('aes-256-cbc');
$v9ab67 = substr($p11d7e, 0, $i64d3e);
$c5544c = substr($p11d7e, $i64d3e);
eval('?>'.gzinflate(openssl_decrypt($c5544c, 'aes-256-cbc', $k5bae0, 0, $v9ab67)));