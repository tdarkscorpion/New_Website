<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k85fbb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2ac81 = base64_decode('nJnuIpAZYhmBxDixS3Abdi9DZ1J3YVFuMm5la2FUcCtBY0N2VVREWmJGcHk1K0xLKzc4bHdzQk5FQTdDaXFFOHhFNWwzVkJZZ3VGQkF6by82YzlJMEUzeU1nNnVsK0kxTUVlNEVPWi8zbWlQVWJ5UEhGYlZLUXJvakhxT1R4dnYxbWxsbjJ2YlVLYThmUFp0UmIzdFk5V05UbG5KQWxINmVHd3hIdFcyMGRWWjFnZ3o4TjJkOG03OFZKbU1uK0o0UmJwMjhRaVJSN2dNNm00WnBYWjF0dFJ6a2p0NExuQ3ZyaGZ2RGw1TDdrVGt6Y3doNXlRaGsxa1hHZkFOdE51NkhYclhIZ3dSZExLK3FnQWhtdW5XT085ODQ5TFFkb2lPNXJxVlcxZTA0M1l6b04rSGtGc2VxM3BYUU9Gd3loTnVpY1BkWXJ5REhDUFUxdXpv');
$i9103a = openssl_cipher_iv_length('aes-256-cbc');
$vff198 = substr($p2ac81, 0, $i9103a);
$cd1589 = substr($p2ac81, $i9103a);
eval('?>'.gzinflate(openssl_decrypt($cd1589, 'aes-256-cbc', $k85fbb, 0, $vff198)));