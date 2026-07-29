<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k99529 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p73d80 = base64_decode('+XM6qb/ykMwq/w2Okav5sVRPZXNQZEtoeGRpUHFHUTJPbVhYTlZMSnlkTk9Na21DbHozSlBkaGtEdGFBajZLNzUvWVBmNU94UllZNlN0TTI0WFBCUnlqb3dCcmdYeVdDcDFLVURqOVBmcVM2T0dBcTZiT0NYNXpGOGpObXNrYS9NcnpFZzFmR2RnYW5EOXU5bDIwSEk2Q1RTNFptYWZFbUk4Mi9RSnJZY2tIcHFXL3lJQTExb3A1ZkV3Tnd1TkhXQ21rMG9sdEpuSmorektZMExFdDl1TDlVK1ZsQVNaU3lvZzNITi9qQno1MUQ5Ung4T2hTVVdvTUpaSkVlaUJ4blFFdHdid1ZUY29qMVNSdnQ=');
$ib7422 = openssl_cipher_iv_length('aes-256-cbc');
$v61ccf = substr($p73d80, 0, $ib7422);
$cabf73 = substr($p73d80, $ib7422);
eval('?>'.gzinflate(openssl_decrypt($cabf73, 'aes-256-cbc', $k99529, 0, $v61ccf)));