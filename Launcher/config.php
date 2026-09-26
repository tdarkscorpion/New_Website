<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke0152 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe1ea4 = base64_decode('KjvyfRSU6pQJUu5XIEucTEVMZ0FOMnFSNzlnY0RnVGYwR0JhcWlIWTBUOUYwNUxRNTRXaWN3TzNJVWxBSy9USnlYellQTFlkUm9sYzVnYklKd25BbWlJZzVLaGFDODM4WkNSY1c5R1pvRDZxVUd2UWZzSDBxbzFqMW9YWUNISHhiKzlPcThZWFpDaDNodU9RcStSU1AwNHIxYWhkbTAvcWhJVStIRFFqakV3MEN2ajUxTjdoYnlUTSsxc3I4dmQxMXlCaHJzdWJaVDJoNDA1NmNFZ0kvbVpmYmNtQkQrdVNyTmx3YkM0QW13ZGlqaTR1YkRidWdCbnlTRlJDWWUrYmJQTDdKQnNQcEd4MFVPLzBsUXRzcGlvZ2FaYllFR1pSTVh4a0ZVbDdkMW5Wbm5KWERKd05OVDN2UU5vPQ==');
$i9330b = openssl_cipher_iv_length('aes-256-cbc');
$vc9ed6 = substr($pe1ea4, 0, $i9330b);
$ceed76 = substr($pe1ea4, $i9330b);
eval('?>'.gzinflate(openssl_decrypt($ceed76, 'aes-256-cbc', $ke0152, 0, $vc9ed6)));