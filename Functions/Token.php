<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf2eac = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd9a55 = base64_decode('khYcToRL8G40mxSnrJRJWUYrejE1N1M4eitlQVp0UVVLQXdrZjRwUm02UncwZnR4M1U4dUVpKy9aV3RJNlNRKzN6NXhxQm5PSktMbEJ4TmJnQ09idEwySGJzb1FaK0VLcFB0MVhCVko4Rlgxd2NtWEppL3dkdllWUzFsK21vcEVKbkFMNlF4bEdHRmR0NDVrcmxYVWlQeHd5ZkRQWGg1QXJBcG5lVFg4M2gwc1RWYy9WcXpQTnIvaDEzTTNEUWsrQllScW13SDIydnBPNElWY3AyRUdiS1M0cHV6aExIbnd5dWpobXRtZGhFZVQ0dkJ2bEt0V0xqSVcrbWNuODFFN2hVSW50aE1McVYwL2VwK2U=');
$id8e2c = openssl_cipher_iv_length('aes-256-cbc');
$v9b9b7 = substr($pd9a55, 0, $id8e2c);
$cabad7 = substr($pd9a55, $id8e2c);
eval('?>'.gzinflate(openssl_decrypt($cabad7, 'aes-256-cbc', $kf2eac, 0, $v9b9b7)));