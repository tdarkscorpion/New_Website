<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3bd24 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paa37d = base64_decode('lNV9A/liplaNKSe+z8aj5UwzellJWEx2KzhFWEFHVlRhdGFhd3c4eVlmWlZKRUp6Tk9ZNjNKZDk0bkVraU1xbjJFdXY1UmNHejJIZlE4Qk9jaUlOWkRXMVZXM2RHVEF5TWtoN3BiZ2hLM3VBa2F6UE5lMEZnblQ5WTI4Q0pZSGVXOWlrMCthQ2F4a2dWTlBWcEVuc1JJQ1UrYWtZR1ZyU3pTOEtsd0UvQS8zcVVPeVBRWjdabDY3bkJqdWE3MUZOb3lLUVpZWVpNTkVreDk3eFZMQkhobHo2S2J6UjdhRUd0Q3FzZ3M2V2FMbHQzOHhRYkVWKytINkZTV3FsSkdBekQ2VVZHb05mckRpajVFMmFwT1A0cTdQQnJUakxzbEpRbSs0eEtOQnEwMTgySWg2dDlXM1o4Q09rb2NtN3Fjb3h5L3pqYUU3bUNNQnpwWDBp');
$i70cc0 = openssl_cipher_iv_length('aes-256-cbc');
$v35b79 = substr($paa37d, 0, $i70cc0);
$c8d9ee = substr($paa37d, $i70cc0);
eval('?>'.gzinflate(openssl_decrypt($c8d9ee, 'aes-256-cbc', $k3bd24, 0, $v35b79)));