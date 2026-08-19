<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdf182 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62f45 = base64_decode('moB2gmRDZsQFnz73TSVtA1VJSXplVWh5TmVGUXpVdTZQUlJEZnVXbEtneEd0TGZ3SXIzZjNkTmgycHlpTWM5a0gwZmtReDd2ZVVtZ3grZmJzaFZYYnRwOXJsUUpqVngzdzFFdERrMDNVeFplL0lOK2JSczUzRzAyeHZFRGV3a04rckpWMUQ0bnI0NHBNTzFSaEY4SmNjNzNHd2UvVEJCdCtITzY0TEdNN0t2bExTK0RFVEIvMkJ2Zjd0YU5uYlhMeU5yVWFGcWpiM3E2c3JKbFRoKzUrb2Z4WGV3L016Q1NOdjZadHgyTmNZUjNHRlFpTlBVMzFGNWFpb2dWeFBla1I3bUFuTE5ObjErdEo2eXcyaVg3RTZLMFhoVjlldUpya1lzTVJYai9OUzRkUWYxMDh6ZExOd0UvQVlNYTNmeWtGbXErdU8zcGZjSTUvNUhYU2o4Umo0NDhIekJCNUJ3VWtMV21zZz09');
$i3ad72 = openssl_cipher_iv_length('aes-256-cbc');
$v02a80 = substr($p62f45, 0, $i3ad72);
$c978f4 = substr($p62f45, $i3ad72);
eval('?>'.gzinflate(openssl_decrypt($c978f4, 'aes-256-cbc', $kdf182, 0, $v02a80)));