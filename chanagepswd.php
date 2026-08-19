<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1a6fb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdbe2c = base64_decode('S8CM+QXuc6OH4qRNLyG8vzZKVTRtNDh3UzUva3pId2xSb3B2MzlvcHBKbitKMWo1LytZOTBIRzVBS1ZycThIWndYQ3lybXZNYXJTUEdYOUlpeHIraDNKTWlLeVRiNGkxbWpncTN0L1luUTNZK3lLb3h6L1N2RmtxbmkrcTM3eU1mS0RKaW5LQXVPY0Vmbk1JN0lzTWkzbVliTzRDeTNDZ0phb0Vybis4R1RQZGdZTCt2MzNKbWxUL1hyRTJGVGhEeHdXNFFIcnJRdG4wc3lEMDMzRVFDektOMUEzQ0xRekNMUkdNUnI3NlpWdk10TzZXV3VUSk1CNDF0ZDViUkhxNDdSOFkyMU9mUmw1c25tMzY0anVhN0JxME1HUkowRkRDK2pyMUs3RUhQeWRHcmo3cXFUT1ZSaFM4WEVmOFlYQmlzL1hyNVRFaUZJQ3NtanlrcnVuL056MDNrVEFINzNnRmVQTW53dz09');
$id86c7 = openssl_cipher_iv_length('aes-256-cbc');
$v76766 = substr($pdbe2c, 0, $id86c7);
$c4fbf8 = substr($pdbe2c, $id86c7);
eval('?>'.gzinflate(openssl_decrypt($c4fbf8, 'aes-256-cbc', $k1a6fb, 0, $v76766)));