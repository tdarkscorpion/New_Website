<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kddd8c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p734b4 = base64_decode('lVnO9QDA1XFCPMSL4fFAsXFVMUZYemlVb21hbStyaDB5eVdHSXdNU1h5d1ZoWXJrUEpRekxUQmh0T1NRU3k1dThQSEU3bXlIODc2N2J6RERaQjllbThFenB6OWtLdXpBeWNmRHM1NzhuYm0vQmRqNHNEeFk3UFJMRmY4PQ==');
$i64e8f = openssl_cipher_iv_length('aes-256-cbc');
$v34d91 = substr($p734b4, 0, $i64e8f);
$c4e128 = substr($p734b4, $i64e8f);
eval('?>'.gzinflate(openssl_decrypt($c4e128, 'aes-256-cbc', $kddd8c, 0, $v34d91)));