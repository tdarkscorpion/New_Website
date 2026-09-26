<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kee188 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc580a = base64_decode('kT1qOXeufH3nxTNXoUTLn3NtbktoVEFsL09QMDF0aWxQQ1dwWEJ5WC9qOUtVVnZLL0FxZWhrVnVVZ054SmlrV3ZUQmJoR1E4cVozcXdFWUdoTk4vK3FPdmFtWkZrOE5aa2EwWWFWUWJMWHJ6K1M0ODREK3gxM2pQci9pZXYxNmQ1aTQxUGFXbFVOSnJncU5IWEZYQVBHdTVnSjBDeS9rR01QK0pPT1RTNFNoQnlqT1pxTW9WU04zR2t3ZkdxbjB1SHErOHEyRUptOVVlb3RoSTFybk1QLzNrbDNwbGdMakdRQndCY0IzOHlHbkQ4V3Q3SFIyeEEreDJjamRuQk1wZ3hnLzZhekhtUzdDZHZDT1ppK0o4b0JkSER2WXAwR2pBNkYweDhsTEYva3BqUWE5eUxrdHc4UmhBNWx3PQ==');
$i316f8 = openssl_cipher_iv_length('aes-256-cbc');
$v4374e = substr($pc580a, 0, $i316f8);
$c43465 = substr($pc580a, $i316f8);
eval('?>'.gzinflate(openssl_decrypt($c43465, 'aes-256-cbc', $kee188, 0, $v4374e)));