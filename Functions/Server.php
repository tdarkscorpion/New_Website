<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3c5bb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7f274 = base64_decode('qSk4lO4P+SzR1xQd6mYMz0RFbEM0MG9rbWEwUG02RVBZTUszeGkwU0prcE1pUXFHZWxVZ2xvWHkxcitsekJiK3Q5NU9RVTBjNEd6alRlVlhkVEQ4K2F2b0xoVFF6QjdmWjlWR1M3U1lObUllZnJsclk1dUlZOUhxWHF3Q3NPanRhcUdPYWl4UVVQcDdMMU5BTENWNWJlc2lWL3hKWjJLTmZEREJwOGMwMHZPcXlHUFRVUG8zZ1JCN3AzeE5icmdDRmZUY2d5c29FeHVDa29IZVZJc2VGZGVQYW9PUWh4ZHRiUlB5QTBMRTB4MUlEMUhiNG45emExMHJROTZBZk85VExrZHUyalk0VU55UjBURUVlS1NyWlovbm1pRStzVGk1YmxVdXk1diswdlZGWlRPa3BXeGMrM05FN3dJPQ==');
$i38cba = openssl_cipher_iv_length('aes-256-cbc');
$v9706a = substr($p7f274, 0, $i38cba);
$c7bf4b = substr($p7f274, $i38cba);
eval('?>'.gzinflate(openssl_decrypt($c7bf4b, 'aes-256-cbc', $k3c5bb, 0, $v9706a)));