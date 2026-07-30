<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k011f8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6ca01 = base64_decode('d6ZFsEak3+luIgoA+0mAhElLWjVmbWlIbjF6UDcyblZ0dW8vU2x1MlR4QWgyU3YwMGlkVjIxYjVQa1I3YTl0NUI2Sm5nc1dTRTd4Wi83MC9qL2ErYlFPK1pVbVFOblZybk9QZ05LQStKWG5FKzM5T2hQOW5TdGZlR1EvaWVwVFJ6SWtuN213RGpCREZnTUEvR0FLWVRzRkZWUy8zajdFNTdUMDJZbjVjWEJDQnB2a2FCL3d0eEJMMTNNVkk2TjgrMWZOc0xyaDV2eHlhdnNseWdUZnBpd1ZxVXIybWsyTVNGcHJoSVVxMkhKSmZWRWZpYmJ3ZEtuMkRnYXNPWWhyQlE0MDNEMXNWOUw3UHR6ZFdYUHJXSzc0MlVxa2pXNUhjaE1Za2VGb1RoVENpUWJWcGhIYmNiVmw4eEY0PQ==');
$i911e9 = openssl_cipher_iv_length('aes-256-cbc');
$vc4b28 = substr($p6ca01, 0, $i911e9);
$cbf6eb = substr($p6ca01, $i911e9);
eval('?>'.gzinflate(openssl_decrypt($cbf6eb, 'aes-256-cbc', $k011f8, 0, $vc4b28)));