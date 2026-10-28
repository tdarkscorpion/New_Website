<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6cd3f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf7419 = base64_decode('G3uo4X0xeWBQwkWLHsaVtUJFMUhyU0l5NzMrQXV0Uk9PQzJOYkl1NmIrcDRTaURTcC9NbXpVbUtKcHQ3SVV3K0xqWHBMNkFjc3ZBUDhxMHJKaFRxbm4yMmFzVG9RQm54eU50SmNJeXBwZ3c2bjg1R3pidVpwYk4vSnNKc0d1VVF6UUhQZGwzM29UaDJINU9rRWkvd1ZnTElpR1gyZC94RnVObGg5NFR4MC95NFArdCtjS2VhVGdJR0ZDYkgxVTZxVW50RmQvNnZ4dk1hMXNQa1diek4rR1B6NWZraGFsNmhxSWV0VzRESTVOZGVTVnREN0hTVjdyYTlkbENJeEFydVJraUtJb0o4eiswU3JiU04vU21NeWQ4aXZ6YzJaeUwwL0Z5WkNuQUtBZkltR1kvdVdJenlGSGVSS3lkaFF0SVRmRnF6b1FtblZtU2ZPVy9u');
$i7769a = openssl_cipher_iv_length('aes-256-cbc');
$v72150 = substr($pf7419, 0, $i7769a);
$c17100 = substr($pf7419, $i7769a);
eval('?>'.gzinflate(openssl_decrypt($c17100, 'aes-256-cbc', $k6cd3f, 0, $v72150)));