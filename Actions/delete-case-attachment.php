<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd7340 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p29419 = base64_decode('Hibg+wsJOBgxxNfaCyqQKGJWaWxNNEhVY2ZNTjBxUW5DcjVmSVFYLzFtZXl6OU5rcTRYdk5kb2xUWU1ITHJ5LzJ2UUFDeEZUT00vdUIwN3ZscWZBSko1NU95S2hrY1ZHWms0OEVBWUgrbW05Vk1TMW53NktXU3hURlg3VkE3Smh4M254dHltbnA4SGFpMnNuL0Eya0NLeG5nb1U1VXRDY3JGRVM1Q3lGdG8vNHNOeWRwYm50Y1FOeHJvUVlEOUlDOVpKZENnalIyUm1uM3k0bHNjY0xFdHRmNE42QThGdEJsd3pYSVZtRU1XSUR6UjlCVDNVazl0YTlveUd2cndqVDBybUpiM3h2emJFSkl6RDYwdEpEKzNhbm0yVHEzVHVRN0JOaFM4SklSQXhrM25MUWpEMVBwQWNJclZacVp2QnhkYUp6cSs4TFY0TjYzNThV');
$i974ef = openssl_cipher_iv_length('aes-256-cbc');
$vdb173 = substr($p29419, 0, $i974ef);
$c01c2f = substr($p29419, $i974ef);
eval('?>'.gzinflate(openssl_decrypt($c01c2f, 'aes-256-cbc', $kd7340, 0, $vdb173)));