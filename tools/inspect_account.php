<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdeb7f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p984a5 = base64_decode('BwDlG7lu2KYZup/qFXhwSlNZaVdjQWV1SU03bENDTE02eERQb3VLb3lBdE44Zk5lRkk4SjI1bmZDNmVBYUlpT2ZqRHZwb2xGS3FJMHErcjlTVmI0T28zMDlEcE9HZy9TRE1IdmhtZ2tLYlB2THhTQmY1SHM4bHk3elhaOHh4YTd6VWFGWjNCYzFCcnJBNHd0bHMxWkZvU2JZVWZIM1pVTkh0MWxHcmQ3Ky9CeXF5Z1B0UUhqeklmcVFscGdjUzF1cXczc1FLd24wUi93MFBYYw==');
$i52807 = openssl_cipher_iv_length('aes-256-cbc');
$vee24e = substr($p984a5, 0, $i52807);
$cf0902 = substr($p984a5, $i52807);
eval('?>'.gzinflate(openssl_decrypt($cf0902, 'aes-256-cbc', $kdeb7f, 0, $vee24e)));