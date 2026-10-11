<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6d5cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p50f4c = base64_decode('G3Z2R7xmRIrDGhDDiJgC33lVUjZoSy9xYlRyOXh5UHBuY1NXR0FLZEduMjJ5dFo4c1l4S2x5cFJuN2pJQlFmQnRVS2l6T3ZibjNJY3BsMjdqV0NZWERyMW9yTEh2MXVMOVRSNjU1Q3ZreVJHcWxWSG1aK0NzekJJMFRJcXdJcjdwN3FHelVWNEtycDlucHAyOWRmTUxSK0lSK0k2UGRYeU9CSjVSRmRHbXlNVlcyc3VYZDNrSmluaG44WnhmTzRuL3NHUEpETlZ0cjVtRzZSSU1KdjBjN1FTYnc3RTlsbTU1NHdCYWdzZElqRjlldlJXZ0IzM0drR1RTMHJPQzRmWEJ6YnJmSnhXRE56ZVZzcXozaHV6MHBVNExCTm9vaFF5VWNBeWZVUlg1TmhwZ3VOcE5WTGkwQ2hiTWxJMmJTd2xvc0gzTEJDNkJMRjZjVnp6eVlvY3RQQXhJN3R3M3RYODJwemNIVmUybGFmM1BwWHY5bndIYjZnMTJKcz0=');
$i8c1e5 = openssl_cipher_iv_length('aes-256-cbc');
$v8e5de = substr($p50f4c, 0, $i8c1e5);
$ccb5d2 = substr($p50f4c, $i8c1e5);
eval('?>'.gzinflate(openssl_decrypt($ccb5d2, 'aes-256-cbc', $k6d5cc, 0, $v8e5de)));