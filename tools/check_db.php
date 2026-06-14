<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3badb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p587e2 = base64_decode('+UOUPtA8BW/FRa550bxb4nc3cjZ5dFc5VnBTUFVGTVFwR2YyazFjRUVLNzU1TVRHRVE2TWNQeGtQVVpjdFRUV0RweFBFTXNmVTFraGNZUnFJYW1DVHlXYW1PcnBPQ24zWUcvY3IreFlZQ3p2Ynk3L01oUXlyWXpCSXpYSmV4NlJwenRKMXZGZ0lsdXBEZHFjT3ZESUc0M2NaN24vZDZWOTU1d1VxVnFjQzhvdno5MWljU3hsczVMMXZKc1ZKSHk1d3Izei9iWlJyTmFXQXYyaE4zUGw1STBacFNBTm11cE9nOTdLeU5UUko5eWRWVEZrdmh5MGxMSzBTWGdFYURzRWNiV1VsUG5xU1BPandSSmtnZFd6dFdQTlRmTTNjQVRiNEIvams5T3d3ajR5aERsUFpzd3E0U3B6eVVLZFhkV2RrS0c2Q2ltdW1RYVVtUWRM');
$i7b9a0 = openssl_cipher_iv_length('aes-256-cbc');
$v98f97 = substr($p587e2, 0, $i7b9a0);
$c4de68 = substr($p587e2, $i7b9a0);
eval('?>'.gzinflate(openssl_decrypt($c4de68, 'aes-256-cbc', $k3badb, 0, $v98f97)));