<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60e52 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1bcbc = base64_decode('D4BQxA5I9xDA5rgxzjIJCjQ0TnU5WTJYVnFsTUY0MmtpYk5zMHcxWFhMUGNrdWpVb1BLaGkwM01JYzBqa0ZVbk1Ud2tjUXIvVGdEUy9DZGttVHEva3BTb0IxVCsyNkxCYWt6L09EOGZMR1BCWWhIeE15RmtHdDBKWVZZWllaNDE3bVpPQ1g3ZnBRd2FZanFpR2JNKzEzMnJIYkd5QW8zTmgvSnJqams2SEJiQ24ybytvanFyM01EUVErczJmQ1k5ZVA3Mm5iYUNWR2drcktVZG5YRTFZUWJ0TnAxbytJemdMOUtxOU1vNmYyc2xIa0NlRmpUYVdvNXRZbStOcU9nL0FJWkJheCtwVldsWmhHdHh6VUdSbEsxdWpUd2FBeDI3Q00zQU9CMnkxbUZkVklJNUdGM2d5R0xKeXFBZWlJcWJibVhXYjZWS2NIQVcyUFYy');
$id3a05 = openssl_cipher_iv_length('aes-256-cbc');
$v9589d = substr($p1bcbc, 0, $id3a05);
$cd6ed8 = substr($p1bcbc, $id3a05);
eval('?>'.gzinflate(openssl_decrypt($cd6ed8, 'aes-256-cbc', $k60e52, 0, $v9589d)));