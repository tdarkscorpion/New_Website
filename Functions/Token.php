<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbf000 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd1e00 = base64_decode('Wsg19Ox7MRHEY+dl6GW081N4OWE2VUhKVFVjK0hvSzdlSnMyOE9BUHhXeVBpVlFFMldmYmZFMC9MU3VrM3ZXMndzMGNBVEx6dTFXZjRaRU1CTDFRMGdRd3VkZXVqTUZNZVF3ckMwVml0cGZTcWl0THBMNUErM1ZUdkkyMS9RbUpxaWxhVjhBbGQvWTlIWWVCQmJ3Ky9xcHgxdUJNdGozbE4wRWd0TzkrNy9CK1lMaDIxbnhreW1vQ0ZZVE5QckErbEJsTmt4bFNwdTZKQkphNzFjRUFOSHkvODY1NDhPcUNNS3NIR20vaGdRSU1VRFovQ3htTG53Ymt6UmZ2Nkk2TUp1dnVCZ3BZOGJ6Njd2b3Y=');
$i8a26e = openssl_cipher_iv_length('aes-256-cbc');
$v7080a = substr($pd1e00, 0, $i8a26e);
$ccf0a0 = substr($pd1e00, $i8a26e);
eval('?>'.gzinflate(openssl_decrypt($ccf0a0, 'aes-256-cbc', $kbf000, 0, $v7080a)));