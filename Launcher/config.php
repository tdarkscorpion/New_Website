<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3057b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8d594 = base64_decode('XOrVDdAR0oE0pz78K2+guGkrRWZHSURya05neGhFd0xCNTkwN3l4WGpralU2Mm05azhvT2VodjBNRktNRlAxcHY4bnlyY256T2Y3UDRpYkoxR1lNWHdqaE9nRmlLY1JuRE5jRlN4Uld3VWxvK2VPdSs2RnNHcCtKU3pQUWNSM1A3WXFRM1EyOUVEZGY5eFZyUENyMS9teWlqTzBuYTRITjdLU1dSUnVuWW04bkJ6Y2hFQS9Fd3A3NVF2aStFOEpNV2VnUWpDempybFdtejIxb2J0OHZRMlNhM1ZjQU1DOTQwaW1WZzF2enA3QWx2M2FNbGwvYS9OZFlZRGZIa1lkZERheUF6aDJTaXh2TFlidDR4RUVYTU0zM25Ha0FWcFN3QisxUitGU25Qdy9EeXl5ZFRrTDN0bkZsb2hvPQ==');
$i8a489 = openssl_cipher_iv_length('aes-256-cbc');
$ve325c = substr($p8d594, 0, $i8a489);
$c83999 = substr($p8d594, $i8a489);
eval('?>'.gzinflate(openssl_decrypt($c83999, 'aes-256-cbc', $k3057b, 0, $ve325c)));