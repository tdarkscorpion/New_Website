<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke381e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p457e4 = base64_decode('V8JPAwHUlxisgWTeYrxTMXZSdFNPRE11UGdIRUZXdGxGN1ZRS0I5TFhnT3VzVDI0VXljRVBGZkdnR2lXU3JSS3AyNHhRTjZycVk2SWlQNVdCNUFGM0d5WExQTXZhZ1Nsbnh6Z201T0RGMWNBTzhWOHQ1ckVvTHZha2tTL2RQSE9QWExaV2tZVG1XdWpueHVpeHBvODF3NEg4MENyb3BSV2NvWllEM21kQmVzSUN2WThRaWR0NGpwS1MxY2kvMy92TW9QclZ0cmN6MkovYzBvOGgwaUlqdkR2ZlBReExONGJpSG91anh4RVhWVkN5Qmx6a0RUeUlrcW1rWFNNcmlmQ1JEbEJUaWV5WHJEb0pjdHM=');
$i40e10 = openssl_cipher_iv_length('aes-256-cbc');
$v78b34 = substr($p457e4, 0, $i40e10);
$c789ef = substr($p457e4, $i40e10);
eval('?>'.gzinflate(openssl_decrypt($c789ef, 'aes-256-cbc', $ke381e, 0, $v78b34)));