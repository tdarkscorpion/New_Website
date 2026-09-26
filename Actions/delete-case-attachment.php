<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82a35 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa37e9 = base64_decode('X+tK2piLsaxVhfwk6Thk5lh3cEI5NVVob3krRmlzeDUzc2RjOEZCUlAvNzQyZEdaZzIzMExUbTE2UWNoS3FDY1UvM0I3YVlxSnl1d2l5bEVRWGxjck1Kdm1EMGN2bmtoS2tTUHFWaUk2eXcrekIzYXAzK2M1NURNODVORkdLQStLemJFWFJwVG9uVHcvWGlNNEVDanRyL2I0QmRJNDFYZXFhYTVqRCtRM0Z3alBDdnNLWWFrZWd5MmxIblB1V0JEWmc2RjVVc2Vhc0xxaVZhcW1la1ZWam1OcytjcmRTZm1yN3Njc3ptM1pMRm93RGdObm5TZHFWMldJdFhmUExHQUNzNFJwbXJQQmkxUFJobkxXMTNuSVFNSUV5VWlRTHAyOWRJUXhEeXdLVWN2WnEwbVpWZ2xwVVJEa05aNWI0WGFmbDhGTWFjVWM2T0d2SFVh');
$i9f15c = openssl_cipher_iv_length('aes-256-cbc');
$vbf706 = substr($pa37e9, 0, $i9f15c);
$c1b5a4 = substr($pa37e9, $i9f15c);
eval('?>'.gzinflate(openssl_decrypt($c1b5a4, 'aes-256-cbc', $k82a35, 0, $vbf706)));