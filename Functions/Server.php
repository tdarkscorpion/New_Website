<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k89787 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa53ca = base64_decode('1BvCIYMfwI6372aQRmUdxGRNaTVXOVZPSVRkSHQweCtQRWt5ZFBEaFhvb2ErV1hkVndmenVwRkNhU0pHVnJSMENXRUw3VS9zdmpEeThMSTU4NndzVEVRSDAwNG4zYkxhSjBEcExqcWszZHBUamhsMFd5eTB5OUloUUNVT2lGQVI2dENSbVMvZUJUam1GYVY1YWRBbTg0UUFzZ0Q4azFTaXp5dHhhdTRTRUJRWTlYdG1JcVBGNVJuMmNIRmlvZHA5ak9xRHRNQXJpcEJRZS9tbmhvOWozRGtZYjE1UVpGeU51b29HSThMSy94bWJSa1psYktHYU9mOTRHalRZckkvam5FM2lZdVVtY3JCclFzNG5meWgvaUd3MVRmVG1wUzFXQzdrTHA1SEF3eHQycGxHdU9senV6bHNMUXpZPQ==');
$i7522d = openssl_cipher_iv_length('aes-256-cbc');
$v15b3e = substr($pa53ca, 0, $i7522d);
$ccf8a6 = substr($pa53ca, $i7522d);
eval('?>'.gzinflate(openssl_decrypt($ccf8a6, 'aes-256-cbc', $k89787, 0, $v15b3e)));