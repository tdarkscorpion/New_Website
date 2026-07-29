<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k657c1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0629f = base64_decode('aSZAGeijWRkKSMuDEaitPG9PaVUvd20vR2FtWUxEalZTZVhzWVRvQ3RNb3dDbnJuVmZtbUQ1T0VIUVYyQ21qMWhReE9DdW1jNmVZSVd2dnFSODZjbEtvRWsvMDd6SkdKT3pVZHE5Q0lMRjl1Vmt4N0tXT3BLamR3b2g3RUdUeEVEVzc1c1JuWFVUSG5xYXRTT1AwczZnZGxRSFkxc3FDa3o4NHVLcWQwZ3d5c292Q3FPNHlBMkJuZHpydnhTK1FHbGxsRnM4MjdBbFpmb2JYYThUWkVGRVEzTmk0NTNDWk81QkNvMzNEYWhhR0h2TWVCcENzUnV6ODJ1NTh4NWMrUmFYMjZ0QWpDWXdwQU5hSlo=');
$i7181a = openssl_cipher_iv_length('aes-256-cbc');
$va2144 = substr($p0629f, 0, $i7181a);
$c31202 = substr($p0629f, $i7181a);
eval('?>'.gzinflate(openssl_decrypt($c31202, 'aes-256-cbc', $k657c1, 0, $va2144)));