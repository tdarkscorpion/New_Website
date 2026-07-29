<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k633bf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$peff8d = base64_decode('HTxIcZkOcRnM6mnhhMFHn0c1dEhRRHJiQVhabCtXS1hiWjB0ejJFa2lsM25objN4dWU4TEJyTC85LzFGeXh1Rkt6TjI4aU1CR0tWM2ZBV1JZNjBCL0pOSUNCTXFOUFdIQ1R4S0lCME0rSVA0dHBSUGRWaEdXMXpEY21JOEprTlJmdHBJU0lhMzBwSE85QVo3RzZld1I1UXhYT0luS0lkSVovcVBCSXBKaG5aUEs3L1hVbGFrY3VZSWRCRy8wNWx4eUZxZVhISDZyV2R3dEdZS1hsTVFES3NYNDN2UWZvd0YrTEZsQlBvWE5vVEZoRXl4bXBPUERycHB4bUpqVnZ4WU40ak5UdGxNL3h5TEZwREowQjc2Nmh3dTFTUG9aWWZER0VZM0xHMENIWWdoZmFqZmhZdUh1TDR4TjdvNm1TcGd1bkwxaWpLdHhGM095bEpPYzcxV1kvQ1dBUzBXUDF5L1V1eVA2QT09');
$iffdf9 = openssl_cipher_iv_length('aes-256-cbc');
$vc0ca9 = substr($peff8d, 0, $iffdf9);
$c40da3 = substr($peff8d, $iffdf9);
eval('?>'.gzinflate(openssl_decrypt($c40da3, 'aes-256-cbc', $k633bf, 0, $vc0ca9)));