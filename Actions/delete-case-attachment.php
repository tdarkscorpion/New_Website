<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd8c3a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb4e0e = base64_decode('2ThtdG8wb/JMKy8R3g0hdFA3Vlh6ZFU4MGxPRnFIa1JteVNRTnRxbENRNndYb000RDJZenFUUm5ub0U3ck1FYmtXeEVFTG5oYjZlZVI1MjZCYVluRzFXQXB5WGw3dkprb3duTzBKZDFXNXgwb1R2NEFIL3ZSWFVXSEJPaXVKOURqNnpCaTd4cS8vZnAxSU4wRjQvdDBhNm95dElFdXRCV2o2Qkd1RU5KWW4wbjkxVVBqUC81RzRJdWlyeG5TUXdVZ2E5a3dMU1lxWnNSd3FSZTB4VUxjemxUcFlLaThzei83dms4SlFPaWs0aE5YcGtvOWxrcDNOWFlrQjh5NTc1NllEM2xod0djaERrdVBtUWxjT3NkVzV5SWwrR3RZWHEvbHgvdE1ONmppelRVYWJwYmRTeFE0ZWtwYzVCVUo5b0JyNDJDeWttdUVHTnVwRUdp');
$i8728b = openssl_cipher_iv_length('aes-256-cbc');
$vc2438 = substr($pb4e0e, 0, $i8728b);
$cbbf23 = substr($pb4e0e, $i8728b);
eval('?>'.gzinflate(openssl_decrypt($cbbf23, 'aes-256-cbc', $kd8c3a, 0, $vc2438)));