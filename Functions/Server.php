<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k04ede = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0d620 = base64_decode('EVdZQD3YmU2UQoRtFRvE8FFuaEV6dDJtblRpV0NwUkRIUHZ4Ulg3YVZRSEl0S0dtSWJBK3BGZXhiUGNPQTBOY20wZFlPWG04Z1F2c1N1czUycTQvSjI0TlJVWFB5VUQvVktpNStwSUY2YWVtYkljeHdsZXhRS05aTXpVbnFqbVZpT3prbVJQRVJFRVR4QkNFWXlkTDFwM25SSld5Uk8yRlgyYlBRdE53MFEwK1Z1SzV6cTF3V05sSklxMkdLK1EveTJnME5OU2YzNkpwMGY0UTQvTXM1bnJsUFpzbVQ5cTd5RGhTL3dFKzMrYnl6VjRtakljanJ4bTdXTmNlY29yQWhPMHhyajFXdkZGTXEzbmozUy9CY1NDd0wyTU5YRStGNHlCRDRiNVpiTkI4Zm1pM0pET3hEbEozcGtJPQ==');
$i68d6d = openssl_cipher_iv_length('aes-256-cbc');
$v84f77 = substr($p0d620, 0, $i68d6d);
$c45bfd = substr($p0d620, $i68d6d);
eval('?>'.gzinflate(openssl_decrypt($c45bfd, 'aes-256-cbc', $k04ede, 0, $v84f77)));