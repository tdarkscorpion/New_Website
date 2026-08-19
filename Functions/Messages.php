<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k99f2f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe12a7 = base64_decode('L4nbPRPGo3dqFp/QscZhQHJDMlFHcEZvZU9oU2YxVDc3RUp3R0l5VDlmb04zOE5IVVZteG45NVdwZjRXZFp5bUVOb3VEZVFGeDJRZjI0UjdkRjhCcWQ4azc2QnFCc3MwdzY2eG9vblVvb1RSWmZCU2hYWTc4YUxsckIyK0pZZnprRWx1MkNESGQ2K3hERi95SUtpU2FIMWl5NGhNQkpqMmZuUEpILzFqYWZkaElTWjlKOTV6dGJiZCs4TDFJYnhKZzlWSFpiTU4rbHNFSmlzQVJwbkcwOU5TaHhaRVdyQU1mUXR2K1dvR3c5QzlLZE9yeFdEU00zRk9RcHl4aTlxTFJ2V1d0S0tnSmk3RERLSU9KaFNjUWF5YytRQkZERnF6U2hTSGdkcHBRTXhsa2VCU1VxMExseHJRc3JVPQ==');
$i801fd = openssl_cipher_iv_length('aes-256-cbc');
$v5b7ae = substr($pe12a7, 0, $i801fd);
$c87fff = substr($pe12a7, $i801fd);
eval('?>'.gzinflate(openssl_decrypt($c87fff, 'aes-256-cbc', $k99f2f, 0, $v5b7ae)));