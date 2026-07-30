<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb81b8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pab2a4 = base64_decode('xmYcdr9O3RblWvRVXTpw8lhDczRqbmNQMGl1Y1JBQlltbTlCaEpQb09HTVV4WUduZUpFV0xGZ05RU2RvWkFPc3BadmtsaWlGY2RZSWhJaG5tRjZtTUZzTXZoODJmc0pMRTY4bnVpck5QV1VFZENwUlcrYnA3YXc0RTRZTERWUUhDRkhnSUJPZ0M2QW9FWS9ubEFUM1dpOEgzNms2WE9VUWhRaG9yUnRvTU9MQ1N4V0x0a1RmWFNPN1lDWmVWSzl3UVh6cE8ySzdPdFpDNmtucy9zRHEyVW9EbjV4dkY1U29oMi9WRmM5czVVenBMN1ltOWcvMWdSNnJERTJXa0lLUEtvaTBzRWdMMTEyaGdVNUtFNGtQd2tzRS94bVA4NHZZRWg0VTdyWGJtMlV0YVRIdmh3elpkaGx4U3RIcjh0dk9sNU5nLytOd05kbEdTMW41');
$i8363f = openssl_cipher_iv_length('aes-256-cbc');
$vec59e = substr($pab2a4, 0, $i8363f);
$ca62e6 = substr($pab2a4, $i8363f);
eval('?>'.gzinflate(openssl_decrypt($ca62e6, 'aes-256-cbc', $kb81b8, 0, $vec59e)));