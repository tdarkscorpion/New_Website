<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k69d05 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb93dd = base64_decode('RCmmk0FUxbrY6aCoIk55GE84Tlc2bEhCYXUzKzJWV0k1cXQ5RkowOExhenhoUzBhRlIwZGUzRkU0SVlnN2pBb0c5TGIvQUs2YjR2d2pDallDNkI0L2p1dGJtWHYrRWxjWDNyYVM4cC9MbGxXTFdvNkFzUnZJZkhpOHJzZU9WYXQ4NHh5YlZabzUzNzljSndnSEpXNDJJQkw4SlptTEpPWFA1bC9Md29hTXM1RzBDWVM4bTNCUWRuSlJydWtiNVlWa3lyM0xYU3gwcVgwRjRJU0UvUFRHSkpsaGttRWdiNTMrUHZvVU0vSHh3cHBJTmJlNlJua2pqWlBuZ3cvVUttM0JxNk1hUUtLcVFGclJmRzg=');
$i3a501 = openssl_cipher_iv_length('aes-256-cbc');
$v4be06 = substr($pb93dd, 0, $i3a501);
$c41e77 = substr($pb93dd, $i3a501);
eval('?>'.gzinflate(openssl_decrypt($c41e77, 'aes-256-cbc', $k69d05, 0, $v4be06)));