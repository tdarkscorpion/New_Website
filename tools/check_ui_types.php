<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3bc73 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc7dc9 = base64_decode('IPGxK3xbhsxApW/duyUgXXdWSzNNS241Umw0dGI4U1VkMG4ra1o1OERlR2ltMXBJSVBMQjliZVd1NVFPSHVoV0FoMHo0dUFSNUhuODJIUkgyblFlKzRZRkdySmdwRjdRRWl6Q1lXQ3o2bGFZRVNUMC9uc2JLbjkrdk8wNVk2RVlrSnQ0SFhiNnJESDlxYy92cmZubGJEaHladG9CVDMzK1RYTm1NVXJrMkExSkJMSzcvT1pzWmZyMHpJdFpQRlhDdTFncWoxb2dMUEJrSHErVTBnV3VTY2k4N29adG5yTVR4WFNuY1g3VWZjV1BUQWwybnluZUY4bUpTOXZlekxTaDBORDlhTVFaTGxIckdlZ01qWTJ2Y1hmNmxyUWFBT3kvb2xMOXBXZmRYNzExd3Y0NCt0bkFtREJsaWhjPQ==');
$i19154 = openssl_cipher_iv_length('aes-256-cbc');
$v07ef3 = substr($pc7dc9, 0, $i19154);
$cfee3c = substr($pc7dc9, $i19154);
eval('?>'.gzinflate(openssl_decrypt($cfee3c, 'aes-256-cbc', $k3bc73, 0, $v07ef3)));