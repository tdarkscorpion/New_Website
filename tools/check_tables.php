<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7c5c5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pac6b4 = base64_decode('5PtasyyeHAjDg6wqxSHK3npoMWo3aHB3Yk10VlRtcGVKK25SRFA5YUFESW5xcVR5bDIwdFdIZ0FYSHcwdmRBelp4OUhhL1ZOdHhVWXdhcFkvQmpHcHRjYXEyNE5BWG9ZQXJtU21UeWxGYy9CWFJWVGJkb3FsUWl4T3lWQUR3eEhVNmRuVFN0SkdiaEx3d3BMaG5MYUVqTmw4RHNSTXcvelMrTCthcWJ0aXlPV25Ga0NPRHdybGxlU1VyM01iTG95L28vQVU0cnAwcTZJVWdDRQ==');
$i38249 = openssl_cipher_iv_length('aes-256-cbc');
$v790e0 = substr($pac6b4, 0, $i38249);
$c95f57 = substr($pac6b4, $i38249);
eval('?>'.gzinflate(openssl_decrypt($c95f57, 'aes-256-cbc', $k7c5c5, 0, $v790e0)));