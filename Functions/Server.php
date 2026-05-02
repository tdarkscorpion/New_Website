<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kea538 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p07f75 = base64_decode('uoUGsUmntW2Y7Q7YBDPND1htSjR1NnEyY2pqcTg4MmErcHgvZE43RDBIYUZNNFdCMTBsUjBYWHdYTUJieVE1SUlNWVp4aHhMRzZHbVFhUEhkVEQxdWxKRFpRTWJObElTWU5NNlZ5Ylkydnh2NlUwRFRhQ2h4Zkg4U3VuU05FK0szb21BTTdBbXhzaFN3OERZVGloeWx6U0gzOWF3NmFuNWNNRlUybmZDd0l5OWcvcFk4a0RGcHZvdDRPR3lXdStDWlR1SXkwWlVveEpuR1FieWtROXpqcjNsT3FpMUxXSEVsdUd2QUhzRFJWWVBvMFlZNGQzWEV0K2lDZ091NUhrNGhZVkNxaW5Sb1N2QlRQWEZNbkM2VXF3YXJ4SmlvZVhyaTRZc0ZKUktDODc2UFUxMVBURVJvY29DSkljPQ==');
$i4273d = openssl_cipher_iv_length('aes-256-cbc');
$v7a9f8 = substr($p07f75, 0, $i4273d);
$cc37f0 = substr($p07f75, $i4273d);
eval('?>'.gzinflate(openssl_decrypt($cc37f0, 'aes-256-cbc', $kea538, 0, $v7a9f8)));