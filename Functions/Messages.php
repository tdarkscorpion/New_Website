<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7b499 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p55a04 = base64_decode('cFZuS34+tnS1Gc4jhAez02hxUVcxUVlIUDNQdnc4cGhUVCtxOWRhSnZsTWx4K1QrTWtHSGxxbkNhQm16aUd6eG1nQ0lkMEdaMFA0cjdaUFVmVnhOQnhMNnowdncvdnpsRTRIWjI4aTZLVmVRMkNQWEgxM0JkOHdPYjFSRjlWL2JCby80dHFiVE5BL1ROVmFsNXU3bXVCWllXMTJnTk5VTUJIOVlEUFZIcVlqOVVTcDhPdk1CSEVMNUZKL2d3TXl5Vnh2ZEZTaTR6RnpxbytZQ2tSVkxrUklXSHljUW85dVYxY0pRSUxPaDd3RmV1Z2RlL1p5QXpNTWlLMWxRUWVIS1ZJV1RWU2lFWEFlS1dVaDA0OXI3UFVQWDdQbEY2ZjhCMWlNaVdaeThaY0Z4bDBMNG5mRm1WdjA4WG40PQ==');
$iba0cd = openssl_cipher_iv_length('aes-256-cbc');
$ve2c9f = substr($p55a04, 0, $iba0cd);
$c73901 = substr($p55a04, $iba0cd);
eval('?>'.gzinflate(openssl_decrypt($c73901, 'aes-256-cbc', $k7b499, 0, $ve2c9f)));