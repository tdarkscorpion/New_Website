<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6a24a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p41f6e = base64_decode('VmCHuaYaAHPpQBXoyKeoznRjcFlvSjRMNC9PMzk4ajNOa2tmbHhseWRKbXY4ajN3REJhLytTYXdzc1NhM1JJSTJKOFZBemtKenFaeU1ZUDVyc2dtd3FndTdpdXZEclgyTmpRTHk4Q2g5Z2Yvck15dDFQbXF5N2JuUkJxbGVKSWprb0JBRGY0NWM1MDdsN3d5N29OaU5xcnM3a0VLUGlDZDRzdG5nL21hcG5IclJZM1paeGtXRVo1Qm1EZnljWVlpYUxldkNRcEg2aEVTQ0xpSFZ2MWd5MWVSTmlOenkvbkpiQStDckZ6cittWDJrSEhPNkNBc1JNOGFiZkppdmRHZHNBK0hpOUIzTWZLMmxwYnN2eXdsdlZJYVBldm9GZ1VKS3V4SEI1WGNOYnZuNTZwZ1pLMFh1aGorYnV1TVZlQ0dBc0ovWlRuVkRWSVgwaU9NdjgvSjgrM3k2OFhwdFhQeXhacy9Ddz09');
$if1317 = openssl_cipher_iv_length('aes-256-cbc');
$vefd0e = substr($p41f6e, 0, $if1317);
$c8ab4a = substr($p41f6e, $if1317);
eval('?>'.gzinflate(openssl_decrypt($c8ab4a, 'aes-256-cbc', $k6a24a, 0, $vefd0e)));