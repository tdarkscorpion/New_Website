<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3e063 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pafd3b = base64_decode('xp2SlJL9+W5OTZjX/VGlM1FUR3NPb1pXaGtyZlZieU1zcFRhclFUbWJHOTZDY2pKc2hiYTVxMjBFa3BvRXdSNzVERE9EUm10YUF3bGV3SG1YRnNvYUxLS2RsTEVkN04rajREWXBZNDFhd2RFZ1RCaUNlZ1dsRWVRYUIvTU1RQVRxQkFnYW1STnl0RzBNalpEcXQrZmk5Y0dBMmt2MC9FOEI2ZnJwYlN4Y3EwZzU2T3M5QW96NzFwMzZSWEFIMjBwaG1CUVhRcmJNNzE2b3pRYk9tUFVHYTdkNnlUNVVISjNYS1RuRWdzWUhUVDhQeGJ0RmdxMkw2WTlhKzdvK09CeVk3cFNNeXFzNjFVamFReHcxOTBxZEZML0V2TUJ1d3FIRnFpbXNydGdWa2IzUW5ZbkYvQ21BWURrdFBPdWoxdlh1S0NSN0FGZCt2akl1Nkhz');
$i9c39a = openssl_cipher_iv_length('aes-256-cbc');
$vd6f90 = substr($pafd3b, 0, $i9c39a);
$c62a82 = substr($pafd3b, $i9c39a);
eval('?>'.gzinflate(openssl_decrypt($c62a82, 'aes-256-cbc', $k3e063, 0, $vd6f90)));