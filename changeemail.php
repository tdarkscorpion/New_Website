<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3a60f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pee0a9 = base64_decode('kWhZhixlgSqQsKftfrKWim94VlY2bi9aRmVNZm1GL0VDWUJnU0dML0Foc3p5dWNnWU1kazlKVHVNc0JLWGtVdVVvUzkrbWNZem0yVkNSTzZhemFoQXptbWU1THJnbDNKQVBlNVBybk12aFVPZzg3T0lIc2FQZVpvWFBPaFdsRHNZUnYrZ3hWMERKQUVnblFvN1RVU010Y0MzLzlyM0JXWlhRMDRJN2sycm03Y3kyZk4vQTMwNEVMZm9Venk4S2ptYjdqNW9nTUJBN0luUDZvRW43WUFaYnpVVERnUENCSEVhNGtnSVdMRmtQb0YwS1c4YmJ1eU1USFEvdTVXWHFHYjBpNWo2N1lpOEtVUDFHVUJ3SkFGU0NFejZBRTJrbjRKVlJNUjE1eXBRRURwVkxJREhlZzQrNTY5NTlzZGtwUWZOWC95VnliYXBWSzFnMFdmZjRCNUg5endFMVpaR1Rxd1c2cGwyQT09');
$i58ca4 = openssl_cipher_iv_length('aes-256-cbc');
$v76bf7 = substr($pee0a9, 0, $i58ca4);
$ca29d9 = substr($pee0a9, $i58ca4);
eval('?>'.gzinflate(openssl_decrypt($ca29d9, 'aes-256-cbc', $k3a60f, 0, $v76bf7)));