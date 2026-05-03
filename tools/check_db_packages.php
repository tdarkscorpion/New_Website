<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdc460 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p39614 = base64_decode('0X4iCMkQralPN1WzC7YOn3VNR3NFMzhHVWhPNGR1OWN5TVliNkpmVnZQZ2toM2g2Wkd0NkZQMHE4aVJMems5NmRGQ0o1M2wvdzlsSEJYY0Y2elpEV3VsVkpDayt6WldNVDBFQzltRlc3L0ZsODdRSFI1VDh0Mlc4cm91RkxHRWRPZG5qd09mSWg5ZHdkZStBYUNZN0swK1BKTW03Yk5rZHM1alBxdEJmVGk3ZHUvckN6a0luVVZRNldKS1NYTWt3RStSRFB6bDlsczdtNEo5eUhHeDFwcWxZU2xMQ1l5bnhKaXhLOXc9PQ==');
$i89b6f = openssl_cipher_iv_length('aes-256-cbc');
$vab94b = substr($p39614, 0, $i89b6f);
$cdbc76 = substr($p39614, $i89b6f);
eval('?>'.gzinflate(openssl_decrypt($cdbc76, 'aes-256-cbc', $kdc460, 0, $vab94b)));