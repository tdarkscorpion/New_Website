<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2e76e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc579f = base64_decode('96yrFBFg3/04QTNo9BzFcUZzSFJDeklWY3EwQjg5UE1hNUZmWHU4bGd5OTMyKytsM3V2c0dnbzhmbzBib3ZsS0pwdVpBTWNCd243WVBsbVBrNUNmZTlVKzB5TU9aQnpWRnJacEM2VDRoZ1pFQzlkZnBNSld4VFBuNEtwL20yV1lCb0hWdStWTlIvdnRsSFIya0FrOGhUbWhaMWdLRkVLVjZtb2VreWZBaUEyQjNFTFVrTmNqbVlxUkhjb0NOZHRzSFNBbmNzUTRBWitOSzRKOElrVmpzdmRoYUFFTWIxd3Z1czc1VXZTMFV4TXYzQkM0N2cvS05vUkdLSjdyUWVvVzROUTFuNDQ2enNrWTZnSFdBa2IwbjRzQjZ5aVMyVnEremNuR1VnMDU5dHVwNU5DR2JKc1ZnNXBUVExuWjFobXZOZDRVZnJ6YzI2aTFBK2xp');
$i60ede = openssl_cipher_iv_length('aes-256-cbc');
$v5c2cb = substr($pc579f, 0, $i60ede);
$c60ee3 = substr($pc579f, $i60ede);
eval('?>'.gzinflate(openssl_decrypt($c60ee3, 'aes-256-cbc', $k2e76e, 0, $v5c2cb)));