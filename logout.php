<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbcbe4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pee747 = base64_decode('pjBTupkCiqJ36JcqAmK3/2Q2NFIzeEFLWkpjTmo2dFM1TkMrdmZZRG9VL0dxOC9sSnZGVHY3OGtXc0pBZFZaTENqY0dqa3ZWRVVrWjRlcktXTGtWL09hblhxeEx2cnpmRjNkakhLWmRNMzBwQXRZZW1IdGk5MjBwMnQwPQ==');
$i6eba6 = openssl_cipher_iv_length('aes-256-cbc');
$v7c9db = substr($pee747, 0, $i6eba6);
$cb58b1 = substr($pee747, $i6eba6);
eval('?>'.gzinflate(openssl_decrypt($cb58b1, 'aes-256-cbc', $kbcbe4, 0, $v7c9db)));