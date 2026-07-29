<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k67def = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p748fd = base64_decode('TLpKwwTpRCSo6MjYpGyOcWg3SERHMGJTR3MxZ1NTbkhlNGRZTzlwUDZDZVJMQXpVZksrWmo1VDBBeHdJVVc5NXRPazN2OFZONTRpQm1Yb0swaDlzdjdpMHpEQUFMVFlSbUIrRTVaQWNWSDZmWlZWWlBVdU5EVENDWE1KWnQ0QkUwZUh1dUtFSDdlOHdrcGpWdWM5WlpYaVg3eWhqdE5DelltWHF6S0dDYVZQTGxWcE43akd0ekZnWW41aVRaUmt4UWY0R3gzOHhad1FSVHlDTEh0SWtNeWtra3F2VXk4OElWZytRcjZza2JVdTJwMnp6cFFRVzA0bXRVSDR3UHkvUkN4TWlmVEJIQTc5bFZSSGE=');
$i20928 = openssl_cipher_iv_length('aes-256-cbc');
$vada3c = substr($p748fd, 0, $i20928);
$cf3c50 = substr($p748fd, $i20928);
eval('?>'.gzinflate(openssl_decrypt($cf3c50, 'aes-256-cbc', $k67def, 0, $vada3c)));