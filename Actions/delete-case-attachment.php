<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k46704 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb2132 = base64_decode('8OG4F/rbm2vbLp6dyEq+yEpzMC8ydElYRnhhY2lnZ1lmb0NEOVp2ZXJlZVlnUGMzQlplK0d2NnVrU2syM21qOStYY3BMZ3l0dCtJVk1USk5PeWppZURreGp0cTAwYjZqRmMzaG4rcVB3OVNUd1BacnF6ZVppc1dVdnRpQmR2Mzkzd3NNLzJQU3BIcnBLVVZDVTFGQWZkUDRITmlFRHVGc1FkS2xFajFjRXBpN1NkZmtwcEdiN0ZJNmdGOTFyZkpLakM1UTVtdWlvUjhWRWdOUjhnbWs1NUlxMGwvR0FvdHpHUEpkOGlGSVJ4UkI5Z1RtUGZ6anA4eS9Cd0JzYlZXY2Jxemk5Y0NsaEJFVERzd2t3MmNPdGtZTnpvVGcvN1JoK1NzRjdQblFzUlovWVdkWjdmbXR5RnhDTkc3WDE0MkIzc1pYQmZqdjBWVUlFREdB');
$i89a16 = openssl_cipher_iv_length('aes-256-cbc');
$v72222 = substr($pb2132, 0, $i89a16);
$c991ea = substr($pb2132, $i89a16);
eval('?>'.gzinflate(openssl_decrypt($c991ea, 'aes-256-cbc', $k46704, 0, $v72222)));