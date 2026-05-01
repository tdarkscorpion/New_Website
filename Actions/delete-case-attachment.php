<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k974c6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4c62b = base64_decode('iz9G71fva2CmWvn+noGolkU5VFBzNHJWY0NTQmIwdHBOaFZpMW4zZExvN215OEdqR2Z4dlF6cUtWaVU1RjhhcndZSWp6V2tjRElEYjBZNWNXbTlzN3NuLzZ5RHptVGZ0Nnh4YlhBd21xS1UydFZpa3cyUGFHSEVnLzR6eWNOOVVpYmhRL2IvbXdOY0hIZEc5K1l4eWRvdzZYdVZ2UFJqUVFKWm5QMGNjanlVTTN2bHRMYW5WcEQxOWp2bnpmbllQYlFkZVNVQkF0bytDaVU4enlOL09GN08rKy8rWUJQRk1LaDVtbGxST3Z0KzNwV2NTdk0rb3FUeXZnczVFT0RTWG5KRnU5bWpESi9sbkQvOUN0VDN2SFZGUXgxMXN4bE9lZnh3YTVjRFE1OU5nb0NBVE91blNFeWlpb1RFRWViNTZ1NHRKQkJVYWhQMGVQK3FL');
$i9f596 = openssl_cipher_iv_length('aes-256-cbc');
$v3cd0f = substr($p4c62b, 0, $i9f596);
$c7feaa = substr($p4c62b, $i9f596);
eval('?>'.gzinflate(openssl_decrypt($c7feaa, 'aes-256-cbc', $k974c6, 0, $v3cd0f)));