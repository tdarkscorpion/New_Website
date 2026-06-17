<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8ec0c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5b8fc = base64_decode('oXljNflRIdr9G3LT9WZP4mlXckZDZC9LcHAwZVdMZ2FLUDBVRjNaSzlldzBJb2U5akpoZG9DUzZ5NEQ4T0JVaWhhdHFvWXo5TjM5ME0rc3p2cDZHWDdiYTB2enl1elphYjkvL0E1czM5NFpkZVFnU003ZEQrL2NrN09EWW5iQXdOUFB3Y3cyNWQyaWoyQlQzRE9iaGswQmpUME9YNmg1bTE4UHNpUjZXeG5XZHdzL1RHTDZrSDVNWENieDRtT0IrTXpvU3hwR0xMRTI1Qm5ObTRiMnY5ZDFQTjVOTjhEc1R2RmVDcXc9PQ==');
$i874d7 = openssl_cipher_iv_length('aes-256-cbc');
$v35053 = substr($p5b8fc, 0, $i874d7);
$c03408 = substr($p5b8fc, $i874d7);
eval('?>'.gzinflate(openssl_decrypt($c03408, 'aes-256-cbc', $k8ec0c, 0, $v35053)));