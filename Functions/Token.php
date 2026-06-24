<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k23b0a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p08fd8 = base64_decode('I/gypoZUzSYf1v5CmJEqvk9wYnI4R2ZxS1B1RHEwTVlHTkZ1TWVxVWdVUUlWUEJYN1JFZk1jMnkyOVlPaUN5VmtJaUVZNytiSERkV0NpYXk3TVBIVi9Zd1lWTzFCNTJ0U3Q0ZTZDK0t3TXRFKzhpNkNiZGNweW5JYTUyMHorRURFMTNiaUJibm5mRXZFU0J5RDJBak5Ock5NMjlGbnhobVR4cTlQc1FVQm12UzF5VmxqVmhIczJvVXB2MjQ0bWpsQ3ZUVURManU0elR5cFEzb29CbHV1S3EzMWZlUUg3OTdmMFZtemFNb1BXVHhudmpOMlZLOWhkTDl1QjczaHNZNFhnQ1V0UTRVcTlFcDVpWmE=');
$i34dd2 = openssl_cipher_iv_length('aes-256-cbc');
$v9781a = substr($p08fd8, 0, $i34dd2);
$c82c69 = substr($p08fd8, $i34dd2);
eval('?>'.gzinflate(openssl_decrypt($c82c69, 'aes-256-cbc', $k23b0a, 0, $v9781a)));