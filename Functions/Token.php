<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k35a85 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5d307 = base64_decode('DGQj8vTRfgFd09qHT/H+x3hndG4rMmRxUmttUlNwSEFYZVdpeFhCdkVXS2poellhY3ZsU1NCNG9ZUm0veFRsbEpPNHMvWndIcnkxV3Mvd21WMnJTYVY5R3BWL0FXSDFIeHI2TzdiTUFPT3k5RU1nKzE5cUQzbFZ0eCswU2ovNjNGS1o5VXJPQm5vcWR2aURWMjBLeUg3aHJ4eVRtUE9sSjA0OERiU2Y2OUlNYXBnS0l4WHlMdE82QjdBSWdFVkFzQVU3R3JRdFFqWkk2QytUUVdvVE9GUjJBRlBlMmtWUEtRdVVMQTN0TDFMSCtBakV4UXFmd2dodnI0MVBPQU12UzduanNubFJRcm1vM0g2NDQ=');
$i862f1 = openssl_cipher_iv_length('aes-256-cbc');
$va3fa1 = substr($p5d307, 0, $i862f1);
$cb8832 = substr($p5d307, $i862f1);
eval('?>'.gzinflate(openssl_decrypt($cb8832, 'aes-256-cbc', $k35a85, 0, $va3fa1)));