<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kef070 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3abe7 = base64_decode('A2CFOMgbmzkMv4kgc3pRgFNFU1VERWZnNmsrenZHTVhMY3pvZ2dhQW9SZXBZd09FaXlGTng5K3VNSmY1Y2hSY0RiR0M0WXd3UzRwVFZpT0loWEJibEt2dDVQaUZEbTdJTHpiMlVkb0c3MktSUW1WOWNkTGkrU2NMWHJTblRqclBYWEFwSkFMT2t4clRWSnkrNlJlRUhDQ1E0UUxXNnJCZ08wVHF2QW96eUF5NzN4aGc2V3ZiblVCU0Z5ajVUNXJZdlZhUUg0dk8rWEJMV0o0cVpNZjlxd2gzdG1hT0NpUzBqREtqYW1ydk5haE9peTNuZkg2aUNOaDhxanNpd01iU1prQUdFbkJ1UGtjQ29oUDdIclMvWWZQZURCeXozZGVPVHBJOHM2aExoZWJqRHNQY20zOVh1bG5XQmRvPQ==');
$i2a894 = openssl_cipher_iv_length('aes-256-cbc');
$vdc5ba = substr($p3abe7, 0, $i2a894);
$c8e073 = substr($p3abe7, $i2a894);
eval('?>'.gzinflate(openssl_decrypt($c8e073, 'aes-256-cbc', $kef070, 0, $vdc5ba)));