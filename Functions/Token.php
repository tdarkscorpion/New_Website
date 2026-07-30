<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k71d45 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p51d5b = base64_decode('THJK6VslWK8BjCmQseBac2pKcnU3UFo2Z2lmUC8zU0E4KytSQ0RORFpwdFNVajkzR3kwbk9YUTBGWmRqVkt1aEQyMmJpRk9IVHdOMDI2WXhkZVdubC9BRHBtd2FNQXlkUzM5NnZSSlF0NitzbGtTQjV6RFdMNzJsUkhQeXJFejBuRS8ySG1wNWpsYktJY3FZSjJsVUpiWlVlbVhkWFRwYjFkVytmZHY5WkllSHRjMTFFZVYwZVF0T1JJc3JzcHkwaG41Sm9Gb3R3WTRlVnlUdmQ5VHZ2NFpwcUN6emxSeDVLSWxNT1E5aldvVVZxMlFueXcxNTFQOCs0RWhrVXFtcWZxSlg2NHZ3cG1vZlNCMzg=');
$i399e9 = openssl_cipher_iv_length('aes-256-cbc');
$v00d97 = substr($p51d5b, 0, $i399e9);
$c0829a = substr($p51d5b, $i399e9);
eval('?>'.gzinflate(openssl_decrypt($c0829a, 'aes-256-cbc', $k71d45, 0, $v00d97)));