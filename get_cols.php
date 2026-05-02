<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka4637 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf3524 = base64_decode('37ylzfjD26ZQ8DNGT8wQ+0QwUURpN096cWZEV05GSGx2TnNUeWZKdkpzeFpWVFJQdWUzenlFa05wRmhxWFpNMUg4QkZncTNtZ1JrU1RvSlRzS3Y0UzZscUVjakxrcUxNeDB4dzNkeDcyQnVuRm5OUW1naTV0NHkzSE9kL1Q5UHFlcndITGRKTUtNQTFKOTl0NHErZllrRHhoLzFhVENMbWFWZEtOY2xIbTlBQS9YbEpvaHY3MGhqdEp1c3IzYlBhYkVhcC9mZ04zR096TnMyRWFLS25SOEJPa0ZFeEt1MkJhZzFMa1E9PQ==');
$i0fafa = openssl_cipher_iv_length('aes-256-cbc');
$v1a837 = substr($pf3524, 0, $i0fafa);
$c0e7d3 = substr($pf3524, $i0fafa);
eval('?>'.gzinflate(openssl_decrypt($c0e7d3, 'aes-256-cbc', $ka4637, 0, $v1a837)));