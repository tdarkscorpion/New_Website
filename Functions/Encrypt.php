<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kef16c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6f014 = base64_decode('uJY7dGYrxP/MChpN6T9m6UNSeUEwMXZyMVYzQXluOXMzWVFnc0xFeUs4NWtOc2VxMEYxOXJxZ0dSbC9jazM3QnZLaUVHaGg1MTdNZ0FQNnJmS0Z1VzZQUzh3Sjc1QlNJMGc3R2YyeXBUcXRRV2tIUloxNDlmdzcrYllnc1QwN05nWmhRNnYybFY5T24yWWVyN0dtK3R0dVZkTzFyTEdLellLQjRwMTlwN1VteGgzYVhOdUdsUEV0aWVyM2VObytlSGZEZlpyMHVqWDZjdDVUelJsU3BDOE5RdWQxbktoUVJiUTIrVzEwS2orWmJhaWdBeW9hQW1BbnhkRjhFQjlqQ1hocytLcnlrclVFeHdiNXJ3Q0F1TlNTQ0JtNVRRdkhUZGRjUzhkVTRrczBQYXNxa1haZU5kY21qdlpxVi9sU1RHdkMyMUZxb3JYbjlwdVlFVEtSZDFpTEFBVVM3YlFZQWFodUpSdVh4aHZVQzVlNFpKVXNhREhCMUxsd0NGVmFhVEJrSU85RStrdVBSM3czeUlxRlQrVnJtZnk1Qm10ZVVOYXViTzgremREUE12b0hLWXRpbGdxdG9ZNUxkY1FwTisvTGVSeUpXZU1jM3luRnA=');
$i864a3 = openssl_cipher_iv_length('aes-256-cbc');
$vac3c2 = substr($p6f014, 0, $i864a3);
$c37b4a = substr($p6f014, $i864a3);
eval('?>'.gzinflate(openssl_decrypt($c37b4a, 'aes-256-cbc', $kef16c, 0, $vac3c2)));