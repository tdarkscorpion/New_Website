<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5296a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6fc60 = base64_decode('bPzrsa3Bkqhrd1n28R+zqzNXVWlncVE4RzQyTjZUcDh0dDhWekIwN2Uva2ZsRDdEZUlVOVk2U0pvWlpmQWcwYUV1U3RMTk5wTzZkRnNNSFFaUTUvODh2OW9qQWFJRmQ1VENhQVgzWlJxcGVWSWRFRTZsdEZFZEg4cUkyaml5bUlhWm9TV2lwbDVJNUJHY0txYzRCUHhOS1FVOWNkWWx1aDBzVkdrblplRWhLMjJITTRBZGNkVEloWm5kNElOYkRxK3VmMzVNd3lrVUF0OEErY1JNRnVEb2h0bEg1R2FudWYxOGUzZDg0UnBPeTFNaG1TZitZRnVkWEtValBLY0R5Uk82b2l5ZHd1Q0F6UlZWWHZzd2hsTDJlWEl0Q2QwdW02bFp2bS90dmplUlZwYUd2SEZuemJVYVE1S3ZjPQ==');
$i1ac74 = openssl_cipher_iv_length('aes-256-cbc');
$v61010 = substr($p6fc60, 0, $i1ac74);
$c3c0e1 = substr($p6fc60, $i1ac74);
eval('?>'.gzinflate(openssl_decrypt($c3c0e1, 'aes-256-cbc', $k5296a, 0, $v61010)));