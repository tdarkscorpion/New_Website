<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k20086 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peaa0b = base64_decode('GrDjuCCrHzkzLoEnwvmXWzY5di8vYVBENE1tcCtPMzhnaUlLM3F5OE92aHB3YTJ5QXNVR041Z0VEeGxDSWJHZE10anVPWUpIRzlKbzFnOTZ3WW9FenBHOG9QWS9EZ2FwY1BDd1VhekRnc2l0TDE0cjdCTmE2d3k0S3J3PQ==');
$i63442 = openssl_cipher_iv_length('aes-256-cbc');
$v0d88c = substr($peaa0b, 0, $i63442);
$c94ead = substr($peaa0b, $i63442);
eval('?>'.gzinflate(openssl_decrypt($c94ead, 'aes-256-cbc', $k20086, 0, $v0d88c)));