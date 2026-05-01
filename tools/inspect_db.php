<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6fc31 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p87299 = base64_decode('7B5ZdnP69JmBdXvYZukUI002Ukh6V2pBSi91VU5UYTZJcEE4bVYxRkx6Y1MzSFNTK2NWVThLVEMzcnhDdEthM2F3OXU4Unh3dUl6c3duQWVVZmNyMTVNdG9paWZWMjJCajlkTy90akhhRkhEMXk5YjhSOXdkckczSUVsZjNYUG5CeUY1YkREb2xJRklyNXRMdzVyR2kzTDhtcjMzUjdqSldMbEpCdlNEdmJMSExyZGk2cFgvWGZHWDJPbm1GTmt6OXFMbVVSR1JsRGJDekRqUDhUeTg4VmIzdXpGbmIxY1drZE1yN0E9PQ==');
$ib67e1 = openssl_cipher_iv_length('aes-256-cbc');
$vd5d97 = substr($p87299, 0, $ib67e1);
$c2d6f9 = substr($p87299, $ib67e1);
eval('?>'.gzinflate(openssl_decrypt($c2d6f9, 'aes-256-cbc', $k6fc31, 0, $vd5d97)));