<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k621b6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$ped95a = base64_decode('3Id9mjODSCUeORbHTWd8OkdJZExmckhoMVhob3RZazZEaGp4dXk1UFBRN3F4enZOaVhPbmFXM0g2TE9QNHY1Z2trazJVMWJMQnpMOGo4emlLUTRoZ2ZuUjhKeHpUUy9teTEzdThMeFNYWnl6WS8wbktLQlpXT1ZBcnBETkQzcC9MeUlwNWZhUGN0K0RJbUh5NGx0RzNYV3NINjFWUXNlSFoycThRN2M3T20xLytxK0Q5UTBZUWRVS3JlR1owbmFyT2QxUjRkTGhmMlVjVTAwQ3RCK1lFN05nMm5oTkc1NjdycVdjZjdZM2liRVYvaWxiV1FoSlZHaTBBNkpoMld1aitVZTFVazN1S1Z2SlB5MnlkbWFhbVJubGloYW1IbEpsby9tYk54ZFVQdzlXRmxoOVZtbUExbW9zd1RScWlVbktUNnlYRFdMT1ZsaFBvdmI2cmNaUEZzOU9pWXZqTFJaYVJJRFFyZz09');
$ief9c2 = openssl_cipher_iv_length('aes-256-cbc');
$v55701 = substr($ped95a, 0, $ief9c2);
$c4927b = substr($ped95a, $ief9c2);
eval('?>'.gzinflate(openssl_decrypt($c4927b, 'aes-256-cbc', $k621b6, 0, $v55701)));