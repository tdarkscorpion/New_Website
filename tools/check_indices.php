<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keeec4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p80600 = base64_decode('lWBk7euMYdKJ2ESSHrMpRk11dnd0YnhQdUcyRy95OXo5YjQzQ0ZHSU9Odm5rYlZVdDRTdlhQQjgyTkx3R1FqT1dMdHUwSjhRRm9tYlIwNVhiZmhqWGttNGw0T1RMb3kxSzZ2cjdYT1llVzE1bUp0STZzb05vYUhNMGNSdmdZeUxSOWQ1UkdxRFhteWFiYnBUTFZGTlU5UUJCZ1BJSlZlMEgxcXJLSjlCRG85d1IvUEl0UmpHZXEyYXU2STdqUDJjdEdSOGhuRHlXeDNUaDRhL1YxOUlSUlByY3JZbkdCTWVoQ3JXQjRoek9tZExFbElTcU01aHJONzIvN1FBTVBMZ0xMeFBGTnAzRTh1MGdTVEE=');
$iace99 = openssl_cipher_iv_length('aes-256-cbc');
$vf86f1 = substr($p80600, 0, $iace99);
$cc4da4 = substr($p80600, $iace99);
eval('?>'.gzinflate(openssl_decrypt($cc4da4, 'aes-256-cbc', $keeec4, 0, $vf86f1)));