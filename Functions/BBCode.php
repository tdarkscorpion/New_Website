<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kba4ec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf1bb4 = base64_decode('X53mIlkY4pV08Df061M4DE96T1Q1dHBjSzJDVWVYblhML01hVVhiWUI2cFJ0R1BybFhaczduWXFEd09KSmlvUzZ2YnZRRnJIZUM4cWVVVkorTGJNMnZKY0FXZDc1cjRqSlJPL0xIMmVwR1R1TStLenlKemR3dTFjUHlVOEs3Q1RYcUpVOUc0bUpwWEhxZDBleGg0OG1nL1RkS21rdUNnbjh6MFJFMnlpZkdMcS9xZ2pjeGo3elRXSVVmSlR1dXZCd2t0SEVUcWt4dC9JSGp2U0lmNWVPQkxCdnMxUEQ0QUJLY2Q0K242RG9pTUxISXFJWlU0UHphazBwVEdlUTRoN2ZBbm9mVU5iZmYwSkw3V2szbElXaXRNZitQQnZ4M3NJdUlVaXRWYU9KN1BQRFBGZWdBZ1lNMXVwQmZHa0pvdVBqSE12c3JsZnlyODBoTWFu');
$ie1c6f = openssl_cipher_iv_length('aes-256-cbc');
$vf8cf8 = substr($pf1bb4, 0, $ie1c6f);
$c8ac5f = substr($pf1bb4, $ie1c6f);
eval('?>'.gzinflate(openssl_decrypt($c8ac5f, 'aes-256-cbc', $kba4ec, 0, $vf8cf8)));