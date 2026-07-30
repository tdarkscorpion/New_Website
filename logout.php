<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k33896 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb0314 = base64_decode('AjDOqtbCtoGUGtR22pasJldGWFQvdDJ4aWNNZlg3Um5td2xab2xyNVExTE5uYTAwdXZrcGVvTmticnJ0MHROSSttN1h0TUpHS3MrYkNaWXVlYWcrQ2ZhSVBiU2UrRXQ5Nmo2blBuSHpJRlp3V1lLVmZRNXZSV1loU1IwPQ==');
$idfbdf = openssl_cipher_iv_length('aes-256-cbc');
$v161e1 = substr($pb0314, 0, $idfbdf);
$c64332 = substr($pb0314, $idfbdf);
eval('?>'.gzinflate(openssl_decrypt($c64332, 'aes-256-cbc', $k33896, 0, $v161e1)));