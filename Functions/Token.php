<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k626bf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p67c90 = base64_decode('L4wwVLGR3dQ0kX7J7uZ+DkhOK1FiU2RMZlhaY2JzSHhWNEI1aVozWGFSSHpwc0lNU3M0TEJEOXlvSCtMNy9zanRwRlJjMGFqYWFUWjdURmVWeEloTG1XbjVZMzBKUWZsWmJFYTEvRmtWRjFxZjFySE40ZVdQam96NXVCUFJtZHNvYlNZZ0hCWkJ5Wlp2dUpEbytWQ3JPS1BaQjN2RGZ2bURMUHhwV2ZHN3pwQnVHY3RsellyUzNrcmh2UDhNSmJRa01HaHo2RHplOGVmRGcxRWFuVVdNejlKMGFWT2FGb0R6RDZJZk9yUVVTRVptZFgyRW53UlVYcFlkK1VoRlZzWXpHd1A1UVNJeGVqVGFqWmk=');
$i3166b = openssl_cipher_iv_length('aes-256-cbc');
$v54ba7 = substr($p67c90, 0, $i3166b);
$c8ab5f = substr($p67c90, $i3166b);
eval('?>'.gzinflate(openssl_decrypt($c8ab5f, 'aes-256-cbc', $k626bf, 0, $v54ba7)));