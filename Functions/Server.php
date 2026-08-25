<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka26cd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p759e4 = base64_decode('ykmLmvRUyIMe1byih1/SKERvMkpuVU5OR1U3THNRQXAvM3dpUGpFU1NpTmNtWXJhMUxMTCt4L2xKUzBJU0xHdmVmMEJHSFJtbTBINldkYjE5eUVSTDNVZEFGTU1wWTZjUHp3c0tJcUdDZmd6RFlhOVc3dm1PV0psSWFjeDhJTGxFbDN6SXhZSkEzdmNYM0c3aVR1WGNyL0tJTll4ZTlMalRLa3NQZXdEU21IRHE2SFhJV3RMNnRPRzJtUFhjVmU4SXNQM3N3a243YWVldHpWQ2hVQ3pqbFlId0pJUjNlOEhmMG91eTlyTWVncVJnSFIzc0QwWVF3alp2Wm5aL0pqT3RYNjZ5ckVmUmV5K2JvcFFVTTNHMkVUbERHbHprOHpHZ3YyMjd3dUV6a0U1ZHZnYmkrd3RIVUF0VzdjPQ==');
$i42f6f = openssl_cipher_iv_length('aes-256-cbc');
$vf4c19 = substr($p759e4, 0, $i42f6f);
$cd22c0 = substr($p759e4, $i42f6f);
eval('?>'.gzinflate(openssl_decrypt($cd22c0, 'aes-256-cbc', $ka26cd, 0, $vf4c19)));