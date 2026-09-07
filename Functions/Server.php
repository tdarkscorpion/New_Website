<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3441b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p26ac5 = base64_decode('tKZqt09ntWU6w6zL94EZyFg1NFdSbEJFUkJYMmgrRllCbGwxVVpXSGlseE5UVkduQ0tMY2ZXa2w0MTEwL2xLVjFiMEd0UkwyVEFUZmxQSldEbDJ5TnR0MUNBWlhEdjBCNUdTeE5iRDF1UzlSelNMei9maWN2SytjMnRtcmlMeEo0ak1wTnRWNGFhSzUrMVdyc21Wd3g5bGQvUFAyZXdaVzFKbmNQMVErNStkb3hrZXlibHJwVVphemFNbHJ0NEtOQVdnNTgwMGlxQ2pYTXdBN01VeDkzcHNveTVyVlVaQ3hsc2ZWa2Q3ejhJZ3RmMjdqbGJUUW05ZWJoSFMvOVE1TjFrOWNOK3dPQ2RrdE9Cb0NHbG9YdHRXbnBxWFdhM2lMU1FBWFlJeDcxdU9VbjFhU3R0Q0ZZKzNGMllvPQ==');
$i09b48 = openssl_cipher_iv_length('aes-256-cbc');
$va4e5c = substr($p26ac5, 0, $i09b48);
$cf4e02 = substr($p26ac5, $i09b48);
eval('?>'.gzinflate(openssl_decrypt($cf4e02, 'aes-256-cbc', $k3441b, 0, $va4e5c)));