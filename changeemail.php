<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfbf63 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p749d6 = base64_decode('l9pq/Jc76/Vmv5k5v4tQyDJFQ1ljcVE0WXQxdTRkZUNoaXlXcEFpeE5ZcjdGbUl6eDNEaTlPQzFDdERrcVpuV1gvL3E3VFdiSHoramJVME5NNTVXS1F4ajlKdWRLemZWT2oyVTdNaUtEZTdBRHFZcTVkWVBTWjFEaG14V2M4YkRJOVhlNWQweHJRUlBvREw1dVVKOExzZGZzK0t5UTY0emxFbmFOcmRzcFp4UXJ1bHZFcXZzUFk5b0RzcHFnakVMNFdFVTJxcWg1MEQ4RE1kbEc5SnpNVWovT3MxeXJCQVhhQjBxNFhURmRIaGM0c3lCZzl1eWVhSGRVRm1LcjR0VHVYTGRrNXcwQnFEdm1POHR4eGVWTjM4b0h4YU5lcld4QSt4L2VWQkdMNXQzK1BQSk9kUWdyS3ZnQkYwT3VWK1dtTEpiaExrSDF5OG56UG9ERWVOcVlScHh6b1Y3ZGZLSTFFVGwwQT09');
$if46fa = openssl_cipher_iv_length('aes-256-cbc');
$v36f15 = substr($p749d6, 0, $if46fa);
$c4d17e = substr($p749d6, $if46fa);
eval('?>'.gzinflate(openssl_decrypt($c4d17e, 'aes-256-cbc', $kfbf63, 0, $v36f15)));