<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k481b1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf7f15 = base64_decode('8ZiMD6kBomxkJ3lGi1MotVljNzhqR3l2MjN4MVZuQldPR2NyQ0NPV0pVMFFTa2s2cEdPcjFiVDFRTTUzNEpqaXBwTDF1ZFF0eDhOZzdMcVRqSGJvdXpnRW0rdTVFVkFGZ2VhbzBRUjJvWEFJcDltMHBSZ3g3dTFOUWZZbHNXbWpjcjl4MWgyaXdGWHIraGNyV1RoeStYS1IwWFpqdGNoT2dUNDBmcG1WSlhudDZQeGphc2sxeXZGZHE2ZXBBQ0NkWWRycGZYaUdnOHJiYVRXak9jaWlwK3B1OTkrbG5DeFlYSnU2YmhFaTlVTTFCcXBUVVhlRmVLVDVNaUptZ3lLYm0vWWNCQlpLOWtMdHcvYlZjWmZoQ0l3L1F2Z1JXY0FFclR6RVE0SUgvUVRYQ2JoYXVJQVBJaXVkaVBFPQ==');
$i87866 = openssl_cipher_iv_length('aes-256-cbc');
$vbab02 = substr($pf7f15, 0, $i87866);
$c3717c = substr($pf7f15, $i87866);
eval('?>'.gzinflate(openssl_decrypt($c3717c, 'aes-256-cbc', $k481b1, 0, $vbab02)));