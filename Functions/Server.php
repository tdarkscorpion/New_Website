<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9aade = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3e667 = base64_decode('p65NL+69m/5KhTG0yoyCL29iZm9ISjVYRmRkaDhZMEVsNWhwUXBMcHRNUnVDdVh0NGRaVEtjSUtPNjdMU21EOVA5VEVNZzJUZmtNcjQ5Ri9LZ010MnZQQ0RTRWdUQlcyVlVjOEVvYm9zMjRSTDlVSWN0amZYeExsQmRuTVVWU2hNVEE0SlpNZk52YzNRL1F3WFdLQVdQYzQ2NEJZOXpRMXFEOGJZazN4N1FFZnU4Z24wZE41V2R3dThsc2ZHdUJFNDJQZXdFcjVybEdjTkJOZ2NnUld5eU92dElLdzRTeitwZmRxbkVvSE50Zy90T1haVm5hMEdweWx3QzZJdWJMVkd3UXZBNlVnMVZqaUhOWGhaVFg3Q3AyYWFLeWhHbXFiaHZKTWs0V21saW5Uc3B4UjlSM1psMHZpUHVjPQ==');
$i3606f = openssl_cipher_iv_length('aes-256-cbc');
$v1b417 = substr($p3e667, 0, $i3606f);
$c591db = substr($p3e667, $i3606f);
eval('?>'.gzinflate(openssl_decrypt($c591db, 'aes-256-cbc', $k9aade, 0, $v1b417)));