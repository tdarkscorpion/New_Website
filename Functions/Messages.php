<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k01049 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p895fa = base64_decode('Uuj99mcQmHuU+oUJCznW8HhwQzhIbFUwZ0V6bFY3QmIyOHRQUnFHY1MxRTlzWXcvL21EakZCejgyYmlwVWR2ODVpc2EvM3FCaE5FUEVRaCtZYnYzR0J1bGV1SE1Zb1hVWWRxejNmT29tUWVOWGJmdnNudDE1SU1aZlAwZlJJaUFmZE1PYnZFbDZuaUwzb1htdUp2d1JwdWdTQXlFaVRiR21DZlRxb1BaWXlDaFRFNG1Ra25MbjFQeW14UDc0anFYS096Z1JKdm9kUmRFcmRwU0daNFlWSjlZTnJqKzFBR3M5NGFrSEduVnY4dnIzcHphbkd2U3FyUjRod0lFem1sOElYYUFnT3lBSDgwSlVRenMyVjIyb0Q3TlF0d21XbGl0MVZ5UEVMNDdMTmFSM0lFN25LOGgyZkU4a0RjPQ==');
$ica147 = openssl_cipher_iv_length('aes-256-cbc');
$v4a5f5 = substr($p895fa, 0, $ica147);
$cd42c2 = substr($p895fa, $ica147);
eval('?>'.gzinflate(openssl_decrypt($cd42c2, 'aes-256-cbc', $k01049, 0, $v4a5f5)));