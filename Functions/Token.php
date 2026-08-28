<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k66a3b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4bf0 = base64_decode('aDlbS3Wrqk3tltxvmgdo51VOVkIza2JwNnRjK09nSUptbmxzTnZZRm1xTDF4UFVKb0pLZHFCM3VlbUphMTRkeXdiODE2dGVhc0p5dmxrSE8xLzVsTm1mQmNlSVFDWDRWYmwwYUdWMGkxaTlXWlMxSlpWa09LVDlyeXNKMGVoeFdkaFljNlp1QWFyb01QVTN3cExQRVlMVitVbFg1eGJQVnRBTEZuMFluOHdMdldSZEVxVHJJOFFoeVAwalpNaUVza2piSzVhRkp0a1ZMUEdTd0xPdWI1dDM0NWkrY0VwSU5UZFg0Y3hUdFlvS0JKV0ZtT2NGVERFTllpWE81d1NYL25VN01ETUtodzg4SVVlNFg=');
$i213b8 = openssl_cipher_iv_length('aes-256-cbc');
$v61bfc = substr($pa4bf0, 0, $i213b8);
$ce96b9 = substr($pa4bf0, $i213b8);
eval('?>'.gzinflate(openssl_decrypt($ce96b9, 'aes-256-cbc', $k66a3b, 0, $v61bfc)));