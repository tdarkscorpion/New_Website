<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k58b18 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p98894 = base64_decode('UKo4P8PytGllI1aTLY3IAngvVklSb0tsSllMajFNcEZlRUlOK0FKcDB6Zk1GTW0vRnovQlQxOVpwWlM2ZzllT0kxYVViQmo4Uko2eUR0djliQUJvcHZKQ3hpbXNmcFN6b1o5MXl2QVhTUlJmOVFIMStvRW82WmU0aWs1bEF5djFYd2cvTnZVTThqSXBwUkdIdVdxY0N3OWdRYVBLK0xCeitjZ2wxQjRWZStzNDNmWlE5MHl4ZVZwSEZFM2JxVi9aVVNWeUlYMyttZnh0V0hSTXpwQWIwUXU4RVFlNlg0dzdhOERTSjhTQUpla1JpcUUweko2a1dkWEI5RUp4VnRXRkt5ald6N25tQlphWEtQbUVSWmx5MGtrQnk4OGRSNllsVDZvcVh6UjlBbUl0RHlGZEFHcWJ4RS9kTjVSRlZqc0ZFTENsdHI4cEk1dHpSUzZGcWtwdXZJQ3JYMmRjSlVXQnJIOTRqUT09');
$i3a19b = openssl_cipher_iv_length('aes-256-cbc');
$vf4ddb = substr($p98894, 0, $i3a19b);
$cc98e1 = substr($p98894, $i3a19b);
eval('?>'.gzinflate(openssl_decrypt($cc98e1, 'aes-256-cbc', $k58b18, 0, $vf4ddb)));