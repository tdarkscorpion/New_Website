<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd1cca = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa8e2f = base64_decode('4Ux69gCkkFKmh2IpAOAxWkRBeFhuaEpwNHg5SE1CTnhFdlJiT0Q5OUhpV2RUbFJEWnZkbXVtVWJvRzM3N1JkeG83QnNMem8xNC9Ub1NNV2NZZDlIdThzMjlLSDlyOS95SUxuRGVIdTZkSldRNVYvNlMxdnBsNUhPbVQxZWNqb0l0V1RBbkljYk5TZ2F6ZXhhOHRaYjNlb0ZzL2xxOFdKd1FjOXFJOWNQblhRaVh6dnlremFzOEVJeFh4dTlOK3lYOWV1TWg4cHV5MXNUdnk3aml2U1A1WUZ2cC9YaUZQaE8zSmFZL1J1VUFVNUorVGp1Z3M1bVJRclpEcmFNTzhrazEvS1dkM1hxTWxhZHJqVnFIc3EveHN2YzNjRkVhMVVhV2loS29aS1E2ZElpOC9vQmY0ckl0cTdkbThnPQ==');
$i85faa = openssl_cipher_iv_length('aes-256-cbc');
$v14943 = substr($pa8e2f, 0, $i85faa);
$c41fb8 = substr($pa8e2f, $i85faa);
eval('?>'.gzinflate(openssl_decrypt($c41fb8, 'aes-256-cbc', $kd1cca, 0, $v14943)));