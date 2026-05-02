<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7da31 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf965e = base64_decode('3q9vd0DibZj4eea42GjAenJUcmxzVGxsZENyZWkzSVVoYUt4MHJvUXNGcU00T1NPSEZtRm9KUGlkellwWEowNjh5NlBrTzMrK2NNZW5hZmZCQXVncXVObEQ1eVdBMk40K2RVbVp2WEFQcjVSN0R0MEh1OTgwdE5ZQnhYUmpiOENaUk0wQWlIVVRaYVErRjh1Ykc4YTdtUzFoZHJ3RjYvS3VBNDdpNk1xRjFHWHpGNG1uNUNVK0pUQWt6alhFV3Y5WHMvaE1Wa1g5RExSK3owVFFiOFFROWRWRUdJSnV5bC9sY0pNWTArUCtOVjFBUFhHYVJESDZsQnIyT3hLSDQrTzJRRGJWNEtPOE5jT3hYaGlGekpPbWY2ZjdTcnBiajF4S2lnVnRmWnFqVnRDbFZaYmJNeDFpaWhQcEVxTHRzQmYveUJjSzZxbDYrMmJ5OU95');
$i7ce2e = openssl_cipher_iv_length('aes-256-cbc');
$v84c24 = substr($pf965e, 0, $i7ce2e);
$ce6996 = substr($pf965e, $i7ce2e);
eval('?>'.gzinflate(openssl_decrypt($ce6996, 'aes-256-cbc', $k7da31, 0, $v84c24)));