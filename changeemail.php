<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6d9ce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa2b7e = base64_decode('oCZLY50xZuwBcH6mcr9FpExSZ3R3cUhFZk43aTBGWVFJUHJxb21yUzY3akZtZ2UzL2hPeWZxbHllMWFEbGRrNFRjVUdWT21TVGJreE85MmdPejllMmQxc05tY3lrT3ZsU0wwRCtsZUtFWHlaUGpoL056cjBvYlFETmJoeHZ3L0JrNlNkL3crT1laajJWWHpHc3QrZ0doZUdXeGlwQjhibnFFeWREUitYd3Y4S1kwR2V6dUdHQVFnYjNjeVlkQ29NNUdhcVR3aDd6UDZCRVMrb0prdU5ha3BOTGVnSnVzUWZ6T1NENXpsODRQWG1oUEdUaytIRkFMeVZLUHc0NXV6Qlk5Mno3OEUyOFI3UEFRbHRQeGJlSWk5dGdSdUsxbHd6ZTk5dW56VnVzV1orOGgzb1RxRGJwTDhZdkxOSC8xaVFLYU9FaENyZ3AvdXNuQlF2WUQ4RTFuUkZySDNJRlRWNE1kek5Xdz09');
$ib4f9a = openssl_cipher_iv_length('aes-256-cbc');
$ve735f = substr($pa2b7e, 0, $ib4f9a);
$c6be4b = substr($pa2b7e, $ib4f9a);
eval('?>'.gzinflate(openssl_decrypt($c6be4b, 'aes-256-cbc', $k6d9ce, 0, $ve735f)));