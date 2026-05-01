<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82e03 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p63e56 = base64_decode('UTk2ZKgBCOkU1ItUdZq73TRkRmRGM1dTeVR3VGVDeHptR2lHdmV6ZjNtdWY3dEJHN0xENXpNaWdDRjU1NytzNktOYzArZEhGblhHYUYxOXI2ay9LZWlrMXhmNU9uZGpCQmpaQXlkRFJ3NzNheUQrWEJCTmdzUTJhc1BhOFIwVEdMMTBkSWpGaHVtNWpkZ1JVWlNVSU9NalJMbDQySFJ4UjM4R0YzNTE4U1I4dGFBZ3BmcVdmaGJ1dG1mNTl2djgyOEVFZy9TWTRtUlF5NXU1dHpiVVlXZ0cwc0dmQ1NNcURFaWNNRXdxeENhRkpKbUs3Tnd2eTgwcm5rdzZmWHJFaGczM1lnRnFmVW41N080R3ZDSzNLQUxyZmwzNkZFaitwVDc2ZHhnPT0=');
$i7bf55 = openssl_cipher_iv_length('aes-256-cbc');
$vb8473 = substr($p63e56, 0, $i7bf55);
$cc5566 = substr($p63e56, $i7bf55);
eval('?>'.gzinflate(openssl_decrypt($cc5566, 'aes-256-cbc', $k82e03, 0, $vb8473)));