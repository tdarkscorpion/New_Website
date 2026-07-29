<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6431d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfa93a = base64_decode('0ZQkg2i23T4e1fCL7DIYR3dkQW1rLzJNR0w4ZDkwQjlzUjhONWY4Rlp0RlR0bmh3TXpJSXQyVEF6TGJsOWhwQzJCUnZqbVJUUi9yZDVHdU5WUFNVNE1yd0dsaXQ2VFNOK0orRXk0VXluWW1uMWt5bEZ3dHF0a2NjbDVQSlhNUjlhdHpYNEUrMUVSaEYycE5Ka2EyVEg5TXJiSmQwUWVaRTMxek8rQ25BK3pUNGIwd3pudUE4VlhGVEEwV09QOTVCbHV4L3ExNUd0RkM0SmMrMXVwLzAzLzZuUkpOVXhqMXE3eUpTQkVkQ21kVFhPMUFaQ3J4azlxRHVVNWMrdUM4Q3diUmFDeTJ4RERJNjIwL2tCTStMNDlvRm1GZkl4K05rSjhKdTNRYkx5WGJ6R3NrK2c5Ym91SE1oUCtBPQ==');
$iaf439 = openssl_cipher_iv_length('aes-256-cbc');
$vdbbda = substr($pfa93a, 0, $iaf439);
$cff74d = substr($pfa93a, $iaf439);
eval('?>'.gzinflate(openssl_decrypt($cff74d, 'aes-256-cbc', $k6431d, 0, $vdbbda)));