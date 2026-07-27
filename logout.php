<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c38b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p28ac9 = base64_decode('hzNz5+t+cfuS4accrPT+EEJRR2tkMDdaYnk0T041bm42NmV1YXlTK2d1ZGhIaVJYb1lSbUdNajljTXhtRUpuOEg2cWFtM1VKNmcvRjhid1BDVmJYcmk2Y0FYSU11Q1R1L2VsN0puVlFiNmVFT1JQL210Yi80dnBlaURjPQ==');
$i05f54 = openssl_cipher_iv_length('aes-256-cbc');
$v0aac7 = substr($p28ac9, 0, $i05f54);
$c88657 = substr($p28ac9, $i05f54);
eval('?>'.gzinflate(openssl_decrypt($c88657, 'aes-256-cbc', $k2c38b, 0, $v0aac7)));