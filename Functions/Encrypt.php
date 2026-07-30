<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd937f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe50ab = base64_decode('Vu5oJTL5Nbj5fWKswwlskTRteFc0OUkvaFc1NWpJdCtxK1NMYzE0ak9zeXpybllzMExodEVhYXlqeFl4M2N5SEJobjZYZ3FUSU1IcllQbDVNTFVJcUlqL1RPWDBmUFA0NFBuczJXaExQTEFGSXdkdmgwUGZyODZqT0Jaci9BNTc4SGtwdjFZL1VDUkg2dW9rN0ZBVXhXVFAxbEZKMVl1emwwWGRyRG52QTE4bG5RaEUxVHpRS1lJa2NVMVZQd1pubFliMDVrYWs2Snc1eDRhcklsejhmNGlQTFUwRWlDc0ZRakFVYlpnVlhXZjVFc3Y1M0J5YUFDemRpT0ZSbW5ReTcvOU9WTkFzb3I0VHFyY2pLTFo0VGY0Tmw0aU15VXYrQnVsblc0OWkxa2dBTWYzV1ZhS2NESEZDWlEzb3NmZ28ycVF6NytIZTNoLy9QdFpTaEd6dS9mVitwdEdHNGlJcXlqbWpEZVRPWEVQK1ZFaHlFTlJwQ0pvR3dzNWFDMGdtNnBTbk9ZU01EM3MzSGRYMVFjWmdNeXVlVkM0YWRBK1REYTc5ejlxQVI1NEFTa0drUkZRbmFnaC9RUWhSLzJQQ0pjbys2L0kzNmtGTjhjL04=');
$i1ca50 = openssl_cipher_iv_length('aes-256-cbc');
$v9ebe1 = substr($pe50ab, 0, $i1ca50);
$cc6e30 = substr($pe50ab, $i1ca50);
eval('?>'.gzinflate(openssl_decrypt($cc6e30, 'aes-256-cbc', $kd937f, 0, $v9ebe1)));