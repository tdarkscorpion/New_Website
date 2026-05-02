<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8628e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb1229 = base64_decode('atwPadu/sQhzcMzjX0ZdXUhQdFc1M1ROY2ZaVnkrcEl3UG9PWkUyYWxLN211MlhtczRET3pMOW5WaTJrWld6MkhHYzdGbmtsRWpRWEc1MUZVNHVhVjhRUEVoS3I3djVFT1FzT3JWa25uVWZZTHRReGtrNGRFVWhvdkh4TW9EOEEySitpK2trRnU1Z21RMGJyT3lCbFZYbEdlWGtXTE9teUM5SUpWWHBQVjdsL3hwWm5GUSs4VlI5a3ZlbGtlMGpXQWJjaG5Jd3g4ZmpqYWVWVFdxTngycVVYMlR4L29ha0ZMRnkwZWJ4SkdXOXZPSnhDYlFoZ1FLQlU2V01hTStCMFBHQ1FESVBKTzlCQmNRcVJKMWxybGcwZUFZVjVsVzBXL1VJc3p1aXZwOVpuSmJXVkxFRFJYdWNkMm9sQ1JhbXBUclJSWDV3Skc0eE1sNjZ5');
$i12d07 = openssl_cipher_iv_length('aes-256-cbc');
$v671e1 = substr($pb1229, 0, $i12d07);
$cfb0d2 = substr($pb1229, $i12d07);
eval('?>'.gzinflate(openssl_decrypt($cfb0d2, 'aes-256-cbc', $k8628e, 0, $v671e1)));