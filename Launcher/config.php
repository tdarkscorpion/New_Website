<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbc9e3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5b76e = base64_decode('VfLeyK5pPcVl5f0n+2boDjI0YmVGV3djS05MRXJldHowTC9tMlM2bkFOTnI1RU96YWRnRzE3ZFZISU81ZzNZZCtvb1BOWFFMbWpWUEN4UU9KNk9WWjBlb1REVkVEUG5xanRDT1VtbzBOMnlqWFpnN0k3UFFESzduMWtwRzdvdUNMZkJIZCs0VVZRSU9nKzc3RkJTcmxra3RJU2ZMZVNBZC82WEk5RmZLSXhRc3J5N2c5bnpIbURQeWVJS3ptQ1RCZnl5Y3hvcXRNZFhsMDNyYTlBZzNxd2NFSTJtRUlnb1c1dE9wMXU1UzczSG1pdmxvMitqMWIzMUowb3p4MWtyNzZFZlliWGQvazQyUU4xNnRmcmNXMmZWSHlRZUx4amRyRGtaQVg5dExTSm5FcjVXa3ZOYlBXbVhnQWo4PQ==');
$i67a1c = openssl_cipher_iv_length('aes-256-cbc');
$v4a0f7 = substr($p5b76e, 0, $i67a1c);
$c287d0 = substr($p5b76e, $i67a1c);
eval('?>'.gzinflate(openssl_decrypt($c287d0, 'aes-256-cbc', $kbc9e3, 0, $v4a0f7)));