<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb9a4d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p615ad = base64_decode('sHLAh440fvcxvRiM21Fg6VlqL1htd2ZWUlIzczhMOVp1bHZORmpFcy9kS3VOTnJxWXF1TWo3YUZBSFFkZkhtT0k5NitDUG9kdnUwNUNLcTNpNFV1VndOemhGZnRya3BBc0JhemNrZTBvblZybmxDbFhFNU1sbk4vTFZxRFB2d1ZhbVJYK1NhTHZ5Zy9qQSszM0htU1g3RnpZM2tRT2Q4ZXpRa2hCMEtONWxUN0hHYnVGQlZma094bXhYMkJjb2JTcHV0MGdjcndwOFY0cndqNW9RUitTa3pqUXpXRGpGRDJxMW5kOU1BTWEwRmtqOGptZHBDQWo0Uk8relFSbjJVTjF2dTFvY0VpWnJWK3d6MDM=');
$i24921 = openssl_cipher_iv_length('aes-256-cbc');
$v92eae = substr($p615ad, 0, $i24921);
$c4e47f = substr($p615ad, $i24921);
eval('?>'.gzinflate(openssl_decrypt($c4e47f, 'aes-256-cbc', $kb9a4d, 0, $v92eae)));