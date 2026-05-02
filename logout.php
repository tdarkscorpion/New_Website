<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7bdd1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4728c = base64_decode('ZSLnacbcrEIBAlp7Lq8hfEVvcUgzdldkN3YrbWo1WVZjemZaT2h4aHdQNTlnc2N0RFBjbkJaL1VsUjRPOTZzeDBuRnVSRzkvVVo5UWV1VmtoekkwcHhzdEdRcDdaYVhLMUlBakkzVTNZdkd1NW5Ybmx1MHZ5bDhwcUlVPQ==');
$ic38ae = openssl_cipher_iv_length('aes-256-cbc');
$v83583 = substr($p4728c, 0, $ic38ae);
$cdc2c1 = substr($p4728c, $ic38ae);
eval('?>'.gzinflate(openssl_decrypt($cdc2c1, 'aes-256-cbc', $k7bdd1, 0, $v83583)));