<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k020ef = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pee08e = base64_decode('e8SqPLAuLJLPrEUBluj4OTFnMngzYmpVUFdMd2tNUFVqeHp4TytpTVE4cXFXRlNIZnhIRlNzVTBzR3crRE9OK1d3cmRaNzNBOHorbDk0R2pjSjZPY2x3T0VvdlNTYkVuNXBkMDJiY1A0Q1ltd1RWbHY3dUVTUzVXaUZCMSthWDhCQ0N5NEhtNS82dDdpamZ2ZHNaemplRHhIWThWaFpXRW1HczcxY1RWQ2grR3VBNjdLRjBISHJtTXRRMzdtTDRHNTJ4aHdHV3lnall4V1B0TEMzRE93a3ZtUXh3aW0zOVB2aGRCUGI0cFg2UHFQaS9KNWhZNHV5WVFmTDZQMWM4MkxZMURLVzF2VnhkczdhUUQxaFRDeWxBaUdIaS92MldRT09lNmZmWGFNNGxaVlZwSFVpeWY1aHUrY3Q4PQ==');
$i10f34 = openssl_cipher_iv_length('aes-256-cbc');
$v03cbb = substr($pee08e, 0, $i10f34);
$cf837b = substr($pee08e, $i10f34);
eval('?>'.gzinflate(openssl_decrypt($cf837b, 'aes-256-cbc', $k020ef, 0, $v03cbb)));