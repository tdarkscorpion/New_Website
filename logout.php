<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbddb4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a456 = base64_decode('1egZ8W47zYoI4Wf7DMHLWjNlMnB6T3FTeWhnbkRMdGF2VFhCb25Mb2tTckQ1U3RNblIweXRpMStuWXdGRzVLeWxFVk16eW1JcCt5clQ0elFxYS9VM1pkRThyNmdLY1I5cUF4QU1leUlQWjF2NFFzTTBiMEQ3TE14YzVvPQ==');
$i78bc0 = openssl_cipher_iv_length('aes-256-cbc');
$v45237 = substr($p5a456, 0, $i78bc0);
$cb9934 = substr($p5a456, $i78bc0);
eval('?>'.gzinflate(openssl_decrypt($cb9934, 'aes-256-cbc', $kbddb4, 0, $v45237)));