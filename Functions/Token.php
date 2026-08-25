<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb7ca0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p44525 = base64_decode('punqBNQu7TCQlw8fiO/f43RpVnZBODZwTzNQZ201L1lpQU9jWDl2N1JlMWQ0aDBpWlhaWlBObkdkOFVZSk9FbVYyalUrSnBMU01aTmNySzFmOGRNRTFFZVhZVDdXOFBoWmlSV3FBaGtUdldIYzBGTUhIUktYeEdRRHllYTQzTFdKRWFZRG83cVNtcjZLSUJoUWpXeXpzaHZlSnc2K3RMUDkreS9hZDl6OWdXNWlNeFhJUTR2aEZVVmdLN2pYbWlHNG53cTJGUGxadTRPRWRKcmRuUDAxcGZSWElVUGRkcWJqY3NDRmhxVTNOM1FNZ2VmSTl0R3MwUk9oNXpzTVZienE4NzZuVDROQVNVenlMRHo=');
$i97136 = openssl_cipher_iv_length('aes-256-cbc');
$vf4aae = substr($p44525, 0, $i97136);
$cee61c = substr($p44525, $i97136);
eval('?>'.gzinflate(openssl_decrypt($cee61c, 'aes-256-cbc', $kb7ca0, 0, $vf4aae)));