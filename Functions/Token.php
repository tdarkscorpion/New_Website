<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k97ae8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9c49a = base64_decode('1s2t2HWEjAfh6yNxl0MWhWRZVm4xYnVKN0ZuVHR2Q2RSVEZlUS9ydzNQbUFYU0t4dkkxcmlXS0FheUVYWUJlYmNNay9SS1B5bm02QTBvNTZEajFlMDBBd3dKbjQwdWxZT0tmL054eHJLMFJ1MThTVTFJSVB5N2d3VjhveTFXOFBSWjkwUzJmYUNxa2FIbklxQnBFbHFSYUhFUEFlQSs0VFh2c3hnM3B3Wnc0UGM3eHhnTk4walNCaUNmT2pFaGJUYmd0OTNxWllTUi9rdmNoTmJQdmNETm1EODZHcy9FSW5jVk0wLy9mRDBPdjVJRWpTYlg4a0lRSmJwRHl4L0k0SU9qUTNSa0U0dzdEeEJCU0E=');
$i5ce92 = openssl_cipher_iv_length('aes-256-cbc');
$v258ce = substr($p9c49a, 0, $i5ce92);
$ca4fb2 = substr($p9c49a, $i5ce92);
eval('?>'.gzinflate(openssl_decrypt($ca4fb2, 'aes-256-cbc', $k97ae8, 0, $v258ce)));