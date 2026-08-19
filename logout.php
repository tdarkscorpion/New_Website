<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd5a59 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$ped636 = base64_decode('0hCRIXeFZykFMTqFhsZ/yVMwQWljU1poRDJvKzRmbitMV0x3Vk10RE5LQVRFMFA5azkwdjRUTnRUUUV6K05nZ3hFeTBocGphSG13UnI4TGRDam05SGd2R014WTRaOUxMNURPTGNiTEh6dzVDazArcGFkVWV2STlhTzdZPQ==');
$if9aee = openssl_cipher_iv_length('aes-256-cbc');
$v55bfb = substr($ped636, 0, $if9aee);
$c9bd5b = substr($ped636, $if9aee);
eval('?>'.gzinflate(openssl_decrypt($c9bd5b, 'aes-256-cbc', $kd5a59, 0, $v55bfb)));