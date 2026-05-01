<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3e257 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p477cc = base64_decode('pH8Zav0nKYqsGDPUXlv8H3k5NGJncC9GZ21SUlY5MmdXTGxxY2VkWUkvdWlJYi9NUmpBM05QRXpFYkNEbzlraTFPa2Q5MW9EWW90b0lDVnBGUHJUc1BLZGhhbEVGdzMyNm1QcExqb016UThPOXNrckxiWko4UklSWmRDc1E1M3hlSk52N1BwcCtyUTc4dUJUa1hPTGpXOWhVcElKZWYxampFTmF2NndTWUJrRitVSWJ2RjN1eHNtcE95SG9CYU5IZDNEcGlzSUVPU1QzYlRvUW5OWGRYK2pYRUh5ajRLS3llSTBFdXdXclJraDJjQ242Zk1yMHB2eVh2RzBaTTRvcWFRQ0EvNEFoc3FLblRGZlFiWTlhOTlkUmRLUXhQQ0w5VjdwVU9lbm5aTlhEK1pGdWV4T2RNcFR2NjU0eElNL2FCcmtRU0kxd1I5bmowK3E5');
$i37bff = openssl_cipher_iv_length('aes-256-cbc');
$v58eda = substr($p477cc, 0, $i37bff);
$c0ae6d = substr($p477cc, $i37bff);
eval('?>'.gzinflate(openssl_decrypt($c0ae6d, 'aes-256-cbc', $k3e257, 0, $v58eda)));