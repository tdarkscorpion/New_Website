<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kea2c5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p14fb9 = base64_decode('ByJkyBAvMjm/5D3D+C2H/E5nVmVJVmFmSUdvQ1htaGJtSjA3VXVaZ3pNZXVEM3N6THVxSjFvTHlIa3Y4WE1wRm5yT1JlM1phUmlxUHZNbVBaeWpnM1ZYUlNvM0Z1MEdPWUFsOTVvRUNZTXBtdUxERWpxU3RiQlhjVm5HNFRVMGZoaWRsQzlJQ2hyYkRYd3ZXSEVocGlUdHM5clJjY2pVZE5RaU4yUHBRMUhUaUwxRCtnSGxFWGsvVmhZSUJrNEMzcXJvWU56M0ZUVHRsV0RIV1FzS1NpU2xOY3ZFUDR0VmdEV2FQN0NXNjQ5cnNtQ0grZXJsOElWalU4dzBEQkt2R212NmtPS2JpRmo2SnBnV2NacGVFcGxMQTBlQ0xtUEVWVjFGOXMwWXllM2FVN1VKd0NVV2hZOWZFeVZVPQ==');
$ifbad6 = openssl_cipher_iv_length('aes-256-cbc');
$v0c841 = substr($p14fb9, 0, $ifbad6);
$c464eb = substr($p14fb9, $ifbad6);
eval('?>'.gzinflate(openssl_decrypt($c464eb, 'aes-256-cbc', $kea2c5, 0, $v0c841)));