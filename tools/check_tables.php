<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k14442 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc3fd2 = base64_decode('3o3pF0LanLeqVze/uZFfglNuYUd5TmQ0Q0JsMml5eE80bVg4VnlnZThGT3lHSTJmZ0Fxayt6djBtTHZyUFdaNzBuTGp2VVNCeFBRU3FJaUVEOHBDYTVvTFd3ZGRnNDZKUk8weTZ5OVY3MCtmUXdlNkNTdU5keXloTHp0YjFRZWJMK1FuYlRpaU1NN3BPNGd0UUgwWnZLamEzbXBZeE5iMVpiZVlTUGVCR0s2Smp2WU1WT1RLbGNML0ZLU0hBa2JBeDRjKzk3WnBCVzFQcnpPLw==');
$ie0299 = openssl_cipher_iv_length('aes-256-cbc');
$v4068d = substr($pc3fd2, 0, $ie0299);
$c0cffe = substr($pc3fd2, $ie0299);
eval('?>'.gzinflate(openssl_decrypt($c0cffe, 'aes-256-cbc', $k14442, 0, $v4068d)));